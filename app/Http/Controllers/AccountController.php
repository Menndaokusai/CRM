<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function arr($num){

        $arr1=[
            'Account_Name','Account_Type','Primary_Phone','Alternate_Phone','Address',
            'Ownership','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }
    }
    public function index()
    {
        $accounts = \App\Account::paginate(15);
        return view('/admin/account/index',compact('accounts'));
    }

    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $account=account();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

        $account->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $account=account()->find($request->get('id'));
        return $account->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $account=account()->find($request->get('id'));

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

        $account->save();

        return suc();

    }
//    public function read()
//    {
//        if(!is_logged())
//        {
//            return err('请先登录');
//        }
//        $account=account()
//            ->orderBy('created_at')
//            ->get($this->arr(3))
//            ->keyBy('id');
//        return suc($account);
//    }
}

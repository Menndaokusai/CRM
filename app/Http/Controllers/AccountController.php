<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function arr($num){
        $arr1=[
            Account_Name,Account_Type,Primary_Phone,Alternate_Phone,Address,
            Ownership,Email,Manager
        ];
        $arr2=[
            'Account_Name','Account_Type','Primary_Phone','Alternate_Phone','Address',
            'Ownership','Email','Manager'
        ];
        $arr3=[
            'id','Account_Name','Primary_Phone','Email','Manager',
            'created_at','updated_at'
        ];

        if($num==1){
            return $arr1;
        }
        if($num==2){
            return $arr2;
        }
        if($num==3){
            return $arr3;
        }
    }
    public function index()
    {
        return view('/admin/account/index');
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }


        $account=account();
        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $account->$arr1[$i]=$request->get($arr2[$i]);
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
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $account->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        /*

        if($request->get('name')){
            $account->name=$request->get('name');
        }
        if($request->get('account_type')){
            $account->account_type=$request->get('account_type');
        }
        if($request->get('officephone')){
            $account->officephone=$request->get('officephone');
        }
        if($request->get('alternatephone')){
            $account->alternatephone=$request->get('alternatephone');
        }
        if($request->get('address')){
            $account->address=$request->get('address');
        }
        if($request->get('ownership')){
            $account->ownership=$request->get('ownership');
        }
        if($request->get('email')){
            $account->email=$request->get('email');
        }
        if($request->get('manager')){
            $account->manager=$request->get('manager');
        }
*/
        $account->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $account=account()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');
        return suc($account);
    }
}

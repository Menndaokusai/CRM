<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $arr1=[name,account_type,PrimaryPhone,AlternatePhone,address,ownership,email,manager];
        $arr2=['name','account_type','PrimaryPhone','AlternatePhone','address','ownership','email','manager'];

        $account=account();

        for($i=0;$i<count($arr1);$i++){
            $account->$arr1[$i]=$request->get($arr2[$i]);
        }

        /*
        $account->name=$request->get('name');
        $account->account_type=$request->get('account_type');
        $account->officephone=$request->get('officephone');
        $account->alternatephone=$request->get('alternatephone');
        $account->address=$request->get('address');
        $account->ownership=$request->get('ownership');
        $account->email=$request->get('email');
        $account->manager=$request->get('manager');
*/
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

        $arr1=[name,account_type,PrimaryPhone,AlternatePhone,address,ownership,email,manager];
        $arr2=['name','account_type','PrimaryPhone','AlternatePhone','address','ownership','email','manager'];

        $account=account()->find($request->get('id'));

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
            ->get(['id','name','created_at','updated_at'])
            ->keyBy('id');
        return suc($account);
    }
}

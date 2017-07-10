<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LeadController extends Controller
{
    //
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $arr1=[name,Designation,PrimaryPhone,MobilePhone,address,Company,email,manager];
        $arr2=['name','Designation','PrimaryPhone','MobilePhone','address','Company','email','manager'];

        $lead=lead();

        for($i=0;$i<count($arr1);$i++){
            $lead->$arr1[$i]=$request->get($arr2[$i]);
        }

        $lead->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $lead=lead()->find($request->get('id'));
        return $lead->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $arr1=[name,Designation,PrimaryPhone,MobilePhone,address,Company,email,manager];
        $arr2=['name','Designation','PrimaryPhone','MobilePhone','address','Company','email','manager'];

        $lead=lead()->find($request->get('id'));

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $lead->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $lead->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $lead=lead()
            ->orderBy('created_at')
            ->get(['id','name','created_at','updated_at'])
            ->keyBy('id');
        return suc($lead);
    }
}

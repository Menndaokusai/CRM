<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LeadController extends Controller
{
    //
    public function arr($num){
        $arr1=[
            Lead_Name,Designation,Primary_Phone,Mobile_Phone,Address,
            Company,Email,Manager
        ];
        $arr2=[
            'Lead_Name','Designation','Primary_Phone','Mobile_Phone','Address',
            'Company','Email','Manager'
        ];
        $arr3=[
            'id','Lead_Name','Company','Primary_Phone','Manager',
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

    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $lead=lead();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

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

        $lead=lead()->find($request->get('id'));
        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

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
            ->get($this->arr(3))
            ->keyBy('id');
        return suc($lead);
    }
}

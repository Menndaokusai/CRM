<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialCustomerController extends Controller
{
    public function arr($num){
        $arr1=[
            PC_Name,Industry,Primary_Phone,Mobile_Phone,Address,
            Company,Email,Manager
        ];
        $arr2=[
            'PC_Name','Industry','Primary_Phone','Mobile_Phone','Address',
            'Company','Email','Manager'
        ];
        $arr3=[
            'id','Company','Mobile_Phone','PC_Name','Industry',
            'Manager','created_at','updated_at'
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
        return view('/admin/potentialcustomer/index');
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $pc->$arr1[$i]=$request->get($arr2[$i]);
        }

        $pc->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $pc=pc()->find($request->get('id'));
        return $pc->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $pc->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $pc->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($pc);
    }
}

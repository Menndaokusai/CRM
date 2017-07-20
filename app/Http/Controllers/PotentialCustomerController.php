<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialCustomerController extends Controller
{
    public function arr($num){

        $arr1=[
            'PC_Name','Industry','Primary_Phone','Mobile_Phone','Address',
            'Company','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $pc = \App\PotentialCustomer::paginate(15);
        return view('/admin/PotentialCustomer/index',compact('pc'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
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

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

        $pc->save();

        return suc();

    }
//    public function read()
//    {
//        if(!is_logged())
//        {
//            return err('请先登录');
//        }
//
//        $pc=pc()
//            ->orderBy('created_at')
//            ->get($this->arr(3))
//            ->keyBy('id');
//
//        return suc($pc);
//    }
}

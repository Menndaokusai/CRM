<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialCustomerController extends Controller
{
    public function arr($num){

        $arr1=[
            'PC_Name','Industry','Primary_Phone','Mobile_Phone','city',
            'Company','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $pcs = \App\PotentialCustomer::paginate(15);
        return view('/admin/PotentialCustomer/index',compact('pcs'));
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
                $pc[$value]=$_POST[$value];
            }
        }

        $pc->save();

        return back();
    }
    public function del($id)
    {
        $user=pc()->find($id);
        return $user->delete()?redirect('/admin/opportunity'):back();
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
                $pc[$value]=$_POST[$value];
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

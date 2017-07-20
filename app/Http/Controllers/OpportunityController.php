<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function arr($num){
        $arr1=[
            'Opportunity_Name','Account_Name','Contact_Name','Amount','Type',
            'Expected_Close_Date','Sales_Stage','Probability','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $opp = \App\Opportunity::paginate(15);
        return view('/admin/opportunity/index',compact('opp'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $opp=opp();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $opp[$value]=$_POST[$value];
            }
        }

        $opp->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $opp=opp()->find($request->get('id'));
        return $opp->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $opp=opp()->find($request->get('id'));

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

        $opp->save();

        return suc();

    }
//    public function read()
//    {
//        if(!is_logged())
//        {
//            return err('请先登录');
//        }
//
//        $opp=opp()
//            ->orderBy('created_at')
//            ->get($this->arr(3))
//            ->keyBy('id');
//
//        return suc($opp);
//    }
}

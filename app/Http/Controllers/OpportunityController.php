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
        $opps = \App\Opportunity::paginate(15);
        return view('/admin/opportunity/index',compact('opps'));
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

        return back();
    }
    public function del($id)
    {
        $user=opp()->find($id);
        return $user->delete()?redirect('/admin/potentialcustomer'):back();
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

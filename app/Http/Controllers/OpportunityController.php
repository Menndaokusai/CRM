<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function arr($num){
        $arr1=[
            Opportunity_Name,Account_Name,Contact_Name,Amount,Type,
            Expected_Close_Date,Sales_Stage,Probability,Manager
        ];
        $arr2=[
            'Opportunity_Name','Account_Name','Contact_Name','Amount','Type',
            'Expected_Close_Date','Sales_Stage','Probability','Manager'
        ];
        $arr3=[
            'id','Opportunity_Name','Account_Name','Sales_Stage','Expected_Close_Date',
            'Amount','Manager','Contact_Name','created_at','updated_at'
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
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $opp->$arr1[$i]=$request->get($arr2[$i]);
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
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $opp->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $opp->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $opp=opp()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($opp);
    }
}

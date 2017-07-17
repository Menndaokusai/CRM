<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function arr($num){
        $arr1=[
            Campaign_Name,Status,Type,Expected_Close_Date,Sponsor,Target_Audience,Target_Size,Num_Sent,Budget_Cost,
            Actual_Cost,Expected_Response,Expected_Revenue,Expected_Sales_Count,Actual_Sales_Count,Expected_Response_Count,
            Actual_Response_Count,Expected_ROI,Actual_ROI,Manager
        ];
        $arr2=[
            'Campaign_Name','Status','Type','Expected_Close_Date','Sponsor','Target_Audience','Target_Size','Num_Sent','Budget_Cost',
            'Actual_Cost','Expected_Response','Expected_Revenue','Expected_Sales_Count','Actual_Sales_Count','Expected_Response_Count',
            'Actual_Response_Count','Expected_ROI','Actual_ROI','Manager'
        ];
        $arr3=[
            'id','Campaign_Name','Type','Status','Expected_Revenue',
            'Expected_Close_Date', 'Manager','created_at','updated_at'
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
        return view('/admin/campaign/index');
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $campaign=campaign();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $campaign->$arr1[$i]=$request->get($arr2[$i]);
        }

        $campaign->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $campaign=campaign()->find($request->get('id'));
        return $campaign->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $campaign=campaign()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $campaign->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $campaign->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $campaign=campaign()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');
        return suc($campaign);
    }
}

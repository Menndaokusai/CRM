<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceContractController extends Controller
{
    public function arr($num){
        $arr1=[
            Subject,Status,Type,Start_Date,End_Date,Tracking_Unit,
            Total_Units,Used_Units,Related,Priority,Maneger
        ];
        $arr2=[
            'Subject','Status','Type','Start_Date','End_Date','Tracking_Unit',
            'Total_Units','Used_Units','Related','Priority','Maneger'
        ];
        $arr3=[
            'id','Subject','Related','Maneger','Start_Date',
            'End_Date','Status','created_at','updated_at'
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

        $sc=sc();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $sc->$arr1[$i]=$request->get($arr2[$i]);
        }

        $sc->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $sc=sc()->find($request->get('id'));
        return $sc->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $sc=sc()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $sc->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $sc->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $sc=sc()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($sc);
    }
}
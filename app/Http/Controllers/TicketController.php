<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function arr($num){
        $arr1=[
            Title,Account_Name,Contact_ID,Status,Severity,Hours,
            Days,Category,Priority,Description,Solution,Maneger
        ];
        $arr2=[
            'Title','Account_Name','Contact_ID','Status','Severity','Hours',
            'Days','Category','Priority','Description','Solution','Maneger'
        ];
        $arr3=[
            'id','Title','Account_Name','Status','Priority',
            'Maneger','Contact_ID','created_at','updated_at'
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
        return view('/admin/ticket/index');
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $ticket->$arr1[$i]=$request->get($arr2[$i]);
        }

        $ticket->save();

        return suc();
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $ticket=ticket()->find($request->get('id'));
        return $ticket->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }

    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket()->find($request->get('id'));

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;count($arr1);$i++){
            if($request->get($arr2[$i])){
                $ticket->$arr1[$i]=$request->get($arr2[$i]);
            }
        }

        $ticket->save();

        return suc();

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');

        return suc($ticket);
    }
}

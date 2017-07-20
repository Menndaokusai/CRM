<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function arr($num){
        $arr1=[
            'Title','Account_Name','Contact_ID','Status','Severity','Hours',
            'Days','Category','Priority','Description','Solution','Maneger'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $tickets = \App\Ticket::paginate(15);
        return view('/admin/ticket/index',compact('tickets'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $tickets[$value]=$_POST[$value];
            }
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

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $tickets[$value]=$_POST[$value];
            }
        }

        $ticket->save();

        return suc();

    }
//    public function read()
//    {
//        if(!is_logged())
//        {
//            return err('请先登录');
//        }
//
//        $ticket=ticket()
//            ->orderBy('created_at')
//            ->get($this->arr(3))
//            ->keyBy('id');
//
//        return suc($ticket);
//    }
}

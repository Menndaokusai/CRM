<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    //
    public function arr($num){
        $arr1=[
            'Contact_Name','Mobile_Phone','Home_Phone','Office_Phone','Home_Address',
            'Work_Address','Asst_Phone','Asst_Name','Sex','Department',
            'Designation','Email','Company','Manager','Birth'
        ];
        $arr2=[
            Contact_Name,Mobile_Phone,Home_Phone,Office_Phone,
            Home_Address,Work_Address,Asst_Phone,Asst_Name,Sex,
            Department,Designation,Email,Company,Manager,Birth
        ];
        $arr3=[
            'id','Contact_Name','Designation','Email','Office_Phone',
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

    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $contact=contact();

        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            $contact->$arr2[$i]=$request->get($arr1[$i]);
        }

        /*
        $contact->name=$request->get('name');
        $contact->privatephone=$request->get('privatephone');
        $contact->homephone=$request->get('homephone');
        $contact->workphone=$request->get('workphone');
        $contact->home_address=$request->get('home_address');
        $contact->work_address=$request->get('work_address');
        $contact->asst_phone=$request->get('asst_phone');
        $contact->asst_name=$request->get('asst_name');
        $contact->sex=$request->get('sex');
        $contact->department=$request->get('department');
        $contact->job=$request->get('job');
        $contact->email=$request->get('email');
        $contact->company=$request->get('company');
        $contact->manager=$request->get('manager');
        $contact->birth=$request->get('birth');
*/
        $contact->save();
        return '添加成功！';
    }
    public function del(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $contact=contact()->find($request->get('id'));
        return $contact->delete()?['status'=>1,'msg'=>'删除成功']:['status'=>0,'msg'=>'删除失败'];
    }
    public function updt(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $contact=Contact()->find($request->get('id'));
        $arr1=$this->arr(1);
        $arr2=$this->arr(2);

        for($i=0;$i<count($arr1);$i++){
            if($request->get($arr1[$i])){
                $contact->$arr2[$i]=$request->get($arr1[$i]);
            }
        }

        $contact->save();

        return suc('success');

    }
    public function read()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $contact=contact()
            ->orderBy('created_at')
            ->get($this->arr(3))
            ->keyBy('id');
        return ['status' => 1, 'data' => $contact];
    }
    public function index()
    {
        $contacts = \App\Contact::paginate(15);
        return view('/admin/contact/index',compact('contacts'));

    }
}

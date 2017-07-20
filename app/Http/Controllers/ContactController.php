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

        if($num==1){
            return $arr1;
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

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

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

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $contact[$value]=$_POST[$value];
            }
        }

        $contact->save();

        return suc('success');

    }
//    public function read()
//    {
//        if(!is_logged())
//        {
//            return err('请先登录');
//        }
//        $contact=contact()
//            ->orderBy('created_at')
//            ->get($this->arr(3))
//            ->keyBy('id');
//        return ['status' => 1, 'data' => $contact];
//    }
    public function index()
    {
        $contacts = \App\Contact::paginate(15);
        return view('/admin/contact/index',compact('contacts'));

    }
}

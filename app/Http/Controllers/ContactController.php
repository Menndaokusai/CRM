<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    //
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $arr1=['name','MobilePhone','HomePhone','OfficePhone','home_address','work_address','asst_phone'
            ,'asst_name','sex','department','Designation','email','company','manager','birth'];
        $arr2=[name,MobilePhone,HomePhone,OfficePhone,home_address,work_address,asst_phone
            ,asst_name,sex,department,Designation,email,company,manager,birth];

        $contact=contact();

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

        $arr1=['name','MobilePhone','HomePhone','OfficePhone','home_address','work_address','asst_phone'
            ,'asst_name','sex','department','Designation','email','company','manager','birth'];
        $arr2=[name,MobilePhone,HomePhone,OfficePhone,home_address,work_address,asst_phone
            ,asst_name,sex,department,Designation,email,company,manager,birth];

        for($i=0;$i<count($arr1);$i++){
            if($request->get($arr1[$i])){
                $contact->$arr2[$i]=$request->get($arr1[$i]);
            }
        }
/*
        if($request->get('name')){
            $contact->name=$request->get('name');
        }
        if($request->get('privatephone')){
            $contact->privatephone=$request->get('privatephone');
        }
        if($request->get('homephone')){
            $contact->homephone=$request->get('homephone');
        }
        if($request->get('workphone')){
            $contact->workphone=$request->get('workphone');
        }
        if($request->get('home_address')){
            $contact->home_address=$request->get('home_address');
        }
        if($request->get('work_address')){
            $contact->work_address=$request->get('work_address');
        }
        if($request->get('asst_phone')){
            $contact->asst_phone=$request->get('asst_phone');
        }
        if($request->get('asst_name')){
            $contact->asst_name=$request->get('asst_name');
        }
        if($request->get('sex')){
            $contact->sex=$request->get('sex');
        }
        if($request->get('department')){
            $contact->department=$request->get('department');
        }
        if($request->get('job')){
            $contact->job=$request->get('job');
        }
        if($request->get('email')){
            $contact->email=$request->get('email');
        }
        if($request->get('company')){
            $contact->company=$request->get('company');
        }
        if($request->get('manager')){
            $contact->manager=$request->get('manager');
        }
*/

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
            ->get(['id','name','created_at','updated_at'])
            ->keyBy('id');
        return ['status' => 1, 'data' => $contact];
    }
}

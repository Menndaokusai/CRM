<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $contact=contact();
        $contact->title=$request->get('title');
        $contact->desc=$request->get('desc');

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
        if($request->get('title')){
            $contact->title=$request->get('title');
        }

        if($request->get('desc')){
            $contact->desc=$request->get('desc');
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
            ->get(['id','title','desc','created_at','updated_at'])
            ->keyBy('id');
        return ['status' => 1, 'data' => $contact];
    }
}

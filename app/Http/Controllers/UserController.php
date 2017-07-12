<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        $users = \App\AdminUser::paginate(10);
        return view('/admin/user/index', compact('users'));
    }

    /*
     * 创建用户
     */
    public function create()
    {
        return view('/admin/user/add');
    }

    /*
     * 创建用户
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'password' => 'required'
        ]);

        $name = request('name');
        $password = bcrypt(request('password'));

        \App\AdminUser::create(compact('name', 'password'));

        return redirect('/admin/users');
    }
    public function del($id)
    {
        $a=\Auth::guard("web")->user()->id;
        if($a==$id)
        {
            return "<script language=\"JavaScript\">alert(\"不可删除自己\");</script>".\Redirect::back();

        }
        $contact=contact()->find($id);
        return $contact->delete()?redirect('/admin/users'):back();
    }
}

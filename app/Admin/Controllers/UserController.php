<?php

namespace App\Admin\Controllers;

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
    public function store()
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
        $contact=contact()->find($id);
        return $contact->delete()?redirect('/admin/users'):back();

        dd($id);
    }
}

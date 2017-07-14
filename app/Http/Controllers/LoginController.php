<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/admin/login/index');
    }

    /*
     * 具体登陆
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'password' => 'required|min:6|max:30',
        ]);

        $user = request(['name', 'password']);
        if (true == \Auth::guard('web')->attempt($user)) {
            return redirect('/admin/home');
        }

        return 123;
    }

    /*
     * 登出操作
     */
    public function logout()
    {
        \Auth::guard('web')->logout();
        return redirect('/');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
    /*
     * 用户列表
     */
     public function index()
     {
         $users = \App\User::paginate(10);
         return view('/admin/user/index', compact('users'));
     }

    public function signup(Request $request){
        $username=$request->get('username');
        $password=$request->get('password');
        if(!($username && $password)) {
            return err('用户名和密码皆不可为空');
        }

        $user_exists = User()->where('name',$username)->exists();
        if($user_exists){
            return err('用户名已存在');
        }

        $hashed_password = Hash::make($password);
        $user = User();
        $user->password = $hashed_password;
        $user->name = $username;
        if($user->save()){
            return suc(['id'=>$user->id]);
        }
        else{
            return err('DB insert failed');
        }

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

        \App\User::create(compact('name', 'password'));

        return redirect('/admin/users');
    }
    public function del($id)
    {
        $a=\Auth::guard("web")->user()->id;
        if($a==$id)
        {
            return "<script language=\"JavaScript\">alert(\"不可删除自己\");</script>".\Redirect::back();
        }
        $user=user()->find($id);
        return $user->delete()?redirect('/admin/users'):back();
    }
}

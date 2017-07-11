<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function signup(Request $request){
//        //错误提示
//        $this->validate($request, [
//            'username' => 'required|max:10|min:6',
//            'password' => 'required|min:6',
//        ]);
//        //重点向
//        return redirect('/posts');
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

    public function login(Request $request){
        $username=$request->get('username');
        $password=$request->get('password');
        if(!$username || !$password) {
            return err( '用户名和密码皆不可为空');
        }

        $user = User()->where('name',$username)->first();
        if(!$user){
            return err('用户名或密码有误');
        }

        $hash_password = $user->password;

        if(!Hash::check($password,$hash_password)){
            return err('用户名或密码有误');
        }
        session()->put('username',$user->name);
        session()->put('user_id',$user->id);

        return suc(['id'=>$user->id,'msg' => '登陆成功']);
}

    public function logout(){
        session()->forget('username');
        session()->forget('user_id');

        return suc(['msg' => '登出成功']);
    }

}

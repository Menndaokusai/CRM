<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function signup(){
        $username=Request::get('username');
        $password=Request::get('password');
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

    public function login(){
        $username=Request::get('username');
        $password=Request::get('password');
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

    public function loginout(){
        session()->forget('username');
        session()->forget('user_id');

        return suc(['msg' => '登出成功']);
    }

}

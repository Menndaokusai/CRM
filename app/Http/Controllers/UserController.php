<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function signup(){
        $username=Request::get('username');
        $password=Request::get('password');
        if(!($username && $password)) {
            return ['status' => 0, 'msg' => '用户名和密码皆不可为空'];
        }

        $user_exists = User()->where('name',$username)->exists();
        if($user_exists){
            return ['status' => 0, 'msg' => '用户名已存在'];
        }

        $hashed_password = Hash::make($password);
        $user = User();
        $user->password = $hashed_password;
        $user->name = $username;
        if($user->save()){
            return ['status'=>1,'id'=>$user->id];
        }
        else{
            return ['status'=>0,'msg'=>'DB insert failed'];
        }
    }

    public function login(){
        $username=Request::get('username');
        $password=Request::get('password');
        if(!$username || !$password) {
            return ['status' => 0, 'msg' => '用户名和密码皆不可为空'];
        }

        $user = User()->where('name',$username)->first();
        if(!$user){
            return ['status' => 0, 'msg' => '用户名或密码有误'];
        }

        $hash_password = $user->password;

        if(!Hash::check($password,$hash_password)){
            return ['status' => 0, 'msg' => '用户名或密码有误'];
        }
        session()->put('username',$user->name);
        session()->put('user_id',$user->id);

        return ['status' => 1, 'id'=>$user->id,'msg' => '登陆成功'];
    }

    public function loginout(Request $request){

    }

}

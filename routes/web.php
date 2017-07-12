<?php
use App\User;
use App\Contact;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
function user()
{
    return new User;
}

function contact()
{
    return new Contact;
}

function is_logged()
{
    return session('user_id') ?: false;
}

function err($msg = null)
{
    return ['status' => 0, 'msg' => $msg];
}

function suc($data_to_add = [])
{
    $data = ['status' => 1, 'data' => []];
    if ($data_to_add)
        $data['data'] =$data_to_add;
    return $data;
}

Route::group(['prefix' => 'admin'], function() {

    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');

    // 需要登陆的
    Route::group(['middleware' => 'auth:web'], function(){
        Route::get('/home', 'HomeController@index');

        // 用户管理
        Route::get('/users', 'UserController@index');
        Route::get('/users/create', 'UserController@create');
        Route::post('/users/store', 'UserController@store');
        Route::any('/users/del/{id}', 'UserController@del');
    });
});


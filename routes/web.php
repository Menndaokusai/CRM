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

Route::group(['middleware' => 'web'], function () {

    Route::any('/signup', 'UserController@signup');
    Route::any('/login', 'UserController@login');
    Route::any('/logout', 'UserController@logout');
    Route::any('/contacts/add','ContactController@add');
    Route::any('/contacts/updt','ContactController@updt');
    Route::any('/contacts/read','ContactController@read');
    Route::any('/contacts/del','ContactController@del');
});

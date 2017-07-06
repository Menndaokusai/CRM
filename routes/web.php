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

Route::get('/login', 'LoginController@login');

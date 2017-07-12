<?php

Route::group(['prefix' => 'admin'], function() {

    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

    // 需要登陆的
    Route::group(['middleware' => 'auth:admin'], function(){
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');

            // 用户管理
            Route::get('/users', '\App\Admin\Controllers\UserController@index');
            Route::get('/users/create', '\App\Admin\Controllers\UserController@create');
            Route::post('/users/store', '\App\Admin\Controllers\UserController@store');
        Route::any('/users/del/{id}', '\App\Admin\Controllers\UserController@del');
    });
});
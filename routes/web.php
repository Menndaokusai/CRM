<?php
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
    return new \App\User();
}

function contact()
{
    return new \App\Contact();
}

function account()
{
    return new \App\Account();
}

function lead(){
    return new \App\Lead();
}

function campaign(){
    return new \App\Campaign();
}

function opp(){
    return new \App\Opportunity();
}

function pc()
{
    return new \App\PotentialCustomer();
}

function project(){
    return new \App\Project();
}

function sc(){
    return new \App\ServiceContract();
}

function ticket()
{
    return new \App\Ticket;
}

function is_logged()
{
    if (\Auth::guard("web")->user()->id) {
        return true;
    } else {
        return false;
    }
}

function err($msg = null)
{
    return ['status' => 0, 'msg' => $msg];
}

function suc($data_to_add = [])
{
    $data = ['status' => 1, 'data' => []];
    if ($data_to_add)
        $data['data'] = $data_to_add;
    return $data;
}


Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'LoginController@index');
    Route::get('/login', 'LoginController@index');
    Route::any('/admin/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
    // 需要登陆的//
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => 'auth:web'], function () {
            Route::get('/home', function(){
                return view('/admin/home/index');
            });
            // 用户管理
            Route::get('/users', 'UserController@index');
            Route::any('/users/store', 'UserController@store');
            Route::any('/users/del/{id}', 'UserController@del');

            Route::get('/contact', 'ContactController@index');
            Route::any('/contacts/add','ContactController@add');
            Route::put('/contacts/updt/{read}','ContactController@updt');
            Route::any('/contacts/del/{id}','ContactController@del');
            Route::any('/contacts/read/{id}','ContactController@read');

            Route::get('/account','AccountController@index');
            Route::any('/accounts/add','AccountController@add');
            Route::put('/accounts/updt/{read}','AccountController@updt');
            Route::any('/accounts/del/{id}','AccountController@del');
            Route::any('/accounts/read/{id}','AccountController@read');


            Route::get('/campaign','CampaignController@index');
            Route::any('/campaigns/add','CampaignController@add');
            Route::put('/campaigns/updt/{read}','CampaignController@updt');
            Route::any('/campaigns/del/{id}','CampaignController@del');
            Route::any('/campaigns/read/{id}','CampaignController@read');

            Route::get('/potentialcustomer','PotentialCustomerController@index');
            Route::any('/pc/add','PotentialCustomerController@add');
            Route::put('/pc/updt/{read}','PotentialCustomerController@updt');
            Route::any('/pc/del/{id}','PotentialCustomerController@del');
            Route::any('/pc/read/{id}','PotentialCustomerController@read');

            Route::get('/opportunity','OpportunityController@index');
            Route::any('/opp/add','OpportunityController@add');
            Route::put('/opp/updt/{read}','OpportunityController@updt');
            Route::any('/opp/del/{id}','OpportunityController@del');
            Route::any('/opp/read/{id}','OpportunityController@read');

            Route::get('/ticket','TicketController@index');
            Route::any('/tickets/add','TicketController@add');
            Route::put('/tickets/updt/{read}','TicketController@updt');
            Route::any('/tickets/del/{id}','TicketController@del');
            Route::any('/tickets/read/{id}','TicketController@read');

            Route::get('/servicecontract','ServiceContractController@index');
            Route::any('/sc/add','ServiceContractController@add');
            Route::put('/sc/updt/{read}','ServiceContractController@updt');
            Route::any('/sc/del/{id}','ServiceContractController@del');
            Route::any('/sc/read/{id}','ServiceContractController@read');

            Route::get('/project','ProjectController@index');
            Route::any('/projects/add','ProjectController@add');
            Route::put('/projects/updt/{read}','ProjectController@updt');
            Route::any('/projects/del/{id}','ProjectController@del');
            Route::any('/projects/read/{id}','ProjectController@read');

//            Route::get('/leads','LeadController@index');
//            Route::any('/leads/add','LeadController@add');
//            Route::any('/leads/updt','LeadController@updt');
//            Route::any('/leads/del/{id}','LeadController@del');

            Route::get('/chart',function(){
                return view("/admin/chart/index");
            });

            Route::get('/faq', function(){
                return view("/admin/faq/index");
            });
        });
    });

});

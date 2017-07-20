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
function user(){
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

function faq(){
    return new \App\FAQ();
}

function opp(){
    return new \App\Opportunity();
}

function pc(){
    return new \App\PotentialCustomer();
}

function project(){
    return new \App\Project();
}

function sc(){
    return new \App\ServiceContract();
}

function ticket(){
    return new \App\Ticket;
}

function is_logged()
{
    if(\Auth::guard("web")->user()->id)
    {
        return true;
    }
    else
    {
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
        $data['data'] =$data_to_add;
    return $data;
}




Route::group(['middleware' => 'web'], function () {
        Route::get('/', 'LoginController@index');
        Route::get('/login', 'LoginController@index');
        Route::any('/admin/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout');
        // 需要登陆的//
    Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'auth:web'], function () {
            Route::get('/home', 'HomeController@index');
            // 用户管理
            Route::get('/users', 'UserController@index');
            Route::any('/users/store', 'UserController@store');
            Route::any('/users/del/{id}', 'UserController@del');

            Route::get('/contact', 'contactController@index');
            Route::any('/contacts/add','ContactController@add');
            Route::any('/contacts/updt','ContactController@updt');
            Route::any('/contacts/del/{id}','ContactController@del');

            Route::get('/faq', 'FAQController@index');
            Route::any('/faq/add','FAQController@add');
            Route::any('/faq/updt','FAQController@updt');
            Route::any('/faq/del/{id}','FAQController@del');

            Route::get('/account','AccountController@index');
            Route::any('/accounts/add','AccountController@add');
            Route::any('/accounts/updt','AccountController@updt');
            Route::any('/accounts/del/{id}','AccountController@del');

            Route::get('/campaign','CampaignController@index');
            Route::any('/campaigns/add','CampaignController@add');
            Route::any('/campaigns/updt','CampaignController@updt');
            Route::any('/campaigns/del/{id}','CampaignController@del');

            Route::get('/potentialcustomer','PotentialCustomerController@index');
            Route::any('/pc/add','PotentialCustomerController@add');
            Route::any('/pc/updt','PotentialCustomerController@updt');
            Route::any('/pc/del/{id}','PotentialCustomerController@del');

            Route::get('/opportunity','OpportunityController@index');
            Route::any('/opp/add','OpportunityController@add');
            Route::any('/opp/updt','OpportunityController@updt');
            Route::any('/opp/del/{id}','OpportunityController@del');

            Route::get('/ticket','TicketController@index');
            Route::any('/tickets/add','TicketController@add');
            Route::any('/tickets/updt','TicketController@updt');
            Route::any('/tickets/del/{id}','TicketController@del');

            Route::get('/servicecontract','ServiceContractController@index');
            Route::any('/sc/add','ServiceContractController@add');
            Route::any('/sc/updt','ServiceContractController@updt');
            Route::any('/sc/del','ServiceContractController@del');

            Route::get('/project','ProjectController@index');
            Route::any('/projects/add','ProjectController@add');
            Route::any('/projects/updt','ProjectController@updt');
            Route::any('/projects/del','ProjectController@del');

            Route::get('/leads','LeadController@index');
            Route::any('/leads/add','LeadController@add');
            Route::any('/leads/updt','LeadController@updt');
            Route::any('/leads/del','LeadController@del');

            Route::get('/chart','ChartController@index');


    });
    });


});

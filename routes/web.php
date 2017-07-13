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
    return new Contact;
}

function account()
{
    return new Account;
}

function lead()
{
    return new Lead;
}

function campaign()
{
    return new Campaign;
}

function faq()
{
    return new \App\FAQ();
}

function opp()
{
    return new Opportunity;
}

function pc()
{
    return new \App\PotentialCustomer();
}

function project()
{
    return new Project;
}

function sc()
{
    return new \App\ServiceContract;
}

function ticket()
{
    return new \App\Ticket;
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
        $data['data'] = $data_to_add;
    return $data;
}


Route::group(['middleware' => 'web'], function () {

        Route::get('/', 'LoginController@index');
        Route::any('/login', 'LoginController@login');
        Route::get('/logout', 'LoginController@logout');
        // 需要登陆的//
    Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'auth:web'], function () {
            Route::get('/home', 'HomeController@index');
            // 用户管理
            Route::get('/users', 'UserController@index');
            Route::get('/users/create', 'UserController@create');
            Route::any('/users/store', 'UserController@store');
            Route::any('/users/del/{id}', 'UserController@del');
            Route::get('/contact', function (){
                return view('/admin/contact/index');
            });
        });
    });

//  前端网页测试用路由
//    Route::any(function () {
//        return view("Contacts.blade.php");
//    });
//
//    Route::any(function () {
//        return view("xxxx2.blade.php");
//    });
//
//    Route::any(function () {
//        return view("xxxx3.blade.php");
//    });






    Route::any('/contacts/add', 'ContactController@add');
    Route::any('/contacts/updt', 'ContactController@updt');
    Route::any('/contacts/read', 'ContactController@read');
    Route::any('/contacts/del', 'ContactController@del');
    Route::any('/accounts/add', 'AccountController@add');
    Route::any('/accounts/updt', 'AccountController@updt');
    Route::any('/accounts/read', 'AccountController@read');
    Route::any('/accounts/del', 'AccountController@del');
    Route::any('/leads/add', 'LeadController@add');
    Route::any('/leads/updt', 'LeadController@updt');
    Route::any('/leads/read', 'LeadController@read');
    Route::any('/leads/del', 'LeadController@del');
    Route::any('/campaigns/add', 'CampaignController@add');
    Route::any('/campaigns/updt', 'CampaignController@updt');
    Route::any('/campaigns/read', 'CampaignController@read');
    Route::any('/campaigns/del', 'CampaignController@del');
    Route::any('/faq/add', 'FAQController@add');
    Route::any('/faq/updt', 'FAQController@updt');
    Route::any('/faq/read', 'FAQController@read');
    Route::any('/faq/del', 'FAQController@del');
    Route::any('/opp/add', 'OpportunityController@add');
    Route::any('/opp/updt', 'OpportunityController@updt');
    Route::any('/opp/read', 'OpportunityController@read');
    Route::any('/opp/del', 'OpportunityController@del');
    Route::any('/pc/add', 'PotentialCustomerController@add');
    Route::any('/pc/updt', 'PotentialCustomerController@updt');
    Route::any('/pc/read', 'PotentialCustomerController@read');
    Route::any('/pc/del', 'PotentialCustomerController@del');
    Route::any('/projects/add', 'ProjectController@add');
    Route::any('/projects/updt', 'ProjectController@updt');
    Route::any('/projects/read', 'ProjectController@read');
    Route::any('/projects/del', 'ProjectController@del');
    Route::any('/sc/add', 'ServiceContractController@add');
    Route::any('/sc/updt', 'ServiceContractController@updt');
    Route::any('/sc/read', 'ServiceContractController@read');
    Route::any('/sc/del', 'ServiceContractController@del');
    Route::any('/tickets/add', 'TicketController@add');
    Route::any('/tickets/updt', 'TicketController@updt');
    Route::any('/tickets/read', 'TicketController@read');
    Route::any('/tickets/del', 'TicketController@del');

});


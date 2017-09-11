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

Route::get('/','ReportController@index');

//Route::get('/','ReportController@create');



Route::POST('/','ReportController@store');
Route::get('/reports/show','ReportController@show');

Auth::routes();
Route::POST('/supersettings/signup','RegisterController@create')->name('signup');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/supersettings','UsersController@index')->name('show');
Route::get('/settings','UsersController@show');


//add a new item (super user interface)
Route::POST('/supersettings/type','ReporttypeController@add');
Route::POST('/supersettings/council','CouncilController@add');
Route::POST('/supersetings/user','UsersControoler@add');
Route::POST('/supersettings/state','StateController@add');



Route::get('/aboutus',function(){

    return view('contents.aboutus');
});

Route::get('/contact', function(){
    return view('contents.contactus');
});



//auth 
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
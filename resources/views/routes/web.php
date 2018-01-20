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
use App\Http\Middleware\isAdmin;

//guest routes
Route::get('/','ReportController@index');
Route::get('/reports/show','ReportController@show');
Route::POST('/create','ReportController@store');
Route::POST('/reports/show/getreport','ReportController@getreport');
Route::get('/aboutus',function(){
    
        return view('contents.aboutus');
    });
    
    Route::get('/contact', function(){
        return view('contents.contactus');
    });


//Route::get('/home', 'HomeController@index')->name('home');


//dashboard route
Route::get('/dashboard', 'ReportController@showdashboard');



//add a new item (super user interface)
Route::POST('/dashboard/type','ReporttypeController@add');
Route::POST('/dashboard/council','CouncilController@add');
Route::POST('/dashboard/state','StateController@add');


// updates in supersettings
Route::PATCH('/dashboard/type/{typeidfield}/update','ReporttypeController@update');
Route::PATCH('/dashboard/council/{councilidfield}/update','CouncilController@update');
Route::PATCH('/dashboard/state/{stateidfield}/update','StateController@update');
Route::PATCH('/dashboard/report/{reportidfield}/update', 'ReportController@update');
Route::PATCH('/dashboard/user/{useridfield}/update', 'UsersController@update');

//deletes in supersettings
Route::delete('/dashboard/type/{type}/delete','ReporttypeController@destroy');
Route::delete('/dashboard/council/{council}/delete','CouncilController@destroy');
Route::delete('/dashboard/state/{state}/delete','StateController@destroy');
Route::delete('/dashboard/user/{useridfield}/delete','UsersController@destroy');

Auth::routes();


   
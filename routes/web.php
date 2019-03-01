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

Route::group(['middleware' => 'auth'], function (){
    Route::resource('users', 'UserController' );
    Route::resource('articles', 'ArticleController' );
    Route::resource('provisioners', 'ProvisionerController' );
    Route::resource('clients', 'ClienteController');
    Route::resource('payment', 'PaymentController');
    Route::resource('history', 'HistoryController');
    Route::resource('company', 'CompanyController');
    Route::get('/', function () {
        return view('index.index');
    });
    Route::get('/index', 'IndexController@index');
    Route::delete('/articles/{article}', 'ArticleController@destroy');
    Route::patch('/articles/{article}', 'ArticleController@update');
});

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'guest'], function () 
{ 
   
});
  


Auth::routes();




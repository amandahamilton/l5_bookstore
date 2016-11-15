<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/book/display', 'BookController@display');
Route::post('/book/search', 'BookController@search');
Route::get('/book/details/{id}', 'BookController@details');
Route::get('/users/account', 'HomeController@update');
Route::post('/users/account', 'HomeController@update');
Route::post('/book/rate/{id}', 'BookController@rate');
Route::get('/book/view', 'CartController@view');
Route::get('/book/remove/{id}', 'CartController@remove');
Route::get('/book/add/{id}', 'CartController@add');


Route::get('/logout', function () {
Auth::logout();
    return redirect('/');
});

//Route::any('{all}', 'BookController@index') ->where('all', '.*');

Route::get('/home', 'HomeController@index');

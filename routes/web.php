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

/*Route::get('/',[
    'uses' => 'HomeController@index',
    'as' => 'bookstore.index'
]);*/

Route::get('/', 'HomeController@index');
Route::get('/book/display', 'BookController@display');
Route::post('/book/search', 'BookController@search');
Route::get('/book/details/{id}', 'BookController@details');
//Route::get('', 'BookController@update');




Route::get('/logout', function () {
Auth::logout();
    return redirect('/');
});

//Route::any('{all}', 'BookController@index') ->where('all', '.*');

Route::get('/home', 'HomeController@index');

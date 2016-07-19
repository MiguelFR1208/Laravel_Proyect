<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


;

Route::auth();


Route::resource('movie','MovieController');
*/
Route::get('/log', function () {
    return view('welcome');
});
Route::auth();
Route::get('/','FrontController@index');
Route::get('/index','FrontController@index');
Route::get('/contact','FrontController@contacto');
Route::get('/reviews','FrontController@reviews');
Route::get('/admin','FrontController@admin');

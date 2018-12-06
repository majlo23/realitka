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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("vlozit", 'NehnutelnostController@index');
Route::post("store", 'NehnutelnostController@store');
Route::get("inzeraty", 'NehnutelnostController@inzeraty');
Route::get("upravit/{idInzerat}", 'NehnutelnostController@edit');
Route::post("update/{idInzerat}", 'NehnutelnostController@update');
Route::get("home", 'NehnutelnostController@home');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



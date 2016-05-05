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

Route::get('/location'     ,'APIController@location');
Route::get('/location/{id}'     ,'APIController@locationDetail');
Route::get('/menu/{id}'     ,'APIController@menu');
Route::get('/article'     ,'APIController@article');
Route::get('/article/{id}'     ,'APIController@articleDetail');
Route::get('/detail/{id}'     ,'APIController@detail');
Route::get('/comment/{id}'     ,'APIController@comment');
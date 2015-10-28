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
/*
Route::get('/', [
    'uses'  => 'Auth@getIndex',
    'as'    => 'inicio'
]);*/

Route::get('acerca-de', [
    'uses'  => 'Auth@getAbout',
    'as'    => 'acerca'
]);
Route::get('contactenos', [
    'uses'  => 'Auth@getContact',
    'as'    => 'contacto'
]);
Route::get('master', function(){
   return view('layouts.master');
});
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', [
    'as' =>'login',
    'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
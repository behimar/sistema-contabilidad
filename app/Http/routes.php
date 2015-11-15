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

Route::get('master', function(){
   return view('layouts.master');
});

Route::get('/',[
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('/', [
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    =>'login'
]);

Route::get('register',[
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::post('register', [
    'uses'  => 'Auth\AuthController@postRegister',
    'as'    => 'register'
]);
Route::get('logout', [
    'as'    => 'logout',
    'uses'  => 'Auth\AuthController@getLogout']);

Route::get('home',[
    'uses'  => 'HomeController@getIndex',
    'as'    => 'home'
]);

/* #########
* rutas del perfil
*/
Route::get('perfil-usuario-registrar',[
    'uses'  => 'ProfileController@create',
    'as'    => 'create'
]);
Route::post('perfil-usuario-registrar',[
    'uses'  => 'ProfileController@store',
    'as'    => 'regProf'
]);
Route::get('perfil-usuario-{id}',[
    'uses'  => 'ProfileController@show',
    'as'    => 'index'
]);


Route::get('gettt',function(){
    $letra ='DISMINUCIÓNDEPREVISIONPARAINCOBRABILIDADDECARTERA,PREVISIÓNGENÉRICAPORELEXCESOALLÍMITEDEOPERACIONESDECONSUMONODEBIDAMENTEGARANTIZADAS,PREVISIÓNGENÉRICACÍCLICAYOTRAS';
    $sssss = '43101';
    $sdf = \App\Nomenclator::where('id',$sssss)->get();

    //$nuo = 'admin';
    //$usu = \App\User::where('name',$nuo)->get();
    return $sdf;
});

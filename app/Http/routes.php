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
/* ######### */

/* #########
* rutas del comprobante
*/
Route::get('nuevo-comprobante',[
    'uses'  => 'AccountController@index',
    'as'    => 'newAccount'
]);
Route::post('nuevo-comprobante',[
    'uses'  => 'AccountController@store',
    'as'    => 'newAccount'
]);

/* ########
 *rutas para las transacciones
 *
 */
Route::get('nueva-transaccion-{num}',[
    'uses'  => 'TransactionController@index',
    'as'    => 'newTransaction'
]);
Route::post('nueva-transaccion-{num}',[
    'uses'  => 'TransactionController@store',
    'as'    => 'newTransaction'
]);
Route::get('eliminar-transaccion-{id}',[
    'uses'  => 'TransactionController@destroy',
    'as'    => 'deleteTransaction'
]);

Route::get('find',function(){

    $num = \Illuminate\Support\Facades\DB::table('accounts')

        ->orderBy('id','desc')
        ->take(1)
        ->get();
    if( $num == null){

        $nume =1;
        return $nume;
    }

    //print_r($num);

    return $num[0]->id = $num[0]->id+1;
});

Route::get('as',function(){
//    select * from accounts left join transactions on accounts.id = transactions.account_id;
    $f = \Illuminate\Support\Facades\DB::table('accounts')
        ->join('transactions','accounts.id','=','transactions.account_id')

        ->get();
    return $f;
});
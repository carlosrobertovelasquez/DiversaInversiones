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
Route::get('/', function () {
    return redirect()->route('principal');
});
//login logout routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Principal
Route::get('home', 'HomeController@index');
Route::get('principal', array('as' => 'principal','uses' => 'PrincipalController@index'));
Route::get('noticias', 'PrincipalController@noticias');
Route::get('instalaciones', 'PrincipalController@instalaciones');
Route::get('contacto', ['as ' => 'gmaps', 'uses' => 'PrincipalController@contacto']);
Route::get('QuienesSomos', 'PrincipalController@QuienesSomos');
Route::get('GaleriaShow', 'PrincipalController@GaleriaFotos');

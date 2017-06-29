<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {

    return \View::make('login');

});




Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@procesa']);
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@show']);
Route::get('salir','LoginController@salir')->name('salir');
Route::get('inicio','InicioController@show')->name('inicio');
Route::get('bandalo','MiController@show')->name('bandalo');





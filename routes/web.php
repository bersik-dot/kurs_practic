<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
session_start();
Route::get('/', 'MainController@glstr')->name('gl');
Route::get('/novinki', 'MainController@novinki')->name('novinki');
Route::get('/onas', 'MainController@onas')->name('onas');
Route::get('/akcii', 'MainController@akcii')->name('akcii');
Route::get('/formaf1', 'MainController@c')->name('1');
Route::get('/crush', 'MainController@crush')->name('zakaz_crush');
Route::get('/bilet', 'MainController@ok')->name('ok');
Route::get('/zakaz1', 'ZakazController@create')->name('zakaz');
Route::get('/reg', 'RegisterController@create')->name('register');
Route::post('/reg', 'RegisterController@store');
Route::post('/zakaz1', 'ZakazController@store');
Route::get('/avtoriz', 'LoginController@create')->name('login');
Route::post('/avtoriz', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy')->name('logout');
Route::get('/req', 'MainController@index');
Route::post('/respa', 'MainController@glstr1');
Route::get('/index', 'MainController@index')->name('index');
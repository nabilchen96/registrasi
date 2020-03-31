<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


//layanan
Route::get('/layanan', 'LayananController@index');
Route::get('/layanandetail{id}', 'LayananController@detail');
Route::get('/addlayanan','LayananController@create');


//status pembayaran
Route::get('/statuspembayaran','StatusPembayaranController@index');


//profile
Route::get('/profile', 'ProfileController@index');

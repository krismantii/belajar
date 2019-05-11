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
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::get('/aboutUs', 'aboutUsController@index')->name('abaoutUs');
Route::get('/campaign', 'campaignController@index')->name('campaign');
Route::get('/profil', 'profilController@index')->name('profil');
Route::get('/artikel', 'artikelController@index')->name('artikel');
Route::get('/detailcamp', 'detailcampController@index')->name('detailcamp');
Route::get('/admin', 'adminController@index')->name('admin');
Route::get('/adminregister', 'adminregisterController@index')->name('adminregister');
Route::post('/adminregister','adminregisterController@add')->name('adminregisteradd');
Route::get('/adminlogin', 'adminloginController@index')->name('adminlogin');

Route::get('/loginkomunitas', 'loginkomunitasController@index')->name('loginkomunitas');
Route::get('/registerkomunitas', 'registerkomunitasController@index')->name('registerkomunitas');
Route::post('/registerkomunitas','registerkomunitasController@add')->name('addregisterkomunitas');
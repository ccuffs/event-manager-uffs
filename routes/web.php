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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@auth')->name('login.auth');

Auth::routes();

Route::get('/editor', function() {
    return view('editor');
});

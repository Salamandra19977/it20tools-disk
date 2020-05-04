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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('disk.index');
    });
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});
Route::get('/redirect','Auth\LoginController@redirect')->name('login');
Route::get('/auth/callback', 'Auth\LoginController@callback');
Route::get('/token', 'Auth\LoginController@authByToken');
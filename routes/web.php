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

Route::get('/redirect','Auth\LoginController@redirect')->name('login');
Route::get('/auth/callback', 'Auth\LoginController@callback')->name('callback');
Route::get('/token', 'Auth\LoginController@authByToken');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('files','Files\FileController');
    Route::resource('/favorites','Favorites\FavoritesController');
    // Route::put('/favorites/{favorite}','Favorites\FavoritesController@addToFavorites')->name('favorites.add');
    Route::resource('folders','Folders\FolderController');
    Route::get('/{any}', 'SpaController@index')->where('any', '.*');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});


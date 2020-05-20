<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/disk', 'Disk\DiskController@index');
    Route::get('/disk/show/{id}', 'Disk\DiskController@show');

    Route::post('/disk/add/public/links', 'Disk\DiskController@addLinks');
    Route::post('/disk/remove/public/links', 'Disk\DiskController@removeLinks');


    Route::get('/available', 'Available\AvailableController@index');
    Route::get('/available/show/{id}', 'Available\AvailableController@show');

    Route::get('/recent', 'Recent\RecentController@index');
    Route::get('/recent/show/{id}', 'Recent\RecentController@show');

    Route::get('/basket', 'Basket\BasketController@index');
    Route::get('/basket/show/{id}', 'Basket\BasketController@show');
});

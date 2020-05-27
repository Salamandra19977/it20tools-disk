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
    Route::get('user/{email}/disk/stats', 'Disk\DiskController@stats');
    Route::resource('/disk', 'Disk\DiskController');

    Route::get('/disk', 'Disk\DiskController@index');
    Route::get('/disk/show/{id}', 'Disk\DiskController@show');


    Route::get('/disk/show/accesses/{id}', 'Disk\DiskController@showAccesses');
    Route::get('/disk/remove/accesses/{id}', 'Disk\DiskController@removeAccesses');
    Route::post('/disk/add/accesses/', 'Disk\DiskController@addAccesses');

    Route::post('/disk/add/public/links', 'Disk\DiskController@addLinks');
    Route::post('/disk/remove/public/links', 'Disk\DiskController@removeLinks');

    Route::post('/disk/upload', 'Disk\DiskController@upload')->name('upload_file');
	Route::get('/disk/download/{id}', 'Disk\DiskController@download')->name('download');
    Route::post('/disk/downloadFiles', 'Disk\DiskController@downloadFiles')->name('downloadFiles');

    

    // Route::get('/disk/download/{file}', 'Disk\DiskController@download')->name('download_file');
    
    Route::get('/available', 'Available\AvailableController@index');
    Route::get('/available/show/{id}', 'Available\AvailableController@show');

    Route::get('/recent', 'Recent\RecentController@index');
    Route::get('/recent/show/{id}', 'Recent\RecentController@show');

    Route::get('/basket', 'Basket\BasketController@index');
    Route::get('/basket/show/{id}', 'Basket\BasketController@show');
    Route::post('update', 'Basket\BasketController@update');
    Route::post('delete', 'Basket\BasketController@delete');
});

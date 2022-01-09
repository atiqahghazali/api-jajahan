<?php

use App\Models\State;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

Route::get('/redirect', [App\Http\Controllers\GoogleController::class, 'redirectToProvider']);
Route::get('/callback', [App\Http\Controllers\GoogleController::class, 'handleProviderCallback']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/token', [App\Http\Controllers\HomeController::class, 'showToken'])->name('show:token');
Route::get('/docs', [App\Http\Controllers\DashboardController::class, 'showDocs'])->name('show:docs');
Route::get('/data', [App\Http\Controllers\DashboardController::class, 'showData'])->name('show:data');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['IsAdmin', 'auth']
], function(){

    
    Route::group([
        'as' => 'district-',
    ], function(){
        Route::get('/district/list', 'DistrictController@index')->name('index');
        Route::post('/district/update/{district}', 'DistrictController@update')->name('update');
        Route::post('/district/store', 'DistrictController@store')->name('store');
        Route::get('/district/delete/{district}', 'DistrictController@destroy')->name('delete');
    });

    Route::group([
        'as' => 'subdistrict-',
    ], function(){
        Route::get('/subdistrict/list', 'SubdistrictController@index')->name('index');
        Route::post('/subdistrict/update/{subdistrict}', 'SubdistrictController@update')->name('update');
        Route::post('/subdistrict/store', 'SubdistrictController@store')->name('store');
        Route::get('/subdistrict/delete/{subdistrict}', 'SubdistrictController@destroy')->name('delete');
    });

});
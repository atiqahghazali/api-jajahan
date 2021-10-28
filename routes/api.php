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
Route::post('/login','App\Http\Controllers\API\AuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->middleware('auth:api')->group(function(){
    Route::get('/states','App\Http\Controllers\API\StateController@index');

    Route::get('/districts','App\Http\Controllers\API\DistrictController@index');

    Route::get('/subdistricts','App\Http\Controllers\API\SubDistrictController@index');

    Route::get('/get-subdistrict-by-id','App\Http\Controllers\API\SubDistrictController@getDetailByID');

    Route::get('/address','App\Http\Controllers\API\AddressController@index');

    Route::get('/duns','App\Http\Controllers\API\DunController@index');

    Route::get('/parliaments','App\Http\Controllers\API\ParliamentController@index');

});

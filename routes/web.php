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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/token', [App\Http\Controllers\HomeController::class, 'showToken'])->name('show:token');
Route::get('/docs', [App\Http\Controllers\DashboardController::class, 'showDocs'])->name('show:docs');
Route::get('/data', [App\Http\Controllers\DashboardController::class, 'showData'])->name('show:data');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::group([
//     'prefix' => 'admin',
//     'namespace' => 'App\Http\Controllers\Admin',
//     'middleware' => ['is_admin', 'auth']
// ], function(){

    
//     Route::group([
//         'as' => 'admin-user-',
//     ], function(){
//         Route::get('/user/create', 'UserController@create')->name('create');
//         Route::post('/user/store', 'UserController@store')->name('store');
//         Route::get('/user/list', 'UserController@index')->name('index');
//         Route::get('/user/profile/{user:uuid}', 'UserController@show')->name('show');
//     });

// });
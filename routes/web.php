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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([
    'namespace'     => 'App\Http\Controllers',
], function ($router) {
    Route::get('/', 'HomeController@index')->name('landing.page.index');
});

Route::group([
    'namespace'     => 'App\Http\Controllers',
], function ($router) {
    Route::get('/dash', 'DashboardController@index')->name('dashboard.index');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/brands/create/', 'App\Http\Controllers\BrandController@store');
Route::get('/brands', 'App\Http\Controllers\BrandController@index');
Route::get('/brands/{id}', 'App\Http\Controllers\BrandController@show');
Route::put('/brands/{id}', 'App\Http\Controllers\BrandController@update');
Route::delete('/brands/{id}', 'App\Http\Controllers\BrandController@destroy');

Route::post('/appliances/create/', 'App\Http\Controllers\ApplianceController@store');
Route::get('/appliances', 'App\Http\Controllers\ApplianceController@index');
Route::get('/appliances/{id}', 'App\Http\Controllers\ApplianceController@show');
Route::put('/appliances/{id}', 'App\Http\Controllers\ApplianceController@update');
Route::delete('/appliances/{id}', 'App\Http\Controllers\ApplianceController@destroy');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/show', 'App\Http\Controllers\IndexController@show');


Route::resource('listing',ListingController::class);
<?php

use App\Http\Controllers\TaskController;
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

Route::get('/','App\Http\Controllers\TaskController@index')->name('index');

Route::get('/task/{id}','App\Http\Controllers\TaskController@detail')->name('show');

Route::get('/delete','App\Http\Controllers\TaskController@delete')->name('delete');

Route::get('/alphabet','App\Http\Controllers\TaskController@alphabet')->name('alphabet');




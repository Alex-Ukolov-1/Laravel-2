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

Route::get('/','App\Http\Controllers\PageController@home');
Route::get('/contact','App\Http\Controllers\PageController@contact');
Route::get('/about','App\Http\Controllers\PageController@about');
Route::post('/projects','App\Http\Controllers\ProjectController@store');
Route::get('/projects','App\Http\Controllers\ProjectController@index');
Route::get('/projects/create','App\Http\Controllers\ProjectController@create');









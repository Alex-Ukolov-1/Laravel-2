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
    return view('home');
})->name('home');

Route::get('/hellow', function () {
    $tasks=['add task','find task','review task'];
    return view('hellow',compact('tasks'));
    });

Route::get('/',function()
          {
        $tasks=DB::table('users')->get();
        return view('home',compact('tasks'));
          });

Route::post('/index','App\Http\Controllers\ContactController@store');

Route::get('/index', function () {
    return view('index');
})->name('index');






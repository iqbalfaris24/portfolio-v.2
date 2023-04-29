<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes by iqbal
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
Route::get('/', 'App\Http\Controllers\ContactController@index');
Route::post('/create', 'App\Http\Controllers\ContactController@create');

Route::get('/pesan', 'App\Http\Controllers\ContactController@view')->middleware('auth');
Route::get('/pesan/delete/{id}', 'App\Http\Controllers\ContactController@delete');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', 'App\Http\Controllers\LoginController@loginuser');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::get('/baru', 'App\Http\Controllers\LoginController@register');
Route::post('/registeruser', 'App\Http\Controllers\LoginController@registeruser');

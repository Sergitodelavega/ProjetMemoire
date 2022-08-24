<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/index1', 'App\Http\Controllers\HomeController@index1')->name('home.index1');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
Route::get('/memoires', 'App\Http\Controllers\MemoireController@index')->name('memoire.index');
Route::get('/memoires/{id}', 'App\Http\Controllers\MemoireController@show')->name('memoire.show');

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/memoires', 'App\Http\Controllers\Admin\AdminMemoireController@index')->name('admin.memoire.index');
Auth::routes();


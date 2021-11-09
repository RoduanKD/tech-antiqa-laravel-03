<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::view('/', 'public.home');
Route::view('/delivery', [DelivaryController::class,'index'])->name('admin.delivery');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('table-list', 'pages.table_list')->name('table');
    Route::view('typography', 'pages.typography')->name('typography');
    Route::view('icons', 'pages.icons')->name('icons');
    Route::view('map', 'pages.map')->name('map');
    Route::view('notifications', 'pages.notifications')->name('notifications');
    Route::view('rtl-support', 'pages.language')->name('language');
    Route::view('upgrade', 'pages.upgrade')->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::get('admin/product/index',[AdminController::class,'index'])->name('admin.index');

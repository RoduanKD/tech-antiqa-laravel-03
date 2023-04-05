<?php

use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DeliveryCompanyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PagesController;
use App\Models\DeliveryCompany;
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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::resource('deliveries', DeliveryCompanyController::class);
    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');


    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');
    Route::get('/terms/edit', [TermsController::class, 'edit'])->name('admin.terms.edit');
    Route::get('/terms/show', [TermsController::class, 'show'])->name('admin.terms.show');
    Route::get('/privacy/edit', [PrivacyController::class, 'edit'])->name('admin.privacy.edit');
    Route::get('/privacy/show', [PrivacyController::class, 'show'])->name('admin.privacy.show');
    Route::get('/message', [MessageController::class, 'message'])->name('admin.message');
    Route::resource('financials', FinancialController::class);
    Route::view('profite', 'admin.Fin.profite')->name('profite');
    Route::view('activearea', 'admin.Fin.activearea')->name('activearea');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('table-list', 'pages.table_list')->name('table');
    Route::view('typography', 'pages.typography')->name('typography');
    Route::view('icons', 'pages.icons')->name('icons');
    Route::view('map', 'pages.map')->name('map');
    Route::view('notifications', 'pages.notifications')->name('notifications');
    Route::view('rtl-support', 'pages.language')->name('language');
    Route::view('upgrade', 'pages.upgrade')->name('upgrade');
    Route::view('finance', 'admin.dashbord.financial');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('carts', CartController::class);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('areas', AreaController::class);
});

Route::get('/message', [MessageController::class, 'message'])->name('message');
Route::post('/message', [LetterController::class, 'store']);
Route::get('/places', [PagesController::class, 'places'])->name('places');

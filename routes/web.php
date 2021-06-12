<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',  [PagesController::class, 'index']);

// Demo routes
Route::get('/datatables', 'App\Http\Controllers\PagesController@datatables');
Route::get('/ktdatatables', 'App\Http\Controllers\PagesController@ktDatatables');
Route::get('/select2', 'App\Http\Controllers\PagesController@select2');
Route::get('/jquerymask', 'App\Http\Controllers\PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'App\Http\Controllers\PagesController@customIcons');
Route::get('/icons/flaticon', 'App\Http\Controllers\PagesController@flaticon');
Route::get('/icons/fontawesome', 'App\Http\Controllers\PagesController@fontawesome');
Route::get('/icons/lineawesome', 'App\Http\Controllers\PagesController@lineawesome');
Route::get('/icons/socicons', 'App\Http\Controllers\PagesController@socicons');
Route::get('/icons/svg', 'App\Http\Controllers\PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'App\Http\Controllers\PagesController@quickSearch')->name('quick-search');

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'home'])->name('home');

// custom routes
Route::resource('services', ServicesController::class);


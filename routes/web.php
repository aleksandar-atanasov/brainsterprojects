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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::post('/', 'UsersController@store')->name('store.user');
Route::get('/category/{category:label}', 'CategoryController@show')->name('show.category');

Route::group(['middleware' => ['auth']], function () {

    Route::get('dashboard', 'PagesController@index')->name('admin.dashboard');
    Route::get('categories', 'PagesController@categories')->name('admin.categories');
});

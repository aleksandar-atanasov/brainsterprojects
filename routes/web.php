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

Route::prefix('admin')->middleware(['auth'])->group(function() {

    Route::get('dashboard', 'PagesController@index')->name('admin.dashboard');

    Route::get('categories', 'CategoryController@index')->name('category.index');
    Route::post('categories', 'CategoryController@store')->name('category.store');
    Route::get('categories/edit/{category:label}', 'CategoryController@edit')->name('category.edit');
    Route::put('categories/{category:id}', 'CategoryController@update')->name('category.update');

    Route::get('lectures', 'LectureController@index')->name('lecture.index');
    Route::post('lecture', 'LectureController@store')->name('lecture.store');
    Route::get('lecture/edit/{lecture:id}', 'LectureController@edit')->name('lecture.edit');
    Route::put('lecture/{lecture:id}', 'LectureController@update')->name('lecture.update');
    Route::delete('lecture/{lecture:id}', 'LectureController@destroy')->name('lecture.delete');


    Route::get('banners', 'BannerController@index')->name('banner.index');
    Route::post('banners', 'BannerController@store')->name('banner.store');
    Route::get('banners/edit/{banner:id}', 'BannerController@edit')->name('banner.edit');
    Route::put('banners/{banner:id}', 'BannerController@update')->name('banner.update');
    Route::delete('banners/{banner:id}', 'BannerController@destroy')->name('banner.delete');
});

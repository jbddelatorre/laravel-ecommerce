<?php

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
    return view('welcome');
});

Route::get('/showitems', 'ItemController@showItems');
Route::delete('/deleteitem/{id}', 'ItemController@delete');

Route::get('/categories', 'CategoryController@showCategories');
Route::delete('/deletecategory/{id}', 'CategoryController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

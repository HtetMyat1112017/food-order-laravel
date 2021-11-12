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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//------------- category start here --------------//
Route::get('/category/index','CategoryController@index')->name('category.index');
Route::get('/category/add','CategoryController@add')->name('category.add');
Route::post('/category/add','CategoryController@store')->name('category.store');
Route::get('/category/active/{id}','CategoryController@active')->name('category.active');
Route::get('/category/deactivate/{id}','CategoryController@deactivate')->name('category.deactivate');
Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');
Route::post('category/edit/{id}','CategoryController@edit')->name('category.edit');
//-------------- category end here ---------------//

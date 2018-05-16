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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','HomeController@index');
Route::post('/store', 'Controller@store')->name('store');
Route::post('/update', 'Controller@update')->name('update');
Route::get('/list', 'Controller@index')->name('list');
Route::get('/edit/{id}', 'Controller@edit')->name('edit');

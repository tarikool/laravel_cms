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

Route::get('/', 'ContentController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('contents/list', 'ContentController@list');
Route::get('contents', 'ContentController@index');
Route::get('contents/{content:slug}', 'ContentController@show');
Route::resource('contents', 'ContentController')->except(['index', 'show']);

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

Route::get('/', 'AdminController@showFormLogin')->name('form.login');

Route::group(['prefix' => 'admin'], function ()
{
    Route::get('/dashboard', 'AdminController@showIndex')->name('admin.dashboard');
    Route::post('/dashboard', 'AdminController@login');
});

Route::group(['prefix' => 'user'], function ()
{
    Route::get('list', 'UserController@getAll')->name('user.list');
});


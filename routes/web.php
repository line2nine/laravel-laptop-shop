<?php

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
|
*/
Route::get('/', function (){
    return view('index');
});

Route::get('login', 'UserController@showFormLogin')->name('login');
Route::post('login', 'UserController@login');
Route::get('logout', 'UserController@logout')->name('logout');

Route::middleware(['auth', 'check.role'])->group(function (){
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', 'UserController@showDashboard')->name('admin.dashboard');
        Route::group(['prefix' => 'user'], function () {
            Route::get('list', 'UserController@getAll')->name('user.list');
            Route::get('register', 'UserController@create')->name('user.register');
            Route::get('{id}/change-password', 'UserController@showFormChangePass')->name('user.changePass');
            Route::post('{id}/change-password', 'UserController@updatePass')->name('user.updatePass');
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('list', 'CustomerController@getAll')->name('customer.list');
            Route::get('search','CustomerController@search')->name('customer.search');
            Route::get('register', 'CustomerController@register')->name('customer.register');
            Route::post('register', 'CustomerController@create')->name('customer.create');
            Route::get('/{id}/delete','CustomerController@delete')->name('customer.delete');
            Route::get('/{id}/edit','CustomerController@edit')->name('customer.edit');
            Route::post('/{id}/edit','CustomerController@update')->name('customer.update');
            Route::get('/{id}/detail', 'CustomerController@customerDetail')->name('customer.detail');
        });
    });
});




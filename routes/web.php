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
Route::get('/', function () {
    return redirect('home-page');
});

Route::get('home-page', function (){
    return view('home.master');
});

Route::get('login', 'LoginController@showFormLogin')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::middleware(['auth', 'check.role'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', 'UserController@showDashboard')->name('admin.dashboard');
        Route::group(['prefix' => 'user'], function () {
            Route::get('list', 'UserController@getAll')->name('user.list');
            Route::get('search', 'UserController@search')->name('user.search');
            Route::middleware(['check.access'])->group(function (){
                Route::get('create-new', 'UserController@create')->name('user.create');
                Route::post('create-new', 'UserController@store');
                Route::get('{id}/delete', 'UserController@delete')->name('user.delete');
            });
            Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
            Route::post('{id}/edit', 'UserController@update');
            Route::get('{id}/detail', 'UserController@userDetail')->name('user.detail');
            Route::get('{id}/change-password', 'UserController@changePass')->name('user.changePass');
            Route::post('{id}/change-password', 'UserController@updatePass');
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('list', 'CustomerController@getAll')->name('customer.list');
            Route::get('search', 'CustomerController@search')->name('customer.search');
            Route::get('create-new', 'CustomerController@create')->name('customer.create');
            Route::post('create-new', 'CustomerController@store');
            Route::get('{id}/delete', 'CustomerController@delete')->name('customer.delete');
            Route::get('{id}/edit', 'CustomerController@edit')->name('customer.edit');
            Route::post('{id}/edit', 'CustomerController@update');
            Route::get('{id}/detail', 'CustomerController@customerDetail')->name('customer.detail');
        });
    });
});




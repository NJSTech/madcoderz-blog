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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store', 'HomeController@store')->name('user.fileUpload');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('admin')->group(function () {
    Route::get('/loginForm', 'Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Password reset route
    Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', 'Admins\CategoryController@index')->name('categories.index');
        Route::get('/create', 'Admins\CategoryController@create')->name('categories.create');
        Route::post('/', 'Admins\CategoryController@store')->name('categories.store');
        Route::get('/{category}/edit', 'Admins\CategoryController@edit')->name('categories.edit');
        Route::put('/{category}', 'Admins\CategoryController@update')->name('categories.update');
        Route::get('destroy/{category}', 'Admins\CategoryController@destroy')->name('categories.destroy');
    });
    Route::get('/dashboard', 'Admins\AdminController@index')->name('admin.dashboard');
});

Route::post('/store', 'Admins\AdminController@store')->name('admin.fileUpload');

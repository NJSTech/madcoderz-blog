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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// frontend page route
// post route
Route::prefix('posts')->group(function () {
    Route::get('/all-posts', 'PostController@index')->name('posts.home.index');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::get('/', 'PostController@search')->name('posts.search');
});
// categories route
Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.home.index');
    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
});
// tags route
Route::prefix('tags')->group(function () {
    Route::get('/', 'TagController@index')->name('tags.home.index');
    Route::get('/{tag}', 'TagController@show')->name('tags.post.show');
});
Route::group(['prefix' => 'comments'], function () {
    Route::post('/store', 'CommentController@store')->name('comment.store');
    Route::post('/reply/store', 'ReplyController@store')->name('comment.reply.store');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::post('/store', 'SubscribeController@store')->name('subscribe.store');

Route::group(['prefix' => 'favourite', 'middleware' => 'auth:web'], function () {
    Route::post('/{post}/store', 'FavouriteController@store')->name('favourite.store')->middleware('verified');
});
Route::group(['prefix' => 'users', 'middleware' => 'auth:web'], function () {
    Route::get('/change-password', 'UserController@showResetForm')->name('user.change.password')->middleware('verified');
    Route::post('/', 'UserController@resetPassword')->name('user.password.reset.request')->middleware('verified');
    Route::get('/profile', 'UserController@show')->name('user.profile')->middleware('verified');
    Route::put('/{user}/update', 'UserController@update')->name('user.update')->middleware('verified');
    Route::put('/update', 'UserController@profileUpdate')->name('user.profile.update')->middleware('verified');
});
Auth::routes(['verify' => true]);
// define admin panel route
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
    // define categories route
    Route::prefix('categories')->group(function () {
        Route::get('/', 'Admins\CategoryController@index')->name('categories.index');
        Route::get('/create', 'Admins\CategoryController@create')->name('categories.create');
        Route::post('/', 'Admins\CategoryController@store')->name('categories.store');
        Route::get('/{category}/edit', 'Admins\CategoryController@edit')->name('categories.edit');
        Route::put('/{category}', 'Admins\CategoryController@update')->name('categories.update');
        Route::get('destroy/{category}', 'Admins\CategoryController@destroy')->name('categories.destroy');
    });
    // define tags route
    Route::prefix('tags')->group(function () {
        Route::get('/', 'Admins\TagController@index')->name('tags.index');
        // Route::get('/create', 'Admins\TagController@create')->name('tags.create');
        Route::post('/', 'Admins\TagController@store')->name('tags.store');
        Route::get('/{tag}/edit', 'Admins\TagController@edit')->name('tags.edit');
        Route::put('/{tag}', 'Admins\TagController@update')->name('tags.update');
        Route::get('destroy/{tag}', 'Admins\TagController@destroy')->name('tags.destroy');
    });
    // define posts route
    Route::prefix('posts')->group(function () {
        Route::get('/', 'Admins\PostController@index')->name('posts.index');
        Route::get('/create', 'Admins\PostController@create')->name('posts.create');
        Route::post('/', 'Admins\PostController@store')->name('posts.store');
        Route::get('/{post}/edit', 'Admins\PostController@edit')->name('posts.edit');
        Route::put('/{post}', 'Admins\PostController@update')->name('posts.update');
        Route::get('destroy/{post}', 'Admins\PostController@destroy')->name('posts.destroy');
    });
    // define subscribers route
    Route::prefix('subscribes')->group(function () {
        Route::get('/', 'Admins\SubscribeController@index')->name('subscribe.index');
        Route::get('destroy/{subcribe}', 'Admins\SubscribeController@destroy')->name('subscribe.destroy');
    });
    // define subscribers route
    Route::prefix('users')->group(function () {
        Route::get('/', 'Admins\UserController@index')->name('admin.users.index');
        Route::post('/userStatus', 'Admins\UserController@userStatus')->name('user.status.update');
    });
    Route::get('/dashboard', 'Admins\AdminController@index')->name('admin.dashboard')->middleware('verified');
    Route::get('/{admin}/edit', 'Admins\AdminController@edit')->name('admin.profile')->middleware('verified');
    Route::put('/{admin}', 'Admins\AdminController@update')->name('admin.update')->middleware('verified');
    Route::put('/store/update', 'Admins\AdminController@profileUpdate')->name('admin.profile.update')->middleware('verified');
    Route::get('/passwordChange', 'Admins\AdminController@changePassword')->name('admin.change.password')->middleware('verified');
    Route::post('/resetPassword', 'Admins\AdminController@resetPassword')->name('admin.password.reset.request')->middleware('verified');
});

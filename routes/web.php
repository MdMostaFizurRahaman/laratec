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


Auth::routes(['register' => false]);


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/test', function () {
        return view('admin.pages.settings.test');
    });
    Route::get('/', 'HomeController@index')->name('home');

    Route::namespace('Auth')->group(function () {

        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        // //Forgot Password Routes
        // Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        // Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        // //Reset Password Routes
        // Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        // Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });

    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');

    Route::get('/company', 'SettingsController@showCompanyDetailsForm')->name('company.details');
    Route::post('/company', 'SettingsController@storeCompanyDetails')->name('company.details.store');

    // Carousel Routes
    Route::get('/carousels', 'CarouselController@carousels')->name('carousels');
    Route::post('/carousel', 'CarouselController@store')->name('carousel.store');
    Route::post('/carousel/update', 'CarouselController@update')->name('carousel.update');
});

Route::get('/home', 'HomeController@index')->name('home');

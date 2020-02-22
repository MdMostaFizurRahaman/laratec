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
    Route::resource('posts', 'PostController');

    Route::get('/company', 'SettingsController@showCompanyDetailsForm')->name('company.details');
    Route::post('/company', 'SettingsController@storeCompanyDetails')->name('company.details.store');

    Route::resource('our-customers', 'OurCustomerController');

    // Slider Routes
    Route::prefix('/sliders')->name('slider.')->group(function(){
        Route::get('/home', 'HomeSliderController@index')->name('home.index');
        Route::post('/home', 'HomeSliderController@store')->name('home.store');
        Route::post('/home/{slider}', 'HomeSliderController@update')->name('home.update');
    });

    // Feature Section Routes
    Route::get('/feature-section', 'FeatureSectionController@index')->name('feature-section.index');
    Route::post('/feature-section', 'FeatureSectionController@store')->name('feature-section.store');

    // Feature Section Routes
    Route::get('/offer-section', 'OfferController@index')->name('offer-section.index');
    Route::post('/offer-section', 'OfferController@store')->name('offer-section.store');

    // About Us Section
    Route::get('/pages/about-us', 'AboutUsController@index')->name('about-us.index');
    Route::post('/pages/about-us', 'AboutUsController@store')->name('about-us.store');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');
Route::get('/about-us', 'AboutUsController@index')->name('about-us');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');

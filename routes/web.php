<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingPageController@index')->name('landing');
Route::get('/products', 'ProductsController@index')->name('products.index');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


/**
 * Admin Routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::resource('company', 'CompanyDetailsController');
    Route::resource('promises', 'BusinessPromisesController');
    Route::resource('portfolios', 'PortfoliosController');
    Route::resource('services', 'ServicesController');
    Route::resource('blogs', 'BlogsController');
    Route::get('users-edit-password', 'UsersController@editPassword')->name('users.edit-password');
    Route::patch('users-update-password/{user}', 'UsersController@updatePassword')->name('users.update-password');
});


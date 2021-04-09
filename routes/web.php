<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingPageController@index')->name('landing');
Route::get('/products-list', 'ProductsController@index')->name('products.index');
Route::get('/products-list/{id}', 'ProductsController@show')->name('products.show');
Route::get('/blogs-front-list', 'BlogsFrontsController@index')->name('blogs-front.index');
Route::get('/blogs-front-list/{id}', 'BlogsFrontsController@show')->name('blogs-front.show');
Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
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
    Route::resource('product-types', 'ProductTypesController');
    Route::resource('blogs', 'BlogsController');
    Route::get('users-edit-password', 'UsersController@editPassword')->name('users.edit-password');
    Route::patch('users-update-password/{user}', 'UsersController@updatePassword')->name('users.update-password');
});


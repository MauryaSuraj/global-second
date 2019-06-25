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

Route::get('/', 'FrontEnd@index');
Route::get('/about','FrontEnd@about')->name('about');
//Route::get('/contact','FrontEnd@contact')->name('contact');
Route::get('/supporter','FrontEnd@supporter')->name('supporter');
Route::get('/listing','ListingController@index')->name('listing');
Route::get('/listing/view','ListingController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('admin');
Route::resource('/contact','Contact');

Route::resource('/admin/category','AdminCategoryController');
Route::resource('/admin/tag','TagAdminController');
Route::resource('/admin/featuredmember','FeaturedMemberController');
Route::resource('/admin/businesslisting','BusinessListingAdminController');
Route::get('/admin/contactlist','Contact@contactlisting')->name('contactlist');

Route::resource('/admin/profile','ProfileAdminController');

Route::get('/admin/location','LocationAdminController@index');
Route::get('/admin/reviews','ReviewsAdminController@index');

Route::get('/admin/listing','BusinessListingAdminController@index');
Route::get('/admin/contactform','ContactForm@index');
Route::get('/admin/user/paid','AdminUsersController@paid');
Route::get('/admin/user/registered','AdminUsersController@registereduser');
Route::get('/admin/user/','AdminUsersController@index');

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
Route::resource('/listing','ListingController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::resource('/search' ,'SearchController');
Route::resource('/contact','Contact');

Route::resource('/matri', 'MatriController');

Route::resource('/admin/category','AdminCategoryController');
Route::resource('/admin/tag','TagAdminController');
Route::resource('/admin/featuredmember','FeaturedMemberController');
Route::resource('/admin/businesslisting','BusinessListingAdminController');
Route::resource('/admin/featuredlisting','FeaturedList');
Route::resource('/admin/membership','MemberShipcontroller');
Route::resource('/admin/specialCategory', 'SpecialCategoryController');
Route::resource('/userreview', 'ReviewsController');
Route::resource('/membershipdetail', 'MemberShipFrontController');
Route::resource('/family', 'FamilyController');

Route::resource('support', 'SupporterController');

Route::resource('/admin/matrimony', 'MatrimonyAdminController');
Route::get('/businesslistingprofile','BusinesslistingProfileController@index');
Route::get('/businessenquiry','BusinesslistingProfileController@enquiry');

Route::get('/admin/contactlist','Contact@contactlisting')->name('contactlist');
Route::resource('/admin/profile','ProfileAdminController');
Route::get('/admin/location','LocationAdminController@index');
Route::get('/admin/reviews','ReviewsAdminController@index');
Route::get('/admin/listing','BusinessListingAdminController@index');
Route::get('/admin/contactform','ContactForm@index');
Route::get('/admin/user/paid','AdminUsersController@paid');
Route::get('/admin/user/registered','AdminUsersController@registereduser');
Route::get('/admin/user/','AdminUsersController@index');
Route::get('/admin/listing_review','ContactFromListing@index');

//Payment Routes

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

//data here
Route::get('category', 'API\ListSet@category');
//Route::get('listing', 'API\Listing@listing');

Route::post('contactEnquiry', 'API\ListSet@listingEnquiry');


Route::get('tags', 'API\ListSet@tags');

Route::resource('profile', 'API\ProfileController');
Route::resource('review', 'API\ReviewController');
//
//Route::get('logout', 'UserController@logout');
Route::resource('listing','API\Listing');
Route::resource('banners','API\Banner');
Route::resource('about','API\About');
Route::resource('specialCat','API\SpecialCat');

Route::group(['middleware' => 'auth:api'], function (){
//    Route::resource('listing','API\Listing');
});

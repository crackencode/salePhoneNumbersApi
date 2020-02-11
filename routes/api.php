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

// AUTH
Route::post('signup', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::group(['prefix' => 'auth', 'middleware' => 'jwt.auth'], function () {
    Route::post('logout', 'AuthController@logout');
});
Route::middleware('jwt.refresh')->get('/token/refresh', 'AuthController@refresh');

// API
Route::group(['prefix' => 'phoneNumbers', 'middleware' => 'jwt.auth'], function () {
    Route::get('', 'PhoneNumberController@getPhoneNumbers');
    Route::get('all', 'PhoneNumberController@getAllPhoneNumbers');
    Route::get('country/{country}', 'PhoneNumberController@getPhoneNumbersByCountry')->where(['country' => '[a-zA-Z]{2}']);
    Route::get('phoneNumber/{phoneNumber}', 'PhoneNumberController@getPhoneNumbersByPhoneNumber')->where(['phoneNumber' => '[0-9]*']);
    Route::get('country/{country}/phoneNumber/{phoneNumber}', 'PhoneNumberController@getPhoneNumbersByCountryAndPhoneNumber')->where(['country' => '[a-zA-Z]{2}', 'phoneNumber' => '[0-9]*']);
    Route::post('', 'PhoneNumberController@addPhoneNumber');
    Route::put('{id}', 'PhoneNumberController@editPhoneNumber')->where(['id' => '[0-9]*']);
    Route::delete('{id}', 'PhoneNumberController@deletePhoneNumber')->where(['id' => '[0-9]*']);
});
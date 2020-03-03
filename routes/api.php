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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('country','Country\CountryController@country');
Route::get('country/{id}','Country\CountryController@countryById');
Route::post('country','Country\CountryController@countrySave');
Route::put('country/{id}','Country\CountryController@countryUpdate');
Route::delete('country/{id}','Country\CountryController@countryDelete');
*/

// Route::group(['middleware'=>'client'],function(){
//     Route::apiResource('country','Country\Country');
// });


//Route::apiResource('country', 'Country\Country')->middleware('client');

Route::apiResource('country','Country\Country');
Route::get('file/country_list','FileController@countryList');
Route::post('file/country_list','FileController@countrySave');
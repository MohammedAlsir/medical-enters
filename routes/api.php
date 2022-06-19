<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*

    == Notes 'Api v1 ' ==

    == json.response middleware ==> for put  'Accept', 'application/json'  in header request ==
*/

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api'], function () {

    Route::post('register', 'AuthController@register'); // == Register ==
    Route::post('login', 'AuthController@login'); // == Login ==

    // == This routes user must be logged in ==
    Route::group(['middleware' => ['auth:api']], function () {
        // == Begin Route Hospital  ==
        Route::get('medicalcenters', 'GetOprationController@getMedicalCenters');
        // == end Route Hospital  ==

        // == Begin Route Specialtie  ==
        Route::get('specialties', 'GetOprationController@getSpecialties');
        // == end Route Specialtie  ==

        // == Begin Route Doctor  ==
        Route::post('doctors', 'GetOprationController@getDoctors');
        // == end Route Doctor  ==


    });
});
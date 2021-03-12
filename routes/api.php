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

Route::get('/employees', 'ApiCOntroller@index');
Route::post('/employees', 'ApiCOntroller@create');
Route::get('/employees/{id}', 'ApiCOntroller@getEmployee');
Route::put('/employees/{id}', 'ApiCOntroller@update');
Route::delete('/employees/{id}', 'ApiCOntroller@destroy');


Route::get('/success', 'TecshopController@success')->name('success');
Route::post('/pesatel_callback', 'ApiCOntroller@callback')->name('pesatel_callback');

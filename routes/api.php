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

Route::get('/studio',[
    'uses' => 'StudioController@getStudio'
    ]);

Route::get('/studios/{nama}',[
    'uses' => 'StudioController@getBasedOnName'
]);

Route::get('/judul/{judul}',[
    'uses' => 'StudioController@getBasedOnJudul'
]);

Route::get('/movies',[
    'uses' => 'MovieController@getMovies'
]);

Route::get('/bioskop',[
    'uses' => 'BioskopController@getBioskop'
]);
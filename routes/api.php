<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contact', 'ContactController@index');
Route::post('/contact/create', 'ContactController@create');
Route::get('/contact/{id}/edit', 'ContactController@edit');
Route::put('/contact/{id}/update', 'ContactController@update');
Route::delete('/contact/{id}/delete', 'ContactController@delete');

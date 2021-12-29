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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{id}', 'TaskController@show');
Route::put('/tasks/{id}', 'TaskController@update');
Route::delete('/tasks/{id}', 'TaskController@destroy');

Route::get('/gacha/info', 'GachaController@detail');
Route::post('/gacha', 'GachaController@gacha');
Route::get('/gacha/debug', 'GachaController@debug');
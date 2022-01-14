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

Route::prefix('debug')->group(function () {
    Route::get('/', 'DebugController@info');
    Route::get('/check_session', 'DebugController@checkSession');
});

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        $user = $request->user();
        return response()->json($user);
    });
    Route::get('/session', function (Request $request) {
        return var_dump($request);
    });
});

Route::middleware('auth:api')->group(function () {

    Route::prefix('tasks')->group(function () {
        Route::get('/', 'TaskController@index');
        Route::get('/{id}', 'TaskController@show');
        Route::post('/', 'TaskController@store');
        Route::put('/{id}', 'TaskController@update');
        Route::delete('/{id}', 'TaskController@destroy');
    });

Route::prefix('gacha')->group(function () {
    Route::get('/info', 'GachaController@detail');
    Route::get('/debug', 'GachaController@debug');
    Route::post('/', 'GachaController@gacha');
    Route::get('/info/characters', 'GachaController@charactersInfo');
});

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

Route::get('commands', 'API\CommandController@index');
Route::post('commands', 'API\CommandController@store');

Route::get('operations', 'API\OperationController@index');
Route::post('operations', 'API\OperationController@store');
//Route::get('commands', 'API\CommandController@firstAndDelete');
//Route::apiResource('commands', 'API\CommandController');

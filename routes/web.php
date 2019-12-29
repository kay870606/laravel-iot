<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('commands');
    //return view('welcome');
});

Route::apiResource('commands', 'CommandController');

Route::get('lights', function () {
   return view('lights.index');
});

Route::get('/api/lights', function () {
    return \App\light::first();
});
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('test', function () {
        return 1;
    });
});*/

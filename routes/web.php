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

/* Dashboard Index */
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('{path?}', 'HomeController@dashboard')->where('path', '[\/\w\.-]*');
});

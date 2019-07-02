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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'auth.login')->middleware('guest');

Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    /*
     * Outlets Routes
     */
    Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
    Route::resource('outlets', 'OutletController');

});

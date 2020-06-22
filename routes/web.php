<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	// All User Route
	Route::get('/user', 'HomeController@index')->name('home');
	Route::get('/blockuser', function(){
   		return view('block');
	});


	// All Admin Route
    Route::group(['middleware' => ['is_admin'], 'prefix' => 'admin'], function () {

        Route::get('/', 'HomeController@adminHome')->name('staff.admin');

    });

    // All Staff Route
    Route::group(['middleware' => ['is_staff'], 'prefix' => 'staff'], function () {

        Route::get('/', 'HomeController@staffHome')->name('staff.home');

    });

});

// All Common Route
Route::get('/error', function(){
   return abort(404);
});
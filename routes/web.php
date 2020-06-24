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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	// All Admin Route
    Route::group(['middleware' => ['is_admin'], 'prefix' => 'admin'], function () {

        Route::get('/', 'HomeController@adminHome')->name('admin.dashboard');

    });

    // All Staff Route
    Route::group(['middleware' => ['is_staff'], 'prefix' => 'staff'], function () {

        Route::get('/', 'HomeController@staffHome')->name('staff.dashboard');

    });

    // All User Route
    Route::group(['middleware' => ['is_user'], 'prefix' => 'user'], function () {

        Route::get('/', 'HomeController@index')->name('user.dashboard');

    });

    Route::get('/blockuser', function(){
        return view('block');
    })->middleware('can:isInactive');

});

// All Common Route
Route::get('/error', function(){
   return abort(404);
});

Route::get('/', function () {
    return view('welcome');
});




// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::middleware('can:manage-users')->group(function(){
//         Route::resource('/users', 'UsersController', ['except' => ['show']]);
//         Route::resource('/courses', 'CoursesController', ['except' => ['show']]);
//     });
//     Route::middleware('can:manage-calendar')->group(function(){
//         Route::get('events', 'EventsController@index')->name('events.index');
//         Route::post('/addEvents', 'EventsController@addEvent')->name('events.add');
//     });
// });
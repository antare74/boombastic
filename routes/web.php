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

Route::get('/home', 'HomeController@index')->name('home');



// Route untuk admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::Resource('/home', 'HomeController');

    /* contact route */
    Route::group(['prefix' => 'contact'], function() {
        Route::get('/{action?}/{id?}', 'AdminController@detailFormContact');
        Route::any('/update/{id?}', 'AdminController@storeFormContact');
    });

    /* catering route */
    Route::group(['prefix' => 'catering'], function() {
        Route::get('/{id?}', 'AdminController@indexFormCatering');
        Route::get('/delete/{id?}', 'AdminController@deleteFormCatering');
        Route::any('/store/{id?}', 'AdminController@storeFormContact');
    });
});

/* contact route */
Route::any('contact/store', 'ContactController@storeFormContact');

/* catering route */
Route::any('catering/store', 'CateringController@storeFormCatering');

/* redirect register route */
Route::any('/register', function (){
    return redirect('/');
});

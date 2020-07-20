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
Route::group(['prefix' => 'admin',  'middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/contact/{id?}', 'AdminController@indexFormContact');
});

Route::group(['namespace' => 'Admin'], function(){
    /* contact route */
    Route::group(['prefix' => 'contact'], function() {
        Route::any('/store/{id?}', 'AdminController@storeFormContact');
        Route::get('/delete/{id?}', 'AdminController@deleteFormContact');
    });
    /* catering route */
    Route::group(['prefix' => 'catering'], function() {
        Route::get('/store', 'AdminController@storeFormCatering');
        Route::get('/delete/{id?}', 'AdminController@deleteFormCatering');
        Route::get('/update/{id?}', 'AdminController@updateFormCatering');
    });
});

/* redirect register route */
Route::any('/register', function (){
    return redirect('/');
});

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

/* contact route */
Route::group(['prefix' => 'contact'], function() {
    Route::get('/{id?}', 'ContactController@indexFormContact');
    Route::any('/store/{id?}', 'ContactController@storeFormContact');
    Route::get('/delete/{id?}', 'ContactController@deleteFormContact')->middleware('auth');
});
/* catering route */
Route::group(['prefix' => 'catering'], function() {
    Route::any('/store', 'CateringController@storeFormCatering');
    Route::get('/delete/{id?}', 'CateringController@deleteFormCatering')->middleware('auth');
});

/* redirect register route */
Route::any('/register', function (){
    return redirect('/');
});

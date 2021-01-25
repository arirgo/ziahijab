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
})->name('home');
Auth::routes();


Route::middleware('role:Admin')->get('/home', 'HomeController@index')->name('dashboard');
Route::middleware('role:Admin')->prefix('category')->group(function(){
	Route::get('/', 'CategoryController@index')->name('category');
	Route::post('/category/store', 'CategoryController@store')->name('category.store');

});





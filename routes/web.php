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



Route::get('/','App\Http\Controllers\PagesController@index')->name('index');
//Route::get('/welcome','App\Http\Controllers\AdminPagesController@welcome')->name('welcome');




//all pagaes route in admin pages
Route::group(['prefix' => 'admin'], function(){

    Route::get('/','App\Http\Controllers\AdminPagesController@adminPages')->name('adminPages');
    
    Route::get('/allproducts','App\Http\Controllers\AdminPagesController@all_products')->name('all_products');
    Route::get('/categories','App\Http\Controllers\AdminPagesController@categories')->name('categories');
    Route::get('/dashboard','App\Http\Controllers\AdminPagesController@dashboard')->name('dashboard');
    Route::get('/ordermanagement','App\Http\Controllers\AdminPagesController@ordermanagement')->name('ordermanagement');
    


    
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

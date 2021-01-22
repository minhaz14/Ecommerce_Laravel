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
Route::get('/dashboar','App\Http\Controllers\PagesController@dashboar')->name('dashbor');
//Route::get('/bal','App\Http\Controllers\PagesController@bal')->name('bal');
//Route::get('/bal','App\Http\Controllers\productController@show_products')->name('show_products');//sho products from database in product page

//Route::get('/welcome','App\Http\Controllers\AdminPagesController@welcome')->name('welcome');
Route::get('/search','App\Http\Controllers\PagesController@search')->name('search');

Route::get('/category/{id}','App\Http\Controllers\PagesController@show')->name('show');





//all pagaes route in admin pages
Route::group(['prefix' => 'admin'], function(){

    Route::get('/','App\Http\Controllers\AdminPagesController@adminPages')->name('adminPages');

    //product add delet show routes
    Route::get('/allproducts','App\Http\Controllers\AdminPagesController@all_products')->name('all_products');
    Route::get('/addproducts','App\Http\Controllers\AdminPagesController@add_products')->name('add_products');//pproduct add page
    Route::post('/product/create','App\Http\Controllers\AdminPagesController@product_store')->name('admin.product.store');//product add function
    Route::get('/product/delete/{id}','App\Http\Controllers\productController@destroy_products')->name('product.destroy');
    

    //categorys routes and functions
    Route::get('/categories','App\Http\Controllers\AdminPagesController@categories')->name('categories');
    Route::post('/addcategorys','App\Http\Controllers\CategoryController@category_store')->name('admin.category.store');//category add//store
    Route::post('/category/edit/','App\Http\Controllers\CategoryController@edit_categories')->name('category.edit');
    Route::get('/category/delete/{id}','App\Http\Controllers\CategoryController@destroy_categories')->name('category.destroy');
     

    


    Route::get('/dashboard','App\Http\Controllers\AdminPagesController@dashboard')->name('dash_board');
    Route::get('/ordermanagement','App\Http\Controllers\AdminPagesController@ordermanagement')->name('ordermanagement');
    

    
});

Route::group(['prefix' => 'carts'], function(){

    Route::get('/','App\Http\Controllers\CartController@index')->name('carts');
    Route::post('/store','App\Http\Controllers\CartController@store')->name('carts.store');
    Route::post('/update/{id}','App\Http\Controllers\CartController@update')->name('carts.update');
    Route::post('/delete/{id}','App\Http\Controllers\CartController@destroy')->name('carts.delete');
});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('user.index');
})->name('dashboard');

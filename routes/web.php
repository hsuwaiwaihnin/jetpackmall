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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/','FrontendController@index');

Route::get('/','Frontend1Controller@index')->name('index');
Route::get('frontside/subcategory/{id}','Frontend1Controller@subcategory')->name('frontside/subcategory');

Route::get('frontside/brand/{id}','Frontend1Controller@brand')->name('frontside/brand');

Route::get('frontside/promotion','Frontend1Controller@promotion')->name('frontside/promotion');

Route::get('cart','Frontend1Controller@cart')->name('cart');

Route::get('order','Frontend1Controller@order')->name('order');

Route::get('ordersuccess','Frontend1Controller@ordersuccess')->name('ordersuccess');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/category','CategoryController');

Route::resource('/brand','BrandController');

Route::resource('/subcategory','SubcategoryController');
Route::resource('/item','ItemController');
Route::resource('/order','ItemController');


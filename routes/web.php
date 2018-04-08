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

Route::get('/', 'HomeController@index');

//Route::post('login', 'LoginController@LoginPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin', 'AdminController');

Route::get("/book/{id}", "HomeController@detail")->name('book');

Route::post('/admin/upload/{id}','AdminController@fileupload')->name('fileupload');

Route::get('/shoppingcart', 'ShoppingCartController@index')->name('shoppingcart');

Route::get('/add-to-cart/{id}', 'ShoppingCartController@addtocart') ->name('addtocart');

Route::get('/remove-from-cart/{id}', 'ShoppingCartController@removefromcart') ->name('removefromcart');
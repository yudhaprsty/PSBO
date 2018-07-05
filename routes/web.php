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


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ProductController@index');
// Route::get('/home/{id}','ProductController@add')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/checkout/{id}', 'CheckoutController@index')-> name('checkout');
Route::get('/checkout/{id}/status', 'CheckoutController@status')-> name('order');

Route::get('/order', 'CheckoutController@show');
//ubah status terima
Route::get('/order/{id}', 'CheckoutController@statusAcc');

Route::get('/sales', 'CheckoutController@showOrder');
Route::post('/sales/{id}','CheckoutController@changeStatus')->name('changeStatus');

Route::get('/seeds', 'ProductController@showSeeds');
Route::get('/tools', 'ProductController@showTools');
Route::get('/plants', 'ProductController@showPlants');
Route::get('/about', function () { return view('about'); });

Route::get('/wishlist', 'ProductController@showWishlist');
Route::delete('/wishlist/{wishlist}/delete', 'CheckoutController@destroy')->name('delete.wishlist');

Route::post('/profil', 'UserController@store');
Route::get('/profil', 'ProductController@show')-> name('profil');

Route::get('/product/{id}/edit', 'ProductController@edit');
Route::put('/product/{id}', 'ProductController@update');
Route::post('/product/{id}', 'ProductController@add');
Route::delete('/product/{product}/delete', 'ProductController@destroy')->name('delete.product');
Route::get('/product/{id}', 'ProductController@showProduct')->name('product');

Route::get('/add/{id}','ProductController@add')->name('home');
Route::get('/add', function () {return view('addproduct'); });
Route::post('/add', 'ProductController@store');

//admin
Route::get('/admin', function () {
    return view('admin');
});

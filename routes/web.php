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

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'produkController@index');
Route::get('/checkout/{id}', 'CheckoutController@index')-> name('checkout');
Route::get('/checkout/{id}/status', 'CheckoutController@status')-> name('order');
Route::get('/order', 'CheckoutController@show')->name('gege');
//ubah status terima
Route::get('/order/{id}', 'CheckoutController@ubah_status_terima');

//
Route::get('/seeds', function () { return view('seeds'); });
Route::get('/pesanan', "CheckoutController@showpesanan");
Route::get('/tools', function () { return view('tools'); });
Route::get('/plants', function () { return view('plants'); });
Route::get('/about', function () { return view('about'); });

//ubah status
Route::post('/pesanan/{id}','CheckoutController@ubah_status')->name('ubah_status');
Route::get('/wishlist', 'ProdukController@lihat');

Route::post('/profil', 'UserController@store');

Route::get('/profil', 'produkController@show')-> name('profil');

Route::get('/produk/{id}/edit', 'produkController@edit');

Route::put('/produk/{id}', 'produkController@update');
Route::post('/produk/{id}', 'produkController@add');

Route::delete('/produk/{product}/delete', 'produkController@destroy')->name('delete.product');

Route::get('/home/{id}','ProdukController@add')->name('home');

Route::get('/produk/{id}', 'produkController@display')->name('product');
Route::get('/add/{id}','ProdukController@add')->name('add');
Route::get('/penjual', function () {return view('penjual'); });
Route::get('/add', function () {return view('addproduk'); });
Route::post('/add', 'ProdukController@store');
//admin
Route::get('/admin', function () {
    return view('admin');
});

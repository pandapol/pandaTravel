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

Route::get('/', 'HomeController@index')
        ->name('home');

Route::get('/detail/{slug}', 'DetailController@index')
        ->name('detail');

//Fungsinya untuk memproses data dari chehckout
Route::post('/checkout/{id}','CheckoutController@process')
        ->name('checkout_process')
        ->middleware(['auth','verified']);
//Jika data checkout  berhasil maka akan menapilkan tampilan index Checkout
Route::get('/checkout/{id}','CheckoutController@index')
        ->name('checkout')
        ->middleware(['auth','verified']);
//Menambahkan orang lain selain member
Route::post('/checkout/create/{detail_id}','CheckoutController@create')
        ->name('checkout-create')
        ->middleware(['auth','verified']);
//Menghapus orang lain selain member
Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
        ->name('checkout-remove')
        ->middleware(['auth','verified']);
//Mengganti status menjadi konfirmasi
Route::get('/checkout/confirm/{id}','CheckoutController@success')
        ->name('checkout-success')
        ->middleware(['auth','verified']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');

            Route::resource('travel-package', 'TravelPackageController');
            Route::resource('gallery', 'GalleryController');
            Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);

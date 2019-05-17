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
    return view('splashscreen');
});

Route::get('/home', function () {
    return view('home');
})->name('home');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/collection', function () {
    return view('collection.index');
})->name('collection');

Route::get('/collection/product/{id}', 'CollectionController@productShow')->name('collection.product.show');

Route::get('/shops', function () {
    return view('about');
})->name('shops');

Route::get('/contacts', function () {
    return view('about');
})->name('contacts');

Route::get('/celebrities', function () {
    return view('about');
})->name('celebrities');

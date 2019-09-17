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
   // return view('welcome');
    echo "Selamat Datang";
});

Route::get('/satu', function () {
   // return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
   // return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
   // return view('welocome');
    echo "three";
});

Route::get('/empat', function () {
   // return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
   // return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
   // return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
   // return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
   // return view('welcome');
    echo "nine";
});

Route::get('/sepuluh', function () {
   // return view('welcome');
    echo "ten";
});

//2 memanggil view
Route::get('/sepuluh', function () {
     return view('Telo');
    // lokasi view
});

Route::get('/template', function () {
    return view('template');
   // lokasi view
});

//3 panggil controller
Route::get('/', 'kontak@index');

Route::get('/CleaningService', 'CleanerController@cleaner');

Route::get('/', 'kontakk@index');

Route::resource('kontak', 'Kontakk');

Route::get('/', function(){
    return view ('index');
});

Route::get('login', 'Login@index');

Route::get('login/cek', 'Login@cek');


Route::resource('penjualan', 'penjualan');

Route::get('?', 'penjualan@index');

Route::get('/', function () {
    return view('index');
   // lokasi view
});


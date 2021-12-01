<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailsController;
use App\Models\category;

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


// Tampilan pass awal masuk
Route::get('/', function () {
    return view('welcome');
});

// untuk mengakses halamaan contact
Route::get('/contact', function () {
    return view('contact');
});

//seharusnya kan get 'Welcome' tapi gua akalin jadi sama kek diatas ('/'), 
// karena dia minta tampil di awal juga

//untuk menampilkan data booklist secara keseluruhan
Route::get('/',[BooksController::class,'show'])->name('home');

//untuk menampilkan data booklist berdasarkan kategori namun disini saya menggunakan halaman welcome
// sebagai tujuanya, sehingga nanti akan dilempar parameter home yang menampilkan return welcom
// sehingga tampilan akan berubah menjadi tampilan booklist berdasarkan kategori yang dipilih
Route::get('/',[BooksController::class,'show'])->name('home');


// pada detail, nantinya saya akan menampilkan sebuah detail yang mengarah kepada view detail
// dan melemparkan parameter id pada tittle yang dipilih
// sehingga akan menampilkan detail books sesuai dengan tittle yang di pilih
Route::get('/detail/{details}',[BooksController::class,'detailShow'])->name('detail');




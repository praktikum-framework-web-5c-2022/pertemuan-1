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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/product', function(){
//     return "Selamat datang di halaman";
// });

// Route::get('product/{kode_produk}', function($kode_produk){
//     return "Laptop Acer $kode_produk";
// })->where('kode_produk','[0-9]+');

// Route::get('/about', function(){
//     return "Ini about";
// });

// Route::redirect('/tentang-kami','/about');

// Route::prefix('/store')->group(function(){
//     Route::get('/product', function(){
//         return "Daftar produk";
//     });

//     Route::get('/category', function () {
//         return "Daftar Kategori";
//     });
// });

// Route::prefix('mahasiswa')->group(function(){

// });

// Route::fallback(function(){
//     return "Halaman tidak ditemukan";
// });

Route::get('/store', function(){
    $list_product = [];

    return view('store.index')->with('products', $list_product);
});

Route::get('/product', function(){
    $products = ["Macbook","Iphone","Oppo","Acer"];
    return view('product.index')->with('products', $products);
});

Route::get('/category', function () {
    $categories = ["Laptop", "Handphone", "Komputer", "Printer"];
    return view('category.index')->with('categories', $categories);
});

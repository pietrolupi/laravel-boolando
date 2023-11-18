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

    $products = config('products');

    return view('home', compact('products'));
})->name('home');



Route::get('/donna', function () {
    $products = config('products');
    return view('women',compact('products'));
})->name('women');


Route::get('/uomo', function () {
    $products = config('products');
    return view('men',compact('products'));
})->name('men');


Route::get('/bambini', function () {
    $products = config('products');
    return view('children',compact('products'));
})->name('children');


Route::get('/dettaglio-prodotto/{slug}', function ($slug) {
    $products = config('products');

    $product_array = array_filter($products,fn($product)=> $product['slug'] === $slug);

    $product = $product_array[array_key_first($product_array)];

    return view('productDetail',compact('product'));
})->name('productDetail');

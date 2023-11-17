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
    return view('home');
})->name('home');



Route::get('/donna', function () {
    return view('women');
})->name('women');


Route::get('/uomo', function () {
    return view('men');
})->name('men');


Route::get('/bambini', function () {
    return view('children');
})->name('children');

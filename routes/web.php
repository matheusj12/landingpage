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

// Rota para a landing page
Route::get('/', function () {
    return view('landingpage');


Route::get('/product', function () {
    return view('product');
});

// Rota para a landing page
Route::get('/services', function () {
    return view('services');
});

// Rota para a landing page
Route::get('/article', function () {
    return view('article');
});


// Rota para a landing page
Route::get('/aboutus', function () {
    return view('aboutus');
});

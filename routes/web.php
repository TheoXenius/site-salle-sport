<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/cours', function () {
    return view('cours');
});

Route::get('/tarif', function () {
    return view('tarif');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mention légale', function () {
    return view('mention légale');
});



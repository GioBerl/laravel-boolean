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
})->name('homepage');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/domande', function () {
    return view('faqs');
})->name('faqs');

// PAGINA DI PROVA PER TESTARE PHP PLEIN
Route::get('/prova', function () {
    // nel file config ho aggiunto un file prova.php
    $prove = config('prova.lista_prove');
    return view('prova')->with();
})->name('prova');
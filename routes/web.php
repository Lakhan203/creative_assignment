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
    return view('pages.home');
})->name('home');

Route::get('/contact-us', function () {
    return view('pages.contact_us');
})->name('contact-us');

Route::get('/our-work', function () {
    return view('pages.our_work');
})->name('our-work');

Route::get('/career', function () {
    return view('pages.career');
})->name('career');


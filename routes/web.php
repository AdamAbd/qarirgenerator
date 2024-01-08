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
    return view('welcome');
});

Route::get('/leads', function () {
    return view('leads');
});

Route::get('/data-science', function () {
    return view('data-science');
});

Route::get('/digital-marketing', function () {
    return view('digital-marketing');
});

Route::get('/program-ai', function () {
    return view('ai');
});

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

Route::get('/options', function () {
    return view('options');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/scart', function () {
    return view('scart');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/index', function () {
    return view('index');
});
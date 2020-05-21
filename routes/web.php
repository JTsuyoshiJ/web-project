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

Route::get('/accesuars', function () {
    return view('accesuars');
});

Route::get('/computers', function () {
    return view('computers');
});

Route::get('/corz', function () {
    return view('corz');
});

Route::get('/garden_and_repair', function () {
    return view('garden_and_repair');
});

Route::get('/office', function () {
    return view('office');
});

Route::get('/phones_and_gadjets', function () {
    return view('phones_and_gadjets');
});

Route::get('/photo_and_vidios', function () {
    return view('photo_and_vidios');
});

Route::get('/technical', function () {
    return view('technical');
});
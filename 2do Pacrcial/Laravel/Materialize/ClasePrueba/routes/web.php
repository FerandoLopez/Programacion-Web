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
    return view('index');
})->name('i');
Route::get('/IPhone', function () {
    return view('iphone');
})->name('p');
Route::get('/IPad', function () {
    return view('IPad');
})->name('d');
Route::get('/Mac', function () {
    return view('Mac');
})->name('m');


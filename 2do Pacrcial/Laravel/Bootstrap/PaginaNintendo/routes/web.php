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
Route::get('/Juegos', function () {
    return view('juegos');
})->name('j');
Route::get('/Equipo', function () {
    return view('equipo');
})->name('e');
Route::get('/Noticias', function () {
    return view('noticias');
})->name('n');

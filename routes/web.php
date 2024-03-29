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
    $comicsList = config('comics');
    return view('home', compact('comicsList'));
})->name('home');

Route::get('characters', function () {
    return view('characters');
})->name('characters');

Route::get('comics', function () {
    $comicsList = config('comics');
    return view('comics', compact('comicsList'));
})->name('comics');

Route::get('movies', function () {
    return view('movies');
})->name('movies');

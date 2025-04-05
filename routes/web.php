<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas para el modelo Book
Route::resource('books', \App\Http\Controllers\BookController::class);

// Rutas para el modelo Author
Route::resource('authors', \App\Http\Controllers\AuthorController::class);

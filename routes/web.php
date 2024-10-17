<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/books/reading',[BookController::class, 'index'])
    ->name('books.reading')
    ->defaults('status', 'reading');

Route::get('/books/wishing',[BookController::class, 'index'])
    ->name('books.wishing')
    ->defaults('status', 'wishing');

Route::get('/books/read',[BookController::class, 'index'])
    ->name('books.read')
    ->defaults('status', 'read');

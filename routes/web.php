<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/search', [BookController::class, 'search'])->middleware('auth')->name('book.search');

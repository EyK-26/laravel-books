<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('books', [BookController::class, 'index'])->name('books.index');

<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'can:admin'], function () {
    //admin author view/form/store
    Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors');
    Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('admin.authors.create');
    Route::post('/admin/authors', [AuthorController::class, 'store'])->name('admin.authors.store');
    //admin author view/form/store/edit/update
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/books{book}', [BookController::class, 'update'])->name('admin.books.update');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
});

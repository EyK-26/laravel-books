<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'can:admin'], function () {
    //admin author view/form/store
    Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors')->middleware('can:admin');
    Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('admin.authors.create')->middleware('can:admin');
    Route::post('/admin/authors', [AuthorController::class, 'store'])->name('admin.authors.store')->middleware('can:admin');
    //admin author view/form/store/edit/update
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books')->middleware('can:admin');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create')->middleware('can:admin');
    Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store')->middleware('can:admin');
    Route::get('/admin/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit')->middleware('can:admin');
    Route::put('/admin/books{book}', [BookController::class, 'update'])->name('admin.books.update')->middleware('can:admin');
    // admin user show index
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users')->middleware('can:admin');
    // admin delete review
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy')->middleware('can:admin');
});

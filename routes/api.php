<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test/array', [TestController::class, 'arrayResponse'])->name('test.array');

Route::get('/test/model', [TestController::class, 'modelResponse'])->name('test.model');

Route::get('/books/latest', [BookController::class, 'latest'])->name('books.latest');

Route::get('/books/search', [BookController::class, 'search'])->name('books.search');

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {
        $lastTen = Book::orderBy('publication_date', 'desc')->limit(10)->get();

        if (auth()->check()) {
            return $lastTen->load('authors');
        } else {
            return 'user not logged in';
        }
    }
}

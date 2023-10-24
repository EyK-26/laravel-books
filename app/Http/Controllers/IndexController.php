<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // $crime_books = Book::where('category_id', 12)
        //     ->with('authors')
        //     ->orderBy('publication_date', 'desc')
        //     ->limit(10)
        //     ->get();

        // $crime_books_2 = Book::with('authors')->where('category_id', 12)->orderBy('publication_date', 'desc')
        //     ->limit(10)
        //     ->get();

        return view('index');
    }
}

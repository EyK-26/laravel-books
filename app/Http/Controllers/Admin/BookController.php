<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::limit(10)->paginate(3);

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $book = new Book();
        return view('admin.books.create', compact('book'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        $book = new Book();
        $book->title = $request->input('title');
        $book->language = $request->input('language');
        $slug = strtolower(preg_replace('/\s+/', '-', $book->title));
        $book->slug = $slug;
        $book->save();
        return redirect()->route('books.show', $book->id)->with('success', 'book added');
    }

    // public function show($id)
    // {
    //     $book = Book::with('bookshops')
    //         ->where('id', $id)
    //         ->first();
    //     $reviews = Review::query()->where("book_id", $id)->get();
    //     return view('books.detail', compact('book', 'reviews'));
    // }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $reviews = Review::query()->where("book_id", $id)->get();
        return view('books.detail', compact('book', 'reviews'));
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('admin.books.create', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, ['title' => 'required', 'language' => 'required']);
        $book = Book::findOrFail($id);
        $book->title = $request->input('title');
        $book->language = $request->input('language');
        $slug = strtolower(preg_replace('/\s+/', '-', $book->title));
        $book->slug = $slug;
        $book->save();
        return redirect()->route('books.show', $id)->with('success', 'book updated');
    }
}

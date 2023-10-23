<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::query()->limit(50)->paginate(10);

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $book = new Book();
        return view('books.create', compact('book'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'bio' => 'required']);
        $book = new Book();
        $book->name = $request->name;
        $book->bio = $request->bio;
        $slug = strtolower(preg_replace('/\s+/', '-', $request->name));
        $book->slug = $slug;
        $book->save();
        return redirect()->route('books.index')->with('success', 'book added');
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.create', compact('book'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request, ['title' => 'required', 'language' => 'required']);
        $book = Book::findOrFail($id);
        $book->title = $request->input('title');
        $book->language = $request->input('language');
        $book->save();
        return redirect()->route('books.index')->with('success', 'book updated');
    }
}
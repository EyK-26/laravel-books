<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::query()->limit(50)->paginate(10);

        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        $author = new Author();
        return view('authors.create', compact('author'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'bio' => 'required']);
        $author = new Author();
        $author->name = $request->name;
        $author->bio = $request->bio;
        $slug = strtolower(preg_replace('/\s+/', '-', $request->name));
        $author->slug = $slug;
        $author->save();
        return redirect()->route('authors.index')->with('success', 'author added');
    }
}

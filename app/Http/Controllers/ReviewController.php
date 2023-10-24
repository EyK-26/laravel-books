<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "text" => "required|min:6",
        ]);
        $book_id = $request->input("book_id");
        $review = new Review();
        $review->fill($request->all());
        $review->user_id = auth()->id();
        $review->save();
        return redirect()->route('books.show', $book_id)->with("success", "review submitted");
    }
}

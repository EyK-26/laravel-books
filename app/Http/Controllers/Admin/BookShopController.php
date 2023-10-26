<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bookshop;
use Illuminate\Http\Request;

class BookShopController extends Controller
{
    public function show(string $id)
    {
        $bookshop = Bookshop::findOrFail($id);
        return view('bookshops.detail', compact("bookshop"));
    }
}

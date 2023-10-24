<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            return view('index', compact('user'));
        } else {
            return view('index');
        }
    }
}

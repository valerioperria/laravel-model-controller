<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies = movie::all();
        return view('welcome', compact('movies'));
    }
}

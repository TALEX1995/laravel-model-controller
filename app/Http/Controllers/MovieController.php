<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //Movies function
    public function index()
    {

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}

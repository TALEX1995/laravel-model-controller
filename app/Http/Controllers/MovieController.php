<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //Movies function
    public function index()
    {
        return view('home');
    }
}

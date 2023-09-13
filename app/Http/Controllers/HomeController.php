<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; 

class HomeController extends Controller
{
    // funzione che restituisce i movie
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}

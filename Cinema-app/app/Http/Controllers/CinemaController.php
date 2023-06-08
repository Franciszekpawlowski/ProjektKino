<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CinemaController extends Controller
{
    public function index()
    {
        // Retrieve all movies from the database
        $movies = Movie::all();

        // Pass them to the view
        return view('cinema.index', ['movies' => $movies]);
    }
}

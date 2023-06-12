<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CinemaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $movies = Movie::paginate(1);
            return view('movies.partial', ['movies' => $movies])->render();
        } else {
            $movies = Movie::paginate(1);
            return view('cinema.index', ['movies' => $movies]);
        }
    }

    public function nextMovie($id)
    {
        $movie = Movie::where('id', '>', $id)->orderBy('id')->first();
        if (!$movie) {
            // If there's no next movie, wrap around to the first one
            $movie = Movie::orderBy('id')->first();
        }

        return response()->json($movie);
    }

}
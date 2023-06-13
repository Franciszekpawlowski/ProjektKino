<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

/**
 * Summary of MovieController
 */
class MoviesController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $movies = Movie::get();
        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function show($movie)
    {
        $movie = Movie::findOrFail($movie);
        return view('movies.show', [
            'movie' => $movie
        ]);
    }
}

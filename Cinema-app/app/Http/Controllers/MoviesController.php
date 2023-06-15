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

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => '',
            'image' => 'image',
            'time' => 'required'
        ]);

        $filePath = request('image') -> store("moviePicture",'public');

        Movie::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'length' => $data['time'],
            'imagePath' => "/storage/" . $filePath
        ]);

        return redirect('/movie');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit',compact('movie'));
    }

    public function update(Movie $movie)
    {
        $data = request()->validate([
            'title' => '',
            'description' => '',
            'image' => 'image',
            'time' => ''
        ]);

        $movie->update($data);
        return redirect("/movie/{$movie->id}");    
    }

    public function destroy(Movie $movie)
    {
        foreach ($movie->seances() as $seances ) {
            $seances->delete();
        }

        $movie->delete();

        return redirect('/movie');
    }
}

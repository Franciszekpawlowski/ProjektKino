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
        if (Request()->wantsJson()) {
            return response()->json($movies->toArray());
        }
        return view('repertoire.index', [
            'movies' => $movies
        ]);
        
    }
    public function nextMovie($id){
        $movie = Movie::where('id', '>', $id)->orderBy('id')->first();
        if (!$movie) {
            // If there's no next movie, wrap around to the first one
            $movie = Movie::orderBy('id')->first();
        }
        return response()->json($movie);
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
        $this->authorize('create',App\Models\Movie::class);
        return view('movies.create');
    }

    public function store()
    {
        $this->authorize('create',App\Models\Movie::class);
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
        $this->authorize('update',App\Models\Movie::class);
        return view('movies.edit',compact('movie'));
    }

    public function update(Movie $movie)
    {
        $this->authorize('update',App\Models\Movie::class);
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
        $this->authorize('delete',App\Models\Movie::class);
        foreach ($movie->seances() as $seances ) {
            $seances->delete();
        }

        $movie->delete();

        return redirect('/movie');
    }
}

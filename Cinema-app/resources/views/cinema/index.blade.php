@extends('layouts.app')
 
@section('content')
    <div class="movie-container">
        @foreach($movies as $movie)
        <div class="movie-card" data-id="{{ $movie->id }}">
                <img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                <di class="text-content"> <!-- New div wrapper -->
                    <h2>{{ $movie->title }}</h2>
                    <p>{{ $movie->duration }} minutes</p>
                   <p>{{ $movie->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
 


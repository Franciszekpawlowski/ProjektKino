@extends('layouts.app')

@section('content')
    <div class="movie-container">
        @foreach($movies as $movie)
            <div class="movie-card">
                <img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->duration }} minutes</p>
                <p>{{ $movie->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
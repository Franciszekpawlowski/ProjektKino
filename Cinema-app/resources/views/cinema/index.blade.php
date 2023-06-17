@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <div class="movie-card" data-id="{{ $movie->id }}">
            <img src="{{ $movie->imagePath }}" alt="{{ $movie->title }}">
            <div class="text-content">
                <h2>{{ $movie->title }}</h2>
                <p class="movie-duration">{{ $movie->duration }} minutes</p>
                <p class="movie-description">{{ $movie->description }}</p>
            </div>
        </div>
    @endforeach
@endsection

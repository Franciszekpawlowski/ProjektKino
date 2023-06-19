<!-- resources/views/layouts/repertoire.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Cinema App - Repertoire</title>
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    @include('layouts.navbar')
    @include('layouts.admin.movie')

    <div class="repertoire-container">
        <div class="repertoire-row">
            @foreach($movies as $movie)
                <a href="/movie/{{ $movie->id }}">
                    <div class="repertoire-card">
                        <img src="{{ $movie->imagePath }}" alt="{{ $movie->title }}">
                        <div class="repertoire-overlay">
                            <div class="repertoire-info">
                                <h1>{{ $movie->title }}</h1>
                                <p>{{ $movie->description }}</p>
                                <p>{{ $movie->length }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- JS -->
   
</body>
</html>

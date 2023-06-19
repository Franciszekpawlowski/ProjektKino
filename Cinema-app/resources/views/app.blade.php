<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Cinema App</title>
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/screen.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="cinema-screen-container">
        <section class="movie-display">
            <div id="movie-container" class="movie-container">
                <!-- Movie cards will be inserted here -->
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/infinite-scroll.js"></script>
</body>
</html>

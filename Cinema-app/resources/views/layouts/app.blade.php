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
    <!-- Navigation -->
    <div class="nav">
        <img src="/path/to/logo.png" alt="Logo">
        <div class="links">
            <a href="/cinemas">Wybierz kino</a>
            <a href="/repertoire">Repertuar</a>
            <a href="/login">Logowanie</a>
            <a href="/register">Rejestracja</a>
        </div>
    </div>


<div class="cinema-screen-container">
    <section class="movie-display">
        <div class="movie-container">
            @yield('content')
        </div>
    </section>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/infinite-scroll.js"></script>
</body>
</html>

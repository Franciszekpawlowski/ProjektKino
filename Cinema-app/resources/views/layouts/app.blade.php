<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Cinema App</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <div class="nav">
        <a href="#">Wybierz kino</a>
        <a href="#">Repertuar</a>
        <a href="#">Logowanie</a>
        <a href="#">Rejestracja</a>
    </div>

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

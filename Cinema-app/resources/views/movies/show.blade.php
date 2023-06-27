<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
    <title>Reservation</title>
</head>
<body>
    <div>
        <h1>{{ $movie->title }}</h1>
        <img src="{{ $movie->imagePath }}" alt="{{ $movie->title }}">

        <select id="cinemaSelect"></select>
        <div id="seanceButtons"></div>
        
    </div>
    
    <div>
        @include('reservation.reservation')
    </div>
   

    <script src="{{ asset('js/reservation.js') }}"></script>
    <script>
        // Pass the PHP variable to JavaScript
        window.movieId = {{ $movie->id }};
    </script>
</body>
</html>

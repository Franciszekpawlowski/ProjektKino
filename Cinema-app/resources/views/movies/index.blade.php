<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema App</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .nav {
            display: flex;
            justify-content: space-around;
            padding: 1em;
            background-color: #333;
        }

        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
        }
        
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <a href="/movie/create">Add new movie</a>
    </div>
    <div class="container">
        <div class="row">
        @foreach ( $movies as $movie)
            <a href="/movie/{{ $movie->id }}">
                <div class="col-6">
                    <div>
                        <img src="{{ $movie->imagePath }}">
                    </div>
                    <div>
                        <h1>{{ $movie->title }}</h1>
                    </div>
                    <div>
                        {{ $movie->description }}
                    </div>
                    <div>
                        {{ $movie->length }}
                    </div>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</body>
</html>
<section class="movie-display" style="position: relative; height: 100vh; overflow: hidden;">
    @foreach ($movies as $movie)
        <div class="movie-card" data-id="{{ $movie->id }}" style="transform: translateY(0);">
            <img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
            <div class="text-content">
                <h2>{{ $movie->title }}</h2>
                <p class="movie-duration">{{ $movie->duration }} minutes</p>
                <p class="movie-description">{{ $movie->description }}</p>
            </div>
        </div>
    @endforeach
</section>


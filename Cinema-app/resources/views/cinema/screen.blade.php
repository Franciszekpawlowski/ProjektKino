<div class="cinema-screen-container">
    <img class="cinema-screen" src="/images/empty-movie-theatre.jpg" alt="Cinema Screen">
    <div class="movie-display">
        @if($movies->count() > 0)
            <div class="movie-card" data-id="{{ $movies->first()->id }}">
                <img src="{{ $movies->first()->poster }}" alt="{{ $movies->first()->title }}">
                <div class="text-content"> 
                    <h2>{{ $movies->first()->title }}</h2>
                    <p class="movie-duration">{{ $movies->first()->duration }} minutes</p>
                    <p class="movie-description">{{ $movies->first()->description }}</p>
                </div>
            </div>
        @endif
    </div>
</div>
let lastScrollTime = Date.now();

window.onscroll = function(ev) {
    const movieCards = document.querySelectorAll('.movie-card');
    movieCards.forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top < 0 || rect.bottom > window.innerHeight) {
            // The card is out of view
            card.classList.add('out-of-view');
        } else {
            // The card is in view
            card.classList.remove('out-of-view');
        }
    });

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // The user has scrolled to the bottom of the page
        const now = Date.now();
        const throttleTime = 1000; // Set a throttle time of 1 second
        if (now - lastScrollTime > throttleTime) {
            lastScrollTime = now;
            fetchNextMovie();
        }
    }
};

function fetchNextMovie() {
    let currentMovieId = document.querySelector('.movie-card').dataset.id;

    fetch(`/next-movie/${currentMovieId}`)
        .then(response => response.json())
        .then(data => {
            // Update the movie card with the new movie data
            let movieCard = document.querySelector('.movie-card');
            movieCard.dataset.id = data.id;
            movieCard.querySelector('img').src = data.poster;
            movieCard.querySelector('h2').innerText = data.title;
            movieCard.querySelector('p').innerText = `${data.duration} minutes`;

            // Reset card animation
            movieCard.classList.remove('out-of-view');
        });
}

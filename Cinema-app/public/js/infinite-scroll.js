let lastScrollTime = Date.now();

window.onscroll = function(ev) {
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
    const movieCard = document.querySelector('.movie-card');
    const currentMovieId = movieCard ? movieCard.dataset.id : 0;

    fetch(`/next-movie/${currentMovieId}`)
        .then(response => {
            if (!response.ok) {
                console.error('Fetch response not OK');
                return;
            }
            return response.json();
        })
        .then(data => {
            if (!data) {
                console.error('No data received');
                return;
            }

            // Create a new movie card for the next movie
            const newMovieCard = document.createElement('div');
            newMovieCard.classList.add('movie-card');
            newMovieCard.dataset.id = data.id;
            newMovieCard.style.transform = 'translateY(100%)'; // Start the new card below the view
            newMovieCard.innerHTML = `
                <img src="${data.imagePath}" alt="${data.title}">
                <div class="text-content">
                    <h2>${data.title}</h2>
                    <p class="movie-duration">${data.duration} minutes</p>
                    <p class="movie-description">${data.description}</p>
                </div>
            `;

            // Get the movie display container
            const movieContainer = document.querySelector('.movie-container');

            // Add the new movie card to the movie display container
            movieContainer.appendChild(newMovieCard);

            // Wait a frame for the new card to be added to the DOM
            requestAnimationFrame(() => {
                if (movieCard) {
                    // Animate the old movie card moving up and out of view
                    movieCard.classList.add('outgoing');
                    movieCard.style.transform = 'translateY(-100%)'; // Add this line
                }

                // Animate the new movie card moving up into place
                newMovieCard.style.transform = 'translateY(0)';
            });

            // After the transition, remove the old movie card from the DOM
            if (movieCard) {
                movieCard.addEventListener('transitionend', () => {
                    movieCard.remove();
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}


// Load the first movie when the page loads
fetchNextMovie();



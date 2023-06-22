window.onload = function() {
    fetch(`/movie/${window.movieId}/cinemas`, {
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(cinemas => {
        if (!Array.isArray(cinemas)) {
            throw new Error(`Expected cinemas to be an array, but got ${typeof cinemas}`);
        }

        const cinemaSelect = document.getElementById('cinemaSelect');
        cinemas.forEach(cinema => {
            const option = document.createElement('option');
            option.value = cinema.id;
            option.text = cinema.name;
            cinemaSelect.appendChild(option);
        });
    })
    .catch(error => console.log('Fetch error: ' + error.message));
    
    document.getElementById('cinemaSelect').addEventListener('change', function() {
        const cinemaId = this.value;
        fetch(`/cinema/${cinemaId}/seances`, {
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(seances => {
            const seanceButtonsDiv = document.getElementById('seanceButtons');
            seanceButtonsDiv.innerHTML = '';
            seances.forEach(seance => {
                const button = document.createElement('button');
                button.value = seance.id;
                button.textContent = seance.start_time;
                button.addEventListener('click', function() {
                    Array.from(seanceButtonsDiv.children).forEach(child => {
                        child.classList.remove('selected');
                    });
                    this.classList.add('selected');
                });
                seanceButtonsDiv.appendChild(button);
            });
        })
        .catch(error => console.log('Fetch error: ' + error.message));
    });
}

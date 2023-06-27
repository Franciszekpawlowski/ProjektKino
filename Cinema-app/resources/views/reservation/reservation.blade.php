

    <div class="cinemaHall">
        <div class="row" id="seatLayout">
            <!-- Generate the seat layout dynamically using JavaScript -->
        </div>
    </div>

    <script>
        // Settings for the cinema seat layout
        var settings = {
            rows: 5,
            cols: 15,
            rowCssPrefix: "row-",
            colCssPrefix: "col-",
            seatCss: "seat",
            selectedSeatCss: "selectedSeat"
        };

        // Generate the seat layout dynamically using JavaScript
        var seatLayout = document.getElementById("seatLayout");
        for (var col = 0; col < settings.cols; col++) {
            var rowElement = document.createElement("div");
            rowElement.className = settings.rowCssPrefix + col;
            for (var row = 0; row < settings.rows; row++) {
                var seatElement = document.createElement("div");
                seatElement.className =
                    settings.seatCss + " " + settings.colCssPrefix + row;
                seatElement.addEventListener("click", function () {
                    // Toggle the selected state of the seat
                    this.classList.toggle(settings.selectedSeatCss);
                });

                // Add seat labels
                var seatLabel = document.createElement("div");
                seatLabel.className = "seatLabel";
                seatLabel.textContent = String.fromCharCode(65 + row) + (col + 1);
                seatElement.appendChild(seatLabel);

                rowElement.appendChild(seatElement);
            }
            seatLayout.appendChild(rowElement);
        }
    </script>


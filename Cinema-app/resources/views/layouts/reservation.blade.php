<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve your seat</title>
    <style>
        /* CSS styles for the seats */
        body {
            margin: 0;
            padding: 0;
        }

        .title {
            height: 10vh;
            width: 100vw;
            text-align: center;
        }
        .cinemaHall {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 90vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            justify-content: center;
        }

        .row {
            display: flex;
            align-items: center;
        }

        .seat {
            width: 40px;
            height: 40px;
            background-color: white;
            border: 1px solid black;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .selectedSeat {
            background-color: green;
        }

        .seatLabel {
            font-size: 16px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="title">
    <h1>Cinema Seat Reservation</h1>
    </div>

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
        rowElement.className = settings.rowCssPrefix + row;
        for (var row = 0; row < settings.rows; row++) {
            var seatElement = document.createElement("div");
            seatElement.className =
            settings.seatCss + " " + settings.colCssPrefix + col;
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
</body>
</html>
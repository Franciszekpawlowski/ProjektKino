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
    <div class="container">
        <div class="row">
        @foreach ( $seancesListGroup as $seancesGroup)
            <div>
                <div>
                    <div>
                        <img src="{{ $seancesGroup[0]->movie->imagePath }}" alt="">
                    </div>
                    <div>
                        {{ $seancesGroup[0] -> movie -> title}}
                    </div>
                    <div>
                        {{ $seancesGroup[0] -> movie -> description }}
                    </div>
                    <div>
                        {{ $seancesGroup[0] -> movie -> length }}
                    </div>
                </div>
                @foreach ( $seancesGroup as $seances)
                    <div>
                        <div>
                            {{ $seances->cinema->seances}}
                        </div>
                        @foreach ( $seances as $test)
                            {{ $test }}
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>
</body>
</html>
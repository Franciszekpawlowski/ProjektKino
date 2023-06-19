
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('layouts.navbar')
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
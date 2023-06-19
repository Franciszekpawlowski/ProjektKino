<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema App</title>
</head>
<body>
    <form action="/cinema" enctype="multipart/form-data" method="post">

        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add cinema</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Add Cinema name</label>

                    <input id="name"
                           type="text"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name"
                           value="{{ old('name') }}"
                           autocomplete="name" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="location" class="col-md-4 col-form-label">Add location</label>

                    <input id="location"
                           type="text"
                           class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                           name="location"
                           value="{{ old('location') }}"
                           autocomplete="location" autofocus>

                    @if ($errors->has('location'))
                        <strong>{{ $errors->first('location') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add Cinema</button>
                </div>

            </div>
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema App</title>
</head>
<body>
    <form action="/movie" enctype="multipart/form-data" method="post">

        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Movie</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Add Movie title</label>

                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">Add description</label>

                    <textarea name="description" 
                              id="description" 
                              cols="30" 
                              rows="4">{{ old('description' )}}</textarea>

                    @if ($errors->has('description'))
                        <strong>{{ $errors->first('description') }}</strong>
                    @endif
                </div>

                <div class="row">
                    <label for="time" class="col-md-4 col-form-label">Add time</label>

                    <input id="time"
                            type="time"
                            class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}"
                            name="time"
                            value="{{ old('time') }}"
                            min="0:00" max="03:00" >



                    @if ($errors->has('time'))
                        <strong>{{ $errors->first('time') }}</strong>
                    @endif
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Add Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Movie</button>
                </div>

            </div>
        </div>
    </form>
</body>
</html>
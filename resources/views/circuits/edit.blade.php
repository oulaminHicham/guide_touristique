<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Circuit</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container {
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn-primary {
        background-color: #bc8643;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        color: white;
        width: 100%;
        font-size: 16px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .alert {
        margin-top: 10px;
        color: red;
    }
</style>


</head>
<body>
    <div class="container">
        <h1>Edit Circuit</h1>
        <form action="{{ route('circuits.update', $circuit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="photos">Photos</label>
                <input type="file" class="form-control" id="photos" name="photos" value="{{ old('photos', $circuit->photos) }}">
                @if ($errors->has('photos'))
                    <div class="alert">{{ $errors->first('photos') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="descreption" name="descreption" value="{{ old('descreption', $circuit->descreption) }}">
                @if ($errors->has('descreption'))
                    <div class="alert">{{ $errors->first('descreption') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $circuit->prix) }}">
                @if ($errors->has('prix'))
                    <div class="alert">{{ $errors->first('prix') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="guide_id">Guide ID</label>
                <input type="number" class="form-control" id="guide_id" name="guide_id" value="{{ old('guide_id', $circuit->guide_id) }}">
                @if ($errors->has('guide_id'))
                    <div class="alert">{{ $errors->first('guide_id') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="distination_id">Destination ID</label>
                <input type="number" class="form-control" id="distination_id" name="distination_id" value="{{ old('distination_id', $circuit->distination_id) }}">
                @if ($errors->has('distination_id'))
                    <div class="alert">{{ $errors->first('distination_id') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Circuit</button>
        </form>
    </div>
</body>
</html>

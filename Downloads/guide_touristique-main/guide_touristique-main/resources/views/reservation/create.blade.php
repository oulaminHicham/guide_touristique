<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
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

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #bc8643;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #6a4224;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Reservation</h1>
        <div>
            @isset($errors)
                @foreach ($errors as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endisset
        </div>
        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}">

            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" value="{{ old('destination') }}">

            <label for="user_id">User ID</label>
            <input type="text" id="user_id" name="user_id" value="{{ old('user_id') }}">

            <label for="circuit_id">Circuit ID</label>
            <input type="text" id="circuit_id" name="circuit_id" value="{{ old('circuit_id') }}">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

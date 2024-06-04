
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
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
            background-color: #6a4224;
        }

        .alert {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Reservation</h1>
        <form action="{{ route('reservation.update', $reserve->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $reserve->date }}" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="distination" name="distination" value="{{ $reserve->distination }}" required>
            </div>

            <div class="form-group">
                <label for="user_id">User</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $reserve->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cirquit_id">Circuit</label>
                <select class="form-control" id="cirquit_id" name="cirquit_id" required>
                    @foreach ($cirquits as $cirquit)
                        <option value="{{ $cirquit->id }}" {{ $reserve->cirquit_id == $cirquit->id ? 'selected' : '' }}>
                            {{ $cirquit->descreption }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

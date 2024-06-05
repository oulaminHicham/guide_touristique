<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .reservation-container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #e0e0e0;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f9f9f9;
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a.btn-edit, button.btn-delete {
            padding: 6px 12px;
            margin: 0 5px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }

        a.btn-edit {
            background-color: #4CAF50;
        }

        a.btn-edit:hover {
            background-color: #45a049;
        }

        button.btn-delete {
            background-color: #f44336;
        }

        button.btn-delete:hover {
            background-color: #e53935;
        }

        .form-inline {
            display: inline-block;
        }

        .create {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    @extends('layout')

    @section('content')
    <div class="reservation-container">
        <div class="create">
            <h1>Reservations List</h1>
            <a href="{{ route('reservation.create') }}" style="color: #bc8643"><i class="fas fa-plus-square"></i></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Destination</th>
                    <th>User</th>
                    <th>Circuit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->distination }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->cirquit->descreption }}</td>
                    <td>
                        <a href="{{ route('reservation.edit', $reservation->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" class="form-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>

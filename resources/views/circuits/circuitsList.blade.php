<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="circuitsList.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>dashboard</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class='circuits--list'>
        <div class="titre--circuit" style="justify-content: space-between">
            <h4>Tous les circuits</h4>
            <a href="{{ route('circuits.create') }}" style="color: #bc8643"><i class="fas fa-plus-square"></i></a>
        </div>
        <div class="circuit--content">
            @foreach ($circuits as $circuit)
            <div class='container-card'>
                <div class='image--card'>
                    <img src="{{ asset('images/' .$circuit['photos']) }}" alt="{{ $circuit['descreption'] }}" />
                </div>
                <div class='content--card'>
                    <h3>{{ $circuit['descreption'] }}</h3>
                    <div style="display: flex">
                   <h4>{{ $circuit['prix'] }} $</h4>
                   <span >
                    <a style="color: #bc8643" href="{{ route('circuits.edit', $circuit['id']) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <form  action="{{ route('circuits.destroy', $circuit['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border: none;cursor: pointer" type="submit"><i style="color: #6a4224" class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </span>
                </div>
            </div>

            </div>
            @endforeach
        </div>
    </div>

    @endsection

</body>
</html>
























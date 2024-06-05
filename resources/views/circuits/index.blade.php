<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Circuits</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sam-card {
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        .sam-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .sam-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .sam-dropdown {
            position: relative;
            display: inline-block;
        }

        .sam-dropbtn {
            border: none;
            background: transparent;
        }

        .sam-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .sam-dropdown-content a,
        .sam-dropdown-content button {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border: none;
            background: none;
        }

        .sam-dropdown-content a:hover,
        .sam-dropdown-content button:hover {
            background-color: #f1f1f1;
        }

        .sam-dropdown:hover .sam-dropdown-content {
            display: block;
        }

        .sam-add-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 24px;
            padding: 10px 15px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    @extends('layout')
    @section('content')
    <div class="container-fluid mt-5">
        <h1 class="text-center mb-4">Liste des Circuits</h1>
        <div class="row">
            @foreach ($circuits as $circuit)
                <div class="col-lg-4 mt-3">
                    <div class=" sam-card">
                        <img src="{{ asset('images/'.$circuit['photos']) }}" class="card-img-top sam-img" alt="{{ $circuit['descreption'] }}">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title sam-title">{{ $circuit['descreption'] }}</h5>
                                <h6>{{ $circuit['prix'] }} $</h6>
                            </div>
                            <div class="sam-dropdown">
                                <div class="btn fs-4">...</div>
                                <form action="{{ route('circuits.destroy', $circuit['id']) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce circuit ?');">
                                    @csrf
                                    @method('DELETE')
                                    <div class="sam-dropdown-content">
                                        <button type="submit">Supprimer</button>
                                        <a href="{{ route('circuits.edit', $circuit['id']) }}">Modifier</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a class="btn btn-primary sam-add-button" href="{{ route('circuits.create') }}">+</a>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Destinations</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .destination-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 1rem;
            /* overflow: hidden; */
            position: relative;
        }

        .destination-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .destination-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .destination-name {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .add-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            padding: 15px 20px;
        }

.dropdown {
    position: relative;
    display: inline-block;

  }
  .dropbtn{
    border: none;
    background: white;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    z-index: 1;
  }


  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  .dropdown-content button {
    color: black;
    padding: 12px 16px;
    border: none;
    text-decoration: none;
    display: block;
  }


  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }


  .dropdown:hover .dropdown-content {
    display: block;
  }

    </style>

</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Liste des Destinations</h1>
        <div class="row">
            @foreach ($distinations as $distination)
                <div class="col-lg-4 mt-5">

                    <div class="card destination-card">

                        @if ($distination->photo)
                            <img src="destination\{{$distination->photo }}" class="card-img-top destination-img"alt="Photo de {{ $distination->nom }}">
                        @else
                            <div class="card-img-top destination-img d-flex align-items-center justify-content-center bg-light">
                                <span class="text-muted">No Image</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title destination-name">{{ $distination->nom }}</h5>
                            <div class="dropdown">
                                <form action="{{ route('distinations.destroy', $distination->id) }}" method="POST"onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette destination ?');">
                                    @csrf
                                    @method('delete')
                                    <div class="dropdown-content">
                                        <button type="submit">Supprimer</button>
                                        <a href="{{ route('distinations.edit', $distination->id) }}">Modifier</a>
                                    </div>
                                </form>
                                <span class="dropbtn"><img style="width:30px" src="trois-points (1).png"  alt="img"></span>
                            </div>
                        </div>
                        </div>
                    </div>

            @endforeach
        </div>
        </div>




    <a class="btn btn-primary add-button" href="{{route("distinations.create")}}">+</a>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

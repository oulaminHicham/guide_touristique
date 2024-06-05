<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .circuit-card {
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        .circuit-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .circuit-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            border: none;
            background: transparent;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a,
        .dropdown-content button {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border: none;
            background: none;
        }

        .dropdown-content a:hover,
        .dropdown-content button:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="content">
        {{-- <ContentHeader /> --}}
        <div class="content--header">
            <h1 class="header--title">Panel admin</h1>
            <div class="header--activity">
                <div class="search-box">
                    <input type="text" placeholder="Search" aria-label="Search input field" />
                    <i class="fas fa-search icon"></i>
                </div>
            </div>
        </div>

        {{-- <Card/> --}}
        <?php
              $cards = [
[
    'id' => 1,
    'titre' => 'Total No. of guid',
    'total' => '25.1K',
    'icon' => 'fa-solid fa-cart-shopping', // FontAwesome icon
],
[
    'id' => 2,
    'titre' => 'Total No. of circuit',
    'total' => '3.5M',
    'icon' => 'fa-solid fa-file-excel', // FontAwesome icon
],
[
    'id' => 3,
    'titre' => 'Total No. of client',
    'total' => '43.5K',
    'icon' => 'fa-solid fa-users', // FontAwesome icon
],
];
            ?>
            <div class="card--content">
                @foreach ($cards as $card)
                    <div class="card">
                        <div class="card--titre">
                            {{ $card['titre'] }}
                            <span class="card--icon"><i class="{{ $card['icon'] }}"></i></span>
                        </div>
                        <div class="card--total">
                            {{ $card['total'] }}
                            <span class="icon--TrendingUp"><i class="fa-solid fa-arrow-up"></i></span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
            <div class="row justify-content-between" style="margin-top: 43px; display: flex;
                justify-content: space-around;">
                 @foreach ($cirquits as $cirquit)
                    <div class="col-lg-2 mt-3" style="width: 321px;">
                        <div class="circuit-card">
                            <img src="{{ asset('images/'.$cirquit['photos']) }}" class="card-img-top circuit-img" alt="{{ $cirquit['descreption'] }}">
                            <div class="card-body d-flex justify-content-between">
                                <div>

                                    <h5 style="    padding: 20px;" class="card-title circuit-title">{{ $cirquit['descreption'] }}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- les 3 guides  -->
            <div style="background: #eeeeee;
    padding: 35px;
    border-radius: 32px;">
                <h1>les Guides :</h1>

                        @foreach($users as $user)
                            <div style="display: flex; justify-content: space-between;     padding: 20px;
    border: solid 1px #dee2e6;
    border-radius: 28px; margin-top:10px ; background: white;">
                                    <img src="{{ asset('images/' . $user['photo']) }}" alt="{{ $user['name'] }}" />
                                    <h4>{{ $user['name'] }} {{ $user['prenom'] }}</h4>
                                    <a href="{{ route('guides.show' , $user->id) }}"><i style=" cursor: pointer;" class="fa-solid fa-angles-right"></i></a>
                            </div>
                        @endforeach
                    </div>
            @endsection
</body>
</html>

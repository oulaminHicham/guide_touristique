<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            @endsection
</body>
</html>

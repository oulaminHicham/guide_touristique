<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\CirquitController;
use App\Http\Controllers\DistinationController;
>>>>>>> b1912c060d00ee68914cd134ec05ea2486399020
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
=======
Route::resource("distinations",DistinationController::class);
>>>>>>> b1912c060d00ee68914cd134ec05ea2486399020

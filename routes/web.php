<?php

use App\Http\Controllers\CirquitController;
use App\Http\Controllers\DistinationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("distinations",DistinationController::class);

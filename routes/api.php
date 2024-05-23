<?php

use App\Http\Controllers\DistinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/distinations', [DistinationController::class , 'index']);
// http://127.0.0.1:8000/api/distinations


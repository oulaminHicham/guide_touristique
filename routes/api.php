<?php

use App\Http\Controllers\DistinationController;
use App\Http\Controllers\GuideController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Guid\Guid;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// to instal api => php artisan install:api
Route::get('/distinations', [DistinationController::class , 'index']);
// http://127.0.0.1:8000/api/distinations


// Guid Apis:
Route::get('/guides', [GuideController::class , 'index']);
Route::post('/guides', [GuideController::class , 'store']);
Route::put('/guides/{id}', [GuideController::class , 'update']);
Route::delete('/guides/{id}', [GuideController::class , 'destroy']);

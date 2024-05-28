<?php

use App\Http\Controllers\CircuitController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resourceful routes for guides
Route::post('/guides/{id}/accept', [GuideController::class, 'acceptGuide'])->name('guides.acceptGuide');
Route::resource('guides', GuideController::class);
Route::resource('circuits',CircuitController::class);



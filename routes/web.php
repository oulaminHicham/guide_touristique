<?php

use App\Http\Controllers\CircuitController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guides', [GuideController::class, 'guidesList'])->name('guides.guidesList');
Route::get('/circuits', [CircuitController::class, 'circuitsList']);

// Resourceful routes for guides

Route::resource('guides', GuideController::class);
Route::resource('circuits',CircuitController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
});
// ->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

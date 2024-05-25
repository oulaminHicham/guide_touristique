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

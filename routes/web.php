<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CircuitController;
use App\Http\Controllers\DistinationController;
use App\Http\Controllers\GuideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

// Resourceful routes for guides
// Route::post('/guides/{id}/accept', [GuideController::class, 'acceptGuide'])->name('guides.acceptGuide');

Route::resource("destinations",DistinationController::class);

Route::resource("reservation",ReservationController::class);

Route::resource("guides",GuideController::class);

Route::resource("circuits",CircuitController::class);

Route::get('/clients', [ClientController::class, 'aficher'])->name('client.aficherClient');
Route::get('/clients/add', [ClientController::class, 'add'])->name('client.add');
Route::post('/clients', [ClientController::class, 'Ajouter'])->name('client.store');
Route::get('/clients/{id}', [ClientController::class, 'ditail'])->name('client.detail');
Route::get('/clients/edit/{id}', [ClientController::class, 'edite'])->name('client.edit');
Route::put('/clients/{id}', [ClientController::class, 'modifier'])->name('client.update');
Route::delete('/clients/{id}', [ClientController::class, 'supprimer'])->name('client.delete');


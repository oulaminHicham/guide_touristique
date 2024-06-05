<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CirquitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DistinationController;
use App\Http\Controllers\GuideeController;
use App\Http\Controllers\ReservationFController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

//     ######             DISTINATION DATA API           #########
Route::get('/distinationData', [DistinationController::class , 'distinationData']);
//     ######             CIRQUIT API           #########
Route::apiResource("/cirquits" , CirquitController::class);
//     ######             GUIDE APIS            #########
Route::apiResource('/guides' , GuideeController::class);
//     ######             CLIENT APIS            #########
Route::apiResource("/clients",ClientController::class);
//     ######             reservation apis            #########
Route::apiResource('reservations' , ReservationFController::class);
//     ######             LOGIN            #########
Route::post('/login' , [AuthController::class , 'login']);

Route::post('/logout' , [AuthController::class , 'logout']);
//   get the cirquit of somme guide
// Route::get('/guides/{id}' , [GuideeController::class ,'getCirquits']);

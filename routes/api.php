<?php

use App\Http\Controllers\CirquitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DistinationController;
use App\Http\Controllers\GuideController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//     ######             DISTINATION DATA API           #########
Route::get('/distinationData', [DistinationController::class , 'distinationData']);// http://127.0.0.1:8000/api/distinationData
//     ######             CIRQUIT API           #########
Route::get("/cirquits" , [CirquitController::class , "index"]);
//     ######             GUIDE APIS            #########

// Route::get('/guides', [GuideController::class , 'index']);
// Route::post('/guides', [GuideController::class , 'store']);
// Route::put('/guides/{id}', [GuideController::class , 'update']);
// Route::delete('/guides/{id}', [GuideController::class , 'destroy']);
Route::apiResource('/guides' , GuideController::class);
//     ######             CLIENT APIS            #########
Route::apiResource("/clients",ClientController::class);

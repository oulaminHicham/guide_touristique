<?php

use App\Http\Controllers\CirquitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DistinationController;
use App\Http\Controllers\GuideeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//     ######             DISTINATION DATA API           #########
Route::get('/distinationData', [DistinationController::class , 'distinationData']);
//     ######             CIRQUIT API           #########
Route::apiResource("/cirquits" , CirquitController::class);
//     ######             GUIDE APIS            #########
// Route::apiResource('/guides' , GuideController::class);
Route::apiResource('/guides' , GuideeController::class);
//     ######             CLIENT APIS            #########
Route::apiResource("/clients",ClientController::class);

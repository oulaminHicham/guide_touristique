<?php

use App\Http\Controllers\CirquitController;
use App\Http\Controllers\DistinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/distinationData', [DistinationController::class , 'distinationData']);
// http://127.0.0.1:8000/api/distinationData

Route::get("/cirquits" , [CirquitController::class , "index"]);

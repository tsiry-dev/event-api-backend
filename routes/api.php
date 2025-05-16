<?php

use App\Http\Controllers\TechController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/techs', [TechController::class, 'index']);
Route::get('/techs/{id}', [TechController::class, 'show']);
Route::post('/techs', [TechController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


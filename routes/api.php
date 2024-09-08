<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/foods', [ApiController::class, 'index']);
Route::get('/foods/{id}', [ApiController::class, 'show']);
Route::post('/foods', [ApiController::class, 'store']);
Route::put('/foods/{id}', [ApiController::class, 'update']);
Route::delete('/foods/{id}', [ApiController::class, 'destroy']);

<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [BlogController::class, 'index']);
Route::post('/posts', [BlogController::class, 'store']);
Route::get('/posts/{id}', [BlogController::class, 'show']);
Route::put('/posts/{id}', [BlogController::class, 'update']);
Route::delete('/posts/{id}', [BlogController::class, 'destroy']);
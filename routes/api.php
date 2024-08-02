<?php

use App\Http\Controllers\Api\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cars', [CarController::class, 'index'])->name('index');

Route::get('/cars/{car}', [CarController::class, 'show'])->name('show');

Route::post('/cars', [CarController::class, 'store'])->name('store');

Route::put('/cars/{car}', [CarController::class, 'update'])->name('update');

Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('destroy');

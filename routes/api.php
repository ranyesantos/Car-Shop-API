<?php

use App\Http\Controllers\Api\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(CarController::class)->group(function (){

    Route::get('/cars', 'index')->name('cars-index'); //METHOD:POST, URL EXAMPLE: /api/cars

    Route::get('/cars/{car}','show')->name('cars-show'); //METHOD:GET, URL EXAMPLE: /api/cars/66ad31ab6a84a29f5e027b62

    Route::post('/cars', 'store')->name('cars-store'); //METHOD:POST, URL EXAMPLE: /api/cars

    Route::put('/cars/{car}', 'update')->name('cars-update'); //METHOD:POST, URL EXAMPLE: /api/cars;

    Route::delete('/cars/{car}', 'destroy')->name('cars-destroy'); //METHOD: DELETE, URL EXAMPLE: /api/cars/66ad31ab6a84a29f5e027b62

});

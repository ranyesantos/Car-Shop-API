<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'cars' => $cars,
        ]);
    }
}

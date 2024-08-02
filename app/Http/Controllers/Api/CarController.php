<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(): JsonResponse
    {
        $cars = Car::orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'cars' => $cars,
        ]);

    }

    public function show(Car $car): JsonResponse
    {

        return response()->json([
            'status' => true,
            'car' => $car,
        ]);

    }

    public function store(Request $request): JsonResponse
    {

        try {

            $car = Car::create([
                'brand' => $request->brand,
                'model' => $request->model,
                'value' => $request->value,
                'license' => $request->license,
                'color' => $request->color
            ]);

            return response()->json([
                'status' => true,
                'car' => $car,
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "erro ao adicionar",
            ]);

        }

    }

    public function update(Request $request, Car $car): JsonResponse
    {

        try {

            $car->update([
                'brand' => $request->brand,
                'model' => $request->model,
                'value' => $request->value,
                'license' => $request->license,
                'color' => $request->color
            ]);

            return response()->json([
                'status' => true,
                'car' => $car,
            ], 201);

        } catch (Exception $e){

            return response()->json([
                'status' => false,
                'message' => "erro ao editar carro",
            ]);

        }

    }

    public function destroy(Car $car): JsonResponse
    {
        try {

            $car->delete();

            return response()->json([
                'status' => false,
                'message' => "apagado com sucesso",
            ]);

        } catch (Exception $e) {

            return response()->json([

                'status' => false,
                'message' => "erro ao deletar carro",
            ]);

        }
    }
}



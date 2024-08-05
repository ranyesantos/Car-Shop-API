<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Exception;
use Illuminate\Http\JsonResponse;

class CarController extends Controller
{
    /**
     * return of the list of the all registered cars
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $cars = Car::orderBy('id', 'DESC')->get();
        try {

            return response()->json([
                'status' => true,
                'cars' => $cars,
            ]);

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "erro ao retornar listagem",
            ],500);

        }
    }

    /**
     * return data of a especific car
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Car $car): JsonResponse
    {
        try {

            return response()->json([
                'status' => true,
                'car' => $car,
            ]);

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "erro ao retornar dados",
            ],500);

        }
    }

    /**
     * registering a new car
     * @param \App\Http\Requests\CarRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CarRequest $request): JsonResponse
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
            ]);

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "erro ao adicionar",
            ],500);

        }

    }

    /**
     * updates data of a especific car
     * @param \App\Http\Requests\CarRequest $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CarRequest $request, Car $car): JsonResponse
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

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "erro ao atualizar dados do carro",
            ],500);

        }
    }

    /**
     * delete a especific car
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Car $car): JsonResponse
    {
        try {

            $car->delete();

            return response()->json([
                'status' => true,
                'message' => "apagado com sucesso",
            ]);

        } catch (Exception $e) {

            return response()->json([

                'status' => false,
                'message' => "erro ao deletar carro",
            ],500);

        }
    }
}



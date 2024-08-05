<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]));
    }


    public function rules(): array
    {
        $car = $this->route('car');
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'value' => 'required|integer',
            'license' => 'required|string|size:7|unique:cars,license' . ($car ? $car->id : null),
            'color' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'brand.required' => 'O campo "marca" é obrigatório',
            'brand.max' => 'O campo "marca" não pode ter mais que 255 caracteres',

            'model.required' => 'O campo "modelo" é obrigatório',
            'model.max' => 'O campo "modelo" não pode ter mais que 255 caracteres',

            'value.required' => 'O campo "valor" é obrigatório',
            'value.max' => 'O campo "valor" não pode ter mais que 255 caracteres',

            'license.required' => 'O campo "placa" é obrigatório',
            'license.size' => 'O campo "placa" deve ter 7 caracteres',
            'license.unique' => 'Um veículo com esta placa já está cadastrado',

            'color.required' => 'O campo "cor" é obrigatório',
            'color.max' => 'O campo "cor" não pode ter mais que 255 caracteres',
        ];
    }
}

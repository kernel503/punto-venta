<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PutDetalleProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:detalle_producto,id',
            'producto_id' => 'required|exists:producto,id',
            'precio_unitario' => 'required|numeric',
            'cantidad_disponible' => 'required|integer',
            'detalle' => 'required',
            'ubicacion' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'id.required' => 'Debe incluir la PK',
            'id.exists' => 'La PK no existe',
            'producto_id.required' => 'Campo requerido FK',
            'producto_id.exists' => 'Debe ser la llave primaria de la tabla producto',
            'precio_unitario.required' => 'El precio unitario es necesario',
            'precio_unitario.numeric' => 'El precio unitario debe ser númerico',
            'cantidad_disponible.required' => 'La cantidad es necesaria',
            'cantidad_disponible.integer' => 'La cantidad debe ser un entero',
            'detalle.required' => 'El campo detalle es necesario',
            'ubicacion.required' => 'El campo ubicacion es necesario',
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error' => $validator->errors()], 422));
    }
}

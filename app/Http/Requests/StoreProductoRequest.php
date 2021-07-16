<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreProductoRequest extends FormRequest
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
            'img_url' => 'required',
            'nombre' => 'required',
            'grupo_inventario' => 'required',
            'descripcion' => 'string|nullable'
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
            'img_url.required' => 'Campo requerido para la imagen',
            'nombre.required' => 'Nombre del producto requerido',
            'grupo_inventario.required' => 'El campo grupo es necesario',
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error' => $validator->errors()], 422));
    }
}

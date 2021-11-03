<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonasUpdateRequest extends FormRequest
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
            'cedula' => 'required|unique:personas,cedula,' . $this->persona,
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'telefono'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cedula.required' => 'El valor de la cédula es obligatorio',
            'cedula.unique'   => 'Ya existe una persona con este número de cédula',
            'nombre.required' => 'El campo nombre es obligatorio',
            'apellido.required' => 'El campo apellido es obligatorio',
            'direccion.required' => 'El campo direccion es obligatorio',
            'telefono.required' => 'El campo telefono es obligatorio',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class proyectos_articulosRequest extends FormRequest
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
            
            /*'Grupo_Investigacion' => 'required',
            'DescripcionProyecto_Articulo' => 'required',
            'CoordinadorProyecto_Articulo' => 'required',*/
        ];
    }
}

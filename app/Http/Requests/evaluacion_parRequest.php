<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class evaluacion_parRequest extends FormRequest
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
            
            
            'produccion' => 'required|numeric',
            'justificacion_produccion' => 'required|max:255',
            'calidad_proyecto' => 'required|numeric',
            'justificacion_calidad_proyecto' => 'required|max:255',
            'impacto_potencial' => 'required|numeric',
            'justificacion_impacto_potencial' => 'required|max:255',
            'capacidad_desarrollo_proyecto' => 'required|numeric',
            'justificacion_capacidad_desarrollo_proyecto'=>'required|max:255',
            'presupuesto' => 'required|numeric',
            'justificacion_presupuesto' => 'required|max:255',
            'trabajo_colaborativo' => 'required|numeric',
            'justificacion_trabajo_colaborativo' => 'required|max:255',
            'formacion_recurso_humano' => 'required|numeric',
            'justificacion_formacion_recurso_humano' => 'required|max:255',
            'concepto_final' => 'required|max:1500',
         

        ];
    }
}

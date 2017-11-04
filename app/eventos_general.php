<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos_general extends Model
{
    

    protected $table = 'eventos_general';
    protected $guarded = ['id'];



public function ciudades($query)
{
 return $this->hasMany('App\municipios');



}

public function paises()
{
 return $this->hasMany('App\paises');

}


public function usuario()
{
 return $this->hasMany('App\User');

}

   public function scopeexceleg($query)
    {
          
            $query=\DB::table('eventos_general')
            ->join('municipios', 'eventos_general.id_ciudad', '=', 'municipios.id')
            ->join('paises', 'eventos_general.Pais', '=', 'paises.id')
            ->join('departamento', 'eventos_general.id_departamento', '=', 'departamento.id')
            ->join('users', 'eventos_general.id_user', '=', 'users.id')
            ->join('funcionarios', 'eventos_general.Persona_Encargada_difusion', '=', 'funcionarios.id')
            ->join('evento_areatematica', 'eventos_general.id', '=', 'evento_areatematica.id_evento')
            ->join('participantes', 'eventos_general.id', '=', 'participantes.id_evento')
            ->join('tiquetes', 'eventos_general.id', '=', 'tiquetes.id_evento')
            ->select('municipios.*', 'paises.*', 'departamento.*', 'users.name', 'users.email', 'funcionarios.*','participantes.*','tiquetes.*','eventos_general.*','evento_areatematica.id_areatematica')->get(); 

            return $query;
        }
 	

}



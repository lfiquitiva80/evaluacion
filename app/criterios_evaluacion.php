<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class criterios_evaluacion extends Model
{
    protected $table = 'criterios_evaluacion';
    protected $guarded = ['id'];


    public function proyectos_articulos()
{	
	return $this->belongsTo(proyectos_articulos::class,'id_proyectos_articulos');
}

}





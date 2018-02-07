<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class proyectos_articulos extends Model
{
    protected $table = 'proyectos_articulos';	
	protected $guarded = ['id'];


public function getLeonidasAttribute()
{
     return "{$this->id} {$this->DescripcionProyecto_Articulo}";
}

public function setDescripcionProyecto_ArticuloAttribute($value)
    {
        $this->attributes['DescripcionProyecto_Articulo'] = strtoupper($value);
    }

public function criterios_evaluacion()
    {
    	return $this->belongsTo(criterios_evaluacion::class,'id');
    } 

public function evaluadores()
    {
    	return $this->belongsTo(evaluadores::class,'id_evaluador');
    } 

}

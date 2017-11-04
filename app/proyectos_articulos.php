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


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluadores extends Model
{
    protected $table = 'evaluadores';	
	protected $guarded = ['id'];



	   public function proyectos_articulos()
{	
	return $this->belongsTo(proyectos_articulos::class,'id_evaluador');
}

	   public function tipodocumento()
{	
	return $this->belongsTo(TipoDocumento::class,'TipoDocumento');
}
}

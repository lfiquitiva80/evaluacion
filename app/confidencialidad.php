<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confidencialidad extends Model
{
   protected $table = 'confidencialidad';
    protected $guarded = ['id'];


    	   public function proyectos_articulos()
{	
	return $this->belongsTo(proyectos_articulos::class, 'id');
}
}

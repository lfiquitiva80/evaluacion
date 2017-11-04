<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    protected $table = 'paises';
	protected $guarded = ['id'];


 public function eventos_general()
    {
        return $this->belongsTo('App\eventos_general');
    }

   
}

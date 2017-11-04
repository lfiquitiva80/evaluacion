<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $table = 'municipios';
	protected $guarded = ['id'];


      public function eventos()
    {
        return $this->belongsTo('App\eventos_general');
    }
}

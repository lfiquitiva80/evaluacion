<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamiento_carta extends Model
{
    protected $table = 'tratamiento_carta';	
    protected $guarded = ['id'];


     public function users()
    {
        return $this->belongsTo(User::class);
    }
}

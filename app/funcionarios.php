<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{

  protected $table = 'funcionarios';		
  protected $guarded = ['id'];
}

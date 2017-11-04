<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participantesevento extends Model
{
    protected $table = 'participantesevento';
     protected $guarded = ['id'];


 public function scopepdf($query)
    {
          
            $query=\DB::table('participantesevento')
            ->join('eventos_general', 'participantesevento.id_evento', '=', 'evento_general.id')
            ->join('planilla', 'participantesevento.id_planilla', '=', 'planilla.id')
            ->select('participantes.*', 'eventos_general.NombredelEvento', 'planilla.*')->get(); 

            return $query;
        }
 	


}

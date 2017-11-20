@component('mail::message')

Bogotá, D.C., <?php echo date("d") . " del " . date("M") . " de " . date("Y");?>
<br><p align="justify">

Respetado <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?>  
<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b>


Esperamos contar con su experiencia en otras evaluaciones.



<br><p align="justify">CLARA INÉS PARDO MARTÍNEZ
<br><p align="justify">Directora Ejecutiva
<br><p align="justify">Observatorio Colombiano de Ciencia y Tecnología

Gracias,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')

Un cordial saludo

Sr@ {{$datos->NombresApellidos}}

Agradecemos su asistencia al evento <?php $comment = App\eventos_general::find($datos->id_evento); echo $comment->NombredelEvento; ?> , 


<?php  
$url = route('certificado', $datos->id) ?>

@component('mail::button', ['url' => $url])
Descargar PDF
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

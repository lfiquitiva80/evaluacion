@component('mail::message')


<?php echo $Contenido; ?>

Gracias,<br>
{{ config('app.name') }}
@endcomponent

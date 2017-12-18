@component('mail::message')


Muchas gracias por Aceptar la invitación para el proyecto "{{$DescripcionProyecto_Articulo}}", puede ingresar a la pagina del OCyT, con los siguientes datos:


A continuación, podrá ingresar a la plataforma para gestión de evaluaciones del OCyT a través del siguiente usuario =   <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->email;
          ?>


Si ya tiene contraseña asignada por favor dar click al siguiente boton verde.

@component('mail::button', ['url' => 'http://evaluator.ocyt.org.co/', 'color' => 'green'])
Ingresar a la página de evaluación.
@endcomponent          
          

<?php $url = asset('password/reset');?>

Si no tiene contraseña por favor dar click en el boton azul

@component('mail::button', ['url' => $url, 'color' => 'blue'])
Ingresar para confirmar contraseña.
@endcomponent

Adicionalmente, en la plataforma en la parte superior derecha en el icono de ayuda podrá descargar el manual para evaluadores, en caso de que tenga inquietudes sobre la plataforma. 

Gracias,<br>
{{ config('app.name') }}
@endcomponent

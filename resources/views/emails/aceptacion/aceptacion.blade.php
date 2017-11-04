@component('mail::message')


Muchas gracias por Aceptar la invitación para el proyecto "{{$DescripcionProyecto_Articulo}}", puede ingresar a la pagina del OCyT, con los siguientes datos:


User =   <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
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

Thanks,<br>
{{ config('app.name') }}
@endcomponent


@component('mail::message')

Gracias por participar en esta evaluación.



@component('mail::button', ['url' => 'www.ocyt.org.co'],'color' =>'green')
Ingresar a nuestra página.
@endcomponent



Gracias,<br>
{{ config('app.name') }}
@endcomponent
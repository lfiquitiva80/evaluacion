@component('mail::message')




@component('mail::button', ['url' => 'http://localhost:8000/eventos_general'])

@endcomponent

@component('mail::panel')
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolores sunt consequatur cupiditate incidunt optio expedita nihil illo quaerat voluptates nostrum sed placeat voluptatem accusamus, eaque nisi quae error et?

@endcomponent



Thanks,<br>
{{ config('app.name') }}
<br>{{ Auth::user()->name }} 
<br>{{ Auth::user()->email}}

@endcomponent

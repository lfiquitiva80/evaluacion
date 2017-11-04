

  <p></p>
<div class="alert alert-success" role="alert">@if(Session::has('msjevento'))
{{Session::get('msjevento')}}
@endif</div>
<div class="container">

<div class="panel panel-default">
  <div class="panel-body">
  
  <ul class="nav nav-pills nav-justified" >
   <li><a  href="{{action('principalController@info')}}">INFORMACION BASICA</a></li>
    <li><a  href="{{action('principalController@atematica')}}">AREA TEMATICA</a></li>
    <li><a  href="{{action('principalController@participantes')}}">PARTICIPANTES</a></li>
     <li><a  href="{{action('principalController@ticket')}}">TIQUETES</a></li>
     <li><a  href="http://192.168.15.7:809/reserva/web/day.php?" target="_blank">RESERVA MULTIMEDIA</a></li>
   <!--  <li><a  href="{{action('principalController@email')}}">CORREO</a></li>-->
     
  </ul>

</div>
</div>
</div>

  <script src="/js/app.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/vue.min.js"></script>
    <script src="/js/vue.js"></script>
 
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

@include('adminlte::layouts.menuevento')


 <div class="panel-body">
  
<div class="container">


<div class="panel panel-default">
<h4><b><center>Los Eventos de:  {{ Auth::user()->name }}  </h4></b></center>


 @if(Auth::user()->Rol===0)
  <?php  
      $id_user=Auth::user()->id;

  $evento = DB::table('eventos_general')->where('id_user',$id_user)->orderBy('updated_at', 'desc')->get(); 
     ?>
@else
 <?php  
      
$evento = DB::table('eventos_general')->orderBy('updated_at', 'desc')->get(); 
     ?>

 @endif    


        
</form>

<a href="{{ action('principalController@create') }}" class="btn btn-primary">Registrar un Nuevo Evento</a>

<a href="{{ route('excel.index') }}" class="btn btn-success">Descargar en excel</a>

<center>


@if(Auth::user()->Rol===0)
<?php 
   $id_user=Auth::user()->id;
$total = DB::table('eventos_general')->where('id_user',$id_user)->count();
echo "Total de Eventos :".$total;
 ?></center>
@else
<?php 
   $id_user=Auth::user()->id;
$total = DB::table('eventos_general')->count();
echo "Total de Eventos :".$total;
 ?></center>
 @endif



<p>

<table class="table table-hover" >
  <thead>
    <tr>
      <th>id</th>
<!--<th>Tema</th>-->
<th><center>NombredelEvento</center></th>
<!--<th>Lugar</th>
<th>id_ciudad</th>
<th>Ciudad_extranjero</th>
<th>Fecha_inicial</th>
<th>Fecha_Final</th>
<th>Organizador</th>
<th>Pais</th>
<th>Persona_Encargada_difusion</th>
<th>Usuario</th>
<!~~<th>Fotos_enviadas</th>
<th>Fotos_recibidas</th>~~>
<th>Puntos_claves</th>-->
<th>Editar Evento</th>
<th>Correo</th>
<th>Editar Temática</th>
<th>Editar Participantes</th>
<th>Editar Tiquetes</th>



    
    </tr>
  </thead>
  <tbody>

  @foreach($evento as $row)
    <tr>

          <td>{{$row->id}}</td>
          <!--<td>{{$row->Tema}}</td>-->
         <td><center>{{$row->NombredelEvento}}</center></td>
          <!--<td>{{$row->Lugar}}</td>
         
          <td>/<?php $comment = App\municipios::find($row->id_ciudad); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero}}</td>
          <td>{{$row->Fecha_inicial}}</td>
          <td>{{$row->Fecha_Final}}</td>
          <td>{{$row->Organizador}}</td>
          <!~~<td>{{$row->Pais}}</td>~~>
<td><?php $comment = App\paises::find($row->Pais); echo $comment->Pais; ?> </td>
          <!~~<td>{{$row->Persona_Encargada_difusion}}</td>~~>
       

         <td><?php $comment = App\funcionarios::find($row->Persona_Encargada_difusion); echo $comment->NombresApellidos; ?> </td>

          <td>{{$row->id_user}}</td>
          
          <td>{{$row->Puntos_claves}}</td>
-->
       




      

 
  <!--  <td><center><a href="{{ $url = route('eventos_general.edit', $row->id) }}" class="glyphicon glyphicon-envelope" aria-hidden="true"> </a></center></td>-->

     <td><center><a href="{{$url = route('eventos_general.edit', $row->id) }}" class="glyphicon glyphicon-eye-open" aria-hidden="true"> </a></center></td>

     <td><center><a href="{{action('emailController@edit', $row->id)}}" class="glyphicon glyphicon-envelope" aria-hidden="true"> </a></center></td>

     <td><center><a href="{{route('evento_areatematica.show', $row->id)}}" class="glyphicon glyphicon-home" aria-hidden="true"></a></center></td>
    
    <td><center><a href="{{route('participantes.show', $row->id)}}" class="glyphicon glyphicon-user" aria-hidden="true"></a></center></td>

    <td><center><a href="{{route('tiquetes.show', $row->id)}}" class="glyphicon glyphicon-plane" aria-hidden="true"></a></center></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->
  
      

              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>

</div>
</div>




@endsection


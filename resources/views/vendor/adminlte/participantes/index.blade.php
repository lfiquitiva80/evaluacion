@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<h4><b><center>REGISTRO DE LOS PARTICIPANTES</h4></b></center>


<a href="{{ $url = route('participantes.create') }}" class="btn btn-primary">Registar Nuevo Participante</a>
<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
<th>Id_Evento</th>
<th>Participante</th>
<th>Tipo de Participación</th>
<th>Requiere_ticket?</th>
<!--<th>id_ticket</th>-->
<!--<th>Fecha_hora==> IDA</th>
<th>Fecha_hora<== VUELTA</th>-->
<th>Requiere Hotel?</th>
<th>Edición</th>



    
    </tr>
  </thead>
  <tbody>

  @foreach($participante as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td><?php $comment = App\funcionarios::find($row->id_nombres); echo $comment->NombresApellidos; ?> </td>
          <td>{{$row->id_tipodeParticipacion}}</td>
          <td>@if($row->Requiere_tiquetes_avion===1) Si @else No @endif</td>
         
         
          <td>@if($row->Requiere_hotel===1)Si @else No @endif</td>
          

              
 
        <td><a href="{{ $url = route('participantes.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>





@endsection


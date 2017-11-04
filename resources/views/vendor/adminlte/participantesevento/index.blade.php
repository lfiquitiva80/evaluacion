@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">



<h4><b><center>REGISTRO DE LOS PARTICIPANTS DEL EVENTO <br><i> </h4></b></i></center>


<a href="{{ $url = route('participantesevento.create') }}" class="btn btn-primary">Registar Nuevo Participante</a>
<p>

<center>Total de <b>{{$participantesevento->total() }}</b> Participantes de este Evento</center>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#" >Separated link</a></li>
  </ul>
</div>




{!! Form::open(['route' => 'participantesevento.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="name" id="name">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

 
{!! Form::close() !!}

<table class="table table-hover"  id="Eventos">
  <thead>
    <tr>
      
      <th>id</th>
      <!--<th>Id_Evento</th>-->
      <th>Documento de Identidad</th>
      <th>Plantilla</th>
      <th>NombresApellidos</th>
      <th>Edición</th>
      <!--<th>UnidadAcademica</th>
      <th>Disciplina</th>
      <th>GrupodeInvestigacion</th>
      <th>LineasdeInvestigacions</th>
      <th>TelefonoFijo</th>
      <th>TelefonoMovil</th>
      <!--~~><th>Correo</th>
      <th>Cargo</th>
      <th>Asistio</th>-->
      <!--<th>Fecha_Asistencia</th>-->
      



    
    </tr>
  </thead>
  <tbody>

  @foreach($participantesevento as $row)
    <tr>
           
       

          <td>{{$row->id}}</td>
          <!--<td>{{$row->id_evento}}</td>-->
          <td>{{$row->Documento}}</td>
          <td><?php $comment = App\plantilla::find($row->id_planilla); echo $comment->NombrePlantilla; ?></td>
          <td>{{$row->NombresApellidos}}</td>
          <!--<td>{{$row->UnidadAcademica}}</td>
          <td>{{$row->Disciplina}}</td>
          <td>{{$row->GrupodeInvestigacion}}</td>
          <td>{{$row->LineasdeInvestigacion }}</td>
          <td>{{$row->TelefonoFijo}}</td>
          <td>{{$row->TelefonoMovil}}</td>
          <td>{{$row->Correo}}</td>
          <td>{{$row->Cargo}}</td>
          <td>@if($row->Asistio===1) Si @else No @endif</td>-->
          <!--<td>{{$row->Fecha_Asistencia}}</td>         -->
        <td><a href="{{ $url = route('participantesevento.edit', $row->id) }}" class="glyphicon glyphicon-edit" aria-hidden="true" title="Editar"></a>
         <a href="{{ $url = route('certificado', $row->id) }}" class="btn btn-outline-danger" target="_blank" title="Certificado PDF">PDF</a>

     

        <a href="{{ $url = route('correoparticipantes', $row->id) }}" class="glyphicon glyphicon-envelope" aria-hidden="true" title="Enviar Correo">new</a></td>

          </td>

          
          
          

              
 
      <!--  <td><a href="{{ $url = route('participantesevento.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
      -->  <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>


{{ $participantesevento->links() }}



</div>







@endsection


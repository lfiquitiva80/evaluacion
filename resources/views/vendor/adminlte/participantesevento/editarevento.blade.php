@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

  <?php  
  $id_planilla = DB::table('plantilla')->get(); 
  ?>

<div class="container">
<h4><b><center>REGISTRO DE LOS PARTICIPANTS DEL EVENTO <br><i> <?php $comment = App\eventos_general::find($idregevento); echo $comment->NombredelEvento; ?></h4></b></i></center>

          

<a href="{{ $url = route('participantesevento.create') }}" class="btn btn-primary">Registar Nuevo Participante</a>
<p>

<center>Total de <b>{{$editarevento->total() }}</b> Participantes de este Evento</center>


{!! Form::open(['route' => ['actualizarplantilla',$idregevento],'method'=>'GET', 'Class'=>'navbar-form navbar-light']) !!}

<div class="form-group">
    <label for="">Elegir Plantilla</label>
<select name="id_planilla" id="id_planilla" class="form-control" required="required" placeholder="Seleccione un funcionario">
    
  @foreach($id_planilla as $row)
  <option value="{{$row->id}}">{{$row->NombrePlantilla}}</option>
  @endforeach
</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}



{!! Form::open(['route' => 'participantesevento.index','method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
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

  @foreach($editarevento as $row)
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
           <a href="{{ $url = route('certificado', $row->id) }}" class="btn btn-outline-danger" target="_blank" title="Certificado">PDF</a>
          <a href="{{ $url = route('correoparticipantes', $row->id) }}" class="glyphicon glyphicon-envelope" aria-hidden="true" title="Enviar Correo">new</a>
         
          
          

              
 
      <!--  <td><a href="{{ $url = route('participantesevento.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
      -->  <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>


{{ $editarevento->links() }}



</div>


@endsection


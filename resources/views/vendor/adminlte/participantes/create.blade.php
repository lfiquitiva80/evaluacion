
@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('participantes.index') }}" class="btn btn-primary" >Regresar</a><p>
{!! Form::open(['route' => 'participantes.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR FORMULARIO DE PARTICIPANTES</legend>

	<div class="form-group">
		<label for="">Id</label>
		<input type="text" class="form-control" id="" placeholder="Id">
	</div>

	<?php  
				$id_evento = DB::table('eventos_general')->get();	
				?>

	<div class="form-group">
		<label for="">Id_Evento:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione un funcionario">
		
  @foreach($id_evento as $row)
	<option value="{{$row->id}}">{{$row->id}}</option>
	@endforeach
</select>
</div>


		<?php  
				$funcionario = DB::table('funcionarios')->get();	
				?>

	<div class="form-group">
		<label for="">Nombre Participante:</label>
<select name="id_nombres" id="id_nombres" class="form-control" required="required" placeholder="Seleccione un funcionario">
		
  @foreach($funcionario as $row)
	<option value="{{$row->id}}">{{$row->NombresApellidos}}</option>
	@endforeach
</select>
</div>

	<?php  
				$tipoParticipacion = DB::table('tipo_participacion')->get();	
				?>

	<div class="form-group">
		<label for="">Tipo de Participacion:</label>
<select name="id_tipodeParticipacion" id="id_tipodeParticipacion" class="form-control" required="required" placeholder="Seleccione el Tipo">
		
  @foreach($tipoParticipacion as $row)
	<option value="{{$row->id}}">{{$row->Tipos}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
		<label for="">Requiere_tiquetes_avion?</label>
		<select name="Requiere_tiquetes_avion" id="Requiere_tiquetes_avion" class="form-control" required="required">
		<option value="1">Si</option>
		<option value="0">No</option>
	</select>

	</div>





	



	<div class="form-group">
		<label for="">Fecha y Hora =>IDA</label>
		<input type="datetime-local" class="form-control" name="Fecha_hora_ida" id="Fecha_hora_ida" placeholder="Input field">
	</div>


<div class="form-group">
		<label for="">Fecha y Hora <== VUELTA</label>
		<input type="datetime-local" class="form-control" id="Fecha_hora_vuelta" name="Fecha_hora_vuelta" placeholder="Input field">
	</div>

<div class="form-group">
		<label for="">Requiere Hotel</label>
		<select name="Requiere_hotel" id="Requiere_hotel" class="form-control" required="required">
		<option value="1">Si</option>
		<option value="0">No</option>
	</select>

	</div>


	</div>

	

	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


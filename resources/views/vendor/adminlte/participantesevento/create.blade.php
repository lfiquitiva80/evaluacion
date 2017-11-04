
@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('participantesevento.index') }}" class="btn btn-primary" >Regresar</a><p>


{!! Form::open(['route' => 'participantesevento.store', 'method'=>'POST']) !!}
	<legend>CREAR FORMULARIO DE PARTICIPANTES POR EVENTO</legend>

	<div class="form-group">
		<label for="">Id</label>
		<input type="text" class="form-control" id="" placeholder="Id" disabled>
	</div>

				<?php  
				$id_evento = DB::table('eventos_general')->get();	
				?>

				<?php  
				$id_planilla = DB::table('plantilla')->get();	
				?>

	<div class="form-group">
		<label for="">Id_Evento:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione un funcionario">
		
  @foreach($id_evento as $row)
	<option value="{{$row->id}}">{{$row->NombredelEvento}}</option>
	@endforeach
</select>
</div>


<div class="form-group">
		<label for="">Elegir Plantilla</label>
<select name="id_planilla" id="id_planilla" class="form-control" required="required" placeholder="Seleccione un funcionario">
		
  @foreach($id_planilla as $row)
	<option value="{{$row->id}}">{{$row->NombrePlantilla}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
		<label for="">Documento</label>
		<input type="text" class="form-control" id="Documento"  name="Documento" 
		placeholder="Documento" required>
	</div>

<div class="form-group">
		<label for="">Tipo de Documento</label>
		<select name="TipoDocumento" id="TipoDocumento" class="form-control" required="required">
		<option value="C.C">Cedula</option>
		<option value="T.I">Tarjeta de Identidad</option>
		<option value="C.E">Cedula Extrajera</option>
	</select>	

	<div class="form-group">
		<label for="">Nombres y Apellidos</label>
		<input type="text" class="form-control" id="NombresApellidos"  name="NombresApellidos" 
		placeholder="Nombres" required>
	</div>

	
	<div class="form-group">
		<label for="">UnidadAcademica</label>
		<input type="text" class="form-control" id="UnidadAcademica" name="UnidadAcademica" placeholder="	UnidadAcademica" required>
	</div>

	<div class="form-group">
		<label for="">Disciplina</label>
		<input type="text" class="form-control" id="Disciplina" name="Disciplina" placeholder="	Disciplina" required>
	</div>

	<div class="form-group">
		<label for="">GrupodeInvestigacion</label>
		<input type="text" class="form-control" id="GrupodeInvestigacion" name="GrupodeInvestigacion" placeholder="	Grupo de Investigacion" required>
	</div>

	<div class="form-group">
		<label for="">LineasdeInvestigacion</label>
		<input type="text" class="form-control" id="GrupodeInvestigacion" name="LineasdeInvestigacion" placeholder="LineasdeInvestigacion" required>
	</div>

	<div class="form-group">
		<label for="">TelefonoFijo</label>
		<input type="text" class="form-control" name="TelefonoFijo" id="TelefonoFijo" placeholder="TelefonoFijo" >
	</div>

	<div class="form-group">
		<label for="">TelefonoMovil</label>
		<input type="text" class="form-control" name="TelefonoMovil" id="TelefonoMovil" placeholder="TelefonoMovil" >
	</div>

	<div class="form-group">
		<label for="">Correo</label>
		<input type="email" class="form-control" name="Correo"	 id="Correo" placeholder="Correo electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
	</div>

	<div class="form-group">
		<label for="">Cargo</label>
		<input type="text" class="form-control" name="Cargo" id="Cargo" placeholder="Cargo" >
	</div>



	
	<div class="form-group">
			<label for="">Asistio?</label>
			<select name="Asistio" id="Asistio" class="form-control" required="required">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>

		</div>


	<div class="form-group">
			<label for="">Asistio Segunda Sesion?</label>
			<select name="Asistio2" id="Asistio2" class="form-control" required="required">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>

		</div>

			<div class="form-group">
			<label for="">Asistio Tercera Sesion?</label>
			<select name="Asistio3" id="Asistio3" class="form-control" required="required">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>	
<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

	</div>

	

	

{!! Form::close() !!}


  </div>
</div>


@endsection


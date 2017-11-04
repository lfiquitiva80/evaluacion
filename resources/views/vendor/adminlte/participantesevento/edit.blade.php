@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
	<div class="panel panel-default">
  	<div class="panel-info">

   <a href="{{ route('participantesevento.index') }}" class="btn btn-primary" >Regresar</a><p>
  
	{!! Form::open(['route' => ['participantesevento.update', $participantesevento->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION DE LOS PARTICIPANTES DEL EVENTO</legend>
	
	<div class="container-fluid">
		
	
	<div class="form-group">
		<label for="">Id</label>
		<input type="text" class="form-control" id="" placeholder="Id" disabled value="{{$participantesevento->id}}">
	</div>

				<?php  
				$id_evento = DB::table('eventos_general')->get();	
				?>

				<?php  
				$id_plantilla= DB::table('plantilla')->get();	
				?>

	<div class="form-group">
		<label for="">Id_Evento:</label>
	<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$participantesevento->id_evento}}">
		
 	@foreach($id_evento as $row)

 	@if ($participantesevento->id_evento===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombredelEvento}}</option>
	@else
	<option value="{{$row->id}}">{{$row->NombredelEvento}}</option>
	@endif


	@endforeach

	</select>
	</div>

	<div class="form-group">
		<label for="">Elegir plantilla:</label>
	<select name="id_planilla" id="id_planilla" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$participantesevento->id_planilla}}">
		
 	@foreach($id_plantilla as $row)

 	@if ($participantesevento->id_planilla===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombrePlantilla}}</option>
	@else
	<option value="{{$row->id}}">{{$row->NombrePlantilla}}</option>
	@endif


	@endforeach

	</select>
	</div>





	<div class="form-group">
			<label for="">Documento</label>
			<input type="text" class="form-control" id="Documento"  name="Documento" 
			placeholder="Documento" required value="{{$participantesevento->Documento}}">
		</div>

	<div class="form-group">
			<label for="">Tipo de Documento</label>
			<select name="TipoDocumento" id="TipoDocumento" class="form-control" required="required" value="{{$participantesevento->TipoDocumento}}">

			@if ($participantesevento->TipoDocumento==='C.C')
			<option value="C.C" selected>Cedula</option>
			<option value="T.I">Tarjeta de Identidad</option>
			<option value="C.E">Cedula Extrajera</option>
			@else
			<option value="C.C" >Cedula</option>
			<option value="T.I" selected>Tarjeta de Identidad</option>
			<option value="C.E">Cedula Extrajera</option>
			@endif

		</select>



		<div class="form-group">
			<label for="">Nombres y Apellidos</label>
			<input type="text" class="form-control" id="NombresApellidos"  name="NombresApellidos" 
			placeholder="Nombres" required value="{{$participantesevento->NombresApellidos}}">
		</div>

		

		<div class="form-group">
			<label for="">UnidadAcademica</label>
			<input type="text" class="form-control" id="UnidadAcademica" name="UnidadAcademica" placeholder="	UnidadAcademica" required value="{{$participantesevento->UnidadAcademica}}">
		</div>

		<div class="form-group">
			<label for="">Disciplina</label>
			<input type="text" class="form-control" id="Disciplina" name="Disciplina" placeholder="	Disciplina" required value="{{$participantesevento->Disciplina}}">
		</div>

		<div class="form-group">
			<label for="">GrupodeInvestigacion</label>
			<input type="text" class="form-control" id="GrupodeInvestigacion" name="GrupodeInvestigacion" placeholder="	Grupo de Investigacion" required value="{{$participantesevento->GrupodeInvestigacion}}" >
		</div>

		<div class="form-group">
			<label for="">LineasdeInvestigacion</label>
			<input type="text" class="form-control" id="LineasdeInvestigacion" name="LineasdeInvestigacion" placeholder="LineasdeInvestigacion" required value="{{$participantesevento->LineasdeInvestigacion}}">
		</div>

		<div class="form-group">
			<label for="">TelefonoFijo</label>
			<input type="text" class="form-control" name="TelefonoFijo" id="TelefonoFijo" placeholder="TelefonoFijo" value="{{$participantesevento->TelefonoFijo}}">
		</div>

		<div class="form-group">
			<label for="">TelefonoMovil</label>
			<input type="text" class="form-control" name="TelefonoMovil" id="TelefonoMovil" placeholder="TelefonoMovil" value="{{$participantesevento->TelefonoMovil}}">
		</div>

		<div class="form-group">
			<label for="">Correo</label>
			<input type="email" class="form-control" name="Correo"	 id="Correo" placeholder="Correo electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required value="{{$participantesevento->Correo}}">
		</div>

		<div class="form-group">
			<label for="">Cargo</label>
			<input type="text" class="form-control" name="Cargo" id="Cargo" placeholder="Cargo" value="{{$participantesevento->Cargo}}" >
		</div>



		
	<div class="form-group">
			<label for="">Asistio?</label>
			<select name="Asistio" id="Asistio" class="form-control" required="required" value="{{$participantesevento->Asistio}}">

			@if($participantesevento->Asistio===1)	
			<option value="1" selected> Si</option>
			<option value="0">No</option>
			@else
			<option value="0">No</option>
			<option value="1">Si</option>
			@endif

		</select>

		<div class="form-group">
			<label for="">Asistio Segunda Session?</label>
			<select name="Asistio2" id="Asistio2" class="form-control" required="required" value="{{$participantesevento->Asistio2}}">

			@if($participantesevento->Asistio2===1)	
			<option value="1" selected> Si</option>
			<option value="0">No</option>
			@else
			<option value="0">No</option>
			<option value="1">Si</option>
			@endif

		</select>

		<div class="form-group">
			<label for="">Asistio Tercera Session?</label>
			<select name="Asistio2" id="Asistio3" class="form-control" required="required" value="{{$participantesevento->Asistio3}}">

			@if($participantesevento->Asistio3===1)	
			<option value="1" selected> Si</option>
			<option value="0">No</option>
			@else
			<option value="0">No</option>
			<option value="1">Si</option>
			@endif

		</select>



		

		<center><button type="submit" class="btn btn-primary" >Actualizar</button>
		</center><p>

	{!! Form::close() !!}
	<center>@include('adminlte::participantesevento.destroy')</center>

	  </div>
	



	@endsection

	</div>
	</div>
	</div>
	</div>
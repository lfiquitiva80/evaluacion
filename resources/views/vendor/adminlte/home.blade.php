@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">	


	{!! Form::open(['route' => 'buscar', 'method'=>'GET', 'Class'=>'navbar-form navbar-light']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Digite el Documento" name="documento" id="documento" value="">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>



 
{!! Form::close() !!}

<legend>REGISTRAR ASISTENCIA </legend>

   @foreach ($participantesevento as $dato)
    
<div class="panel panel-default">
  <div class="panel-body">
  
	{!! Form::open(['route' => ['actualizarasistencia', $dato->id],'method'=>'PATCH']) !!}

	<div class="form-group">
		<label for="">Documento</label>
		<input type="text" class="form-control" id="Documento" name="Documento" placeholder="Documento" value="{{$dato->Documento}}">
	</div>

	<div class="form-group">
		<label for="">Nombres y Apellidos</label>
		<input type="text" class="form-control" id="NombresApellidos" name="NombresApellidos" placeholder="NombreApellidos" value="{{$dato->NombresApellidos}}">
	</div>

	<?php  
				$id_evento = DB::table('eventos_general')->get();	
				?>

	<div class="form-group">
		<label for="">Id_Evento:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$dato->id_evento}}">
		
 @foreach($id_evento as $row)

 @if ($dato->id_evento===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombredelEvento}}</option>
@else
<option value="{{$row->id}}">{{$row->id}}</option>
@endif


	@endforeach

</select>
</div>


	<div class="form-group">
		<label for="">Asistio Primera Session?</label>
		<select name="Asistio" id="Asistio" class="form-control" required="required" value="{{$dato->Asistio}}">

		@if($dato->Asistio===1)	
		<option value="1" selected> Si</option>
		<option value="0">No</option>
		@else
		<option value="0">No</option>
		<option value="1">Si</option>
		@endif

	</select>

		<div class="form-group">
		<label for="">Asistio Segunda Sesion?</label>
		<select name="Asistio2" id="Asistio2" class="form-control" required="required" value="{{$dato->Asistio2}}">

		@if($dato->Asistio2===1)	
		<option value="1" selected> Si</option>
		<option value="0">No</option>
		@else
		<option value="0">No</option>
		<option value="1">Si</option>
		@endif

	</select>


		<div class="form-group">
		<label for="">Asistio Tercera Sesion?</label>
		<select name="Asistio3" id="Asistio3" class="form-control" required="required" value="{{$dato->Asistio2}}">

		@if($dato->Asistio3===1)	
		<option value="1" selected> Si</option>
		<option value="0">No</option>
		@else
		<option value="0">No</option>
		<option value="1">Si</option>
		@endif

	</select>
<div>
<p></p>
<p></p>
<p></p>
<center><button type="submit" class="btn btn-info">Actualizar Asistencia</button></center>

</div>
{!! Form::close() !!}

</div>
</div>
@endforeach
	</div>
	</div>


















@endsection

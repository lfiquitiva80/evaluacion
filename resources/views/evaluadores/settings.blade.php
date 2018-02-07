@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 @if (Auth::user()->TipoUsers==1)

@endif

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  	<div class="col-md-8 col-md-offset-2">



{!! Form::open(['route' => ['evaluadores.update', $evaluadores->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

	<legend>EDITAR INFORMACION EVALUADORES</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			
		



	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evaluadores->id}}" readonly="readonly">
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Nombre Evaluador</label>
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador" value=" {{$evaluadores->NombreEvaluador}}">
	</div>

	<div class="form-group">
		<label for="email">email (*) Campo Obligatorio</label>
		<input type="text" class="form-control" name="email" id="email" placeholder="Digite una email"  value="{{$evaluadores->email}}">
	</div>



	
	<?php  $Usuarios= DB::table('users')->get();?>

	<div class="form-group">
			<label for="">Usuario:</label>

			 @if (Auth::user()->TipoUsers==0)
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" >


			  @foreach($Usuarios as $row)

			  	@if ($evaluadores->id_users==$row->id)
			  	<option value="{{$row->id}}" selected>{{$row->id}}  {{$row->name}}</option>
			  	@else
			  	<option value="{{$row->id}}">{{$row->id}}  {{$row->name}}</option>
			  	@endif



				@endforeach
			</select>

			@else
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" >


			  @foreach($Usuarios as $row)

			  	@if ($evaluadores->id_users==$row->id)
			  	<option value="{{$row->id}}" selected>{{$row->id}}  {{$row->name}}</option>
			  	@else
			  	<option value="{{$row->id}}">{{$row->id}}  {{$row->name}}</option>
			  	@endif



				@endforeach
			</select>
			@endif



	</div>

<div class="form-group ">
		<label for="">Tipo de Documento de Identidad</label>
			<select name="TipoDocumento" id="TipoDocumento" class="form-control" >
				@foreach($Tipo as $row)

				@if ($evaluadores->TipoDocumento==$row->id)
				<option value="{{$row->id}}" selected>{{$row->Descripcion_Documento}}</option>
				@else
				<option value="{{$row->id}}" >{{$row->Descripcion_Documento}}</option>
				@endif

				@endforeach
			</select>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Documentos de Identidad</label>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores->Cedula}}" >
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Ciudad de Expedición del Documento de Identidad</label>
		<input type="text" class="form-control" name="Ciudad_expedicion" id="Ciudad_expedicion" placeholder="Digite una Cedula" value="{{$evaluadores->Ciudad_expedicion}}" >
	</div>

	<div class="form-group">
		<label for="Telefono">Teléfono</label>
		<input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Digite un Telefono"  value="{{$evaluadores->Telefono}}">
	</div>

	<div class="form-group">
		<label for="Direccion">Dirección</label>
		<input type="text" class="form-control" name="Direccion" id="TelefDireccionono" placeholder="Digite una Direccion" value="{{$evaluadores->Direccion}}" >
	</div>



	<div class="form-group">
		<label for="Codigo_postal">Código_postal</label>
		<input type="text" class="form-control" name="Codigo_postal" id="Codigo_postal" placeholder="Digite un Codigo_postal" value="{{$evaluadores->Codigo_postal}}" >
	</div>


	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Firma Digital</label>
		<input type="file" class="form-control" name="FirmaDigital" id="FirmaDigital" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->FirmaDigital}}" >
	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Hoja de Vida</label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->HV}}" >
	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Subir el Documento de Identidad</label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores->Cedula_pdf}}" >
	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Certificado_Bancario</label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" >
	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Cuenta de Cobro</label>
		<input type="file" class="form-control" name="cuentacobro" id="cuentacobro" placeholder="" value="{{$evaluadores->cuentacobro}}" >
	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</label>
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores->Rut}}" >
		
	</div>
	</div>




	<center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>
</div>
</div>
	</div>


@endsection

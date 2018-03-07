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
  	<div class="col-md-12">



{!! Form::open(['route' => ['evaluadores.update', $evaluadores->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

	<legend>ACTUALIZAR INFORMACION EVALUADORES</legend>

	 @if (Auth::user()->TipoUsers==0)
	
	<a href="{{ $url = route('homedos')}}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@else
	<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@endif
	




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
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador" value=" {{$evaluadores->NombreEvaluador}}" readonly="readonly">
	</div>

<div class="form-group">
		<label for="NombreDepartamento">Fecha de Nacimiento <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento"  value=" {{$evaluadores->Fecha_Nacimiento}}" required>
	</div>
<script type="text/javascript">
$( function() {
    	$( "#Fecha_Nacimiento" ).datepicker();
    	//$( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    	$( "#Fecha_Nacimiento" ).on( "mousedown", function() {
      $( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    });
  } );
  </script>
	

	<div class="form-group">
		<!--<label for="email">email (*) Campo Obligatorio</label>-->
		<input type="hidden" class="form-control" name="email" id="email" placeholder="Digite una email"  value="{{$evaluadores->email}}">
	</div>



	
	<?php  $Usuarios= DB::table('users')->get();?>

	<div class="form-group">
			

			 @if (Auth::user()->TipoUsers==0)
			
		<input type="hidden" class="form-control" name="id_users" id="id_users" placeholder="Digite el Nombre del evaluador" value="{{$evaluadores->id_users}}" readonly="readonly">
		

			@else

			<label for="">Usuario:</label>
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" readonly="readonly">


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
		<label for="">Tipo de Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
			<select name="TipoDocumento" id="TipoDocumento" class="form-control" required>
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
		<label for="NombreDepartamento">Documentos de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label required>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores->Cedula}}" required>
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Ciudad de Expedición del Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Ciudad_expedicion" id="Ciudad_expedicion" placeholder="Digite una Cedula" value="{{$evaluadores->Ciudad_expedicion}}" required>
	</div>


	<div class="form-group">
		<label for="Telefono">Indicativo <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="indicativo" id="indicativo" placeholder="Digite un Telefono"  value="{{$evaluadores->indicativo}}" required>
	</div>

	<div class="form-group">
		<label for="Telefono">Teléfono <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Digite un Telefono"  value="{{$evaluadores->Telefono}}" required>
	</div>

	<div class="form-group">
		<label for="Direccion">Dirección <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Direccion" id="TelefDireccionono" placeholder="Digite una Direccion" value="{{$evaluadores->Direccion}}" required>
	</div>

	<div class="form-group">
		<label for="Codigo_postal">Código_postal</label>
		<input type="text" class="form-control" name="Codigo_postal" id="Codigo_postal" placeholder="Digite un Codigo_postal" value="{{$evaluadores->Codigo_postal}}" >
	</div>

	<!--<?php  $departamento = DB::table('departamento')->get();	?>

<div class="form-group">
		<label for="">Departamento_Proponente</label>
<select name="Departamento_Proponente" id="Departamento_Proponente" class="form-control"  placeholder="Seleccione un Departamento" value="{{$evaluadores->Departamento_Proponente}}">

  @foreach($departamento as $row)


	@if ($evaluadores->Departamento_Proponente===$row->id)
	<option value="{{$row->id}}" selected>{{$row->NombreDepartamento}}</option>
	@else
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	@endif

	@endforeach

</select>
</div>

	<?php
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad_Proponente:</label>
<select name="Ciudad_Proponente" id="Ciudad_Proponente" class="form-control" placeholder="Seleccione una Ciudad" value="{{$evaluadores->Ciudad_Proponente}}">

  @foreach($municipios as $row)
    @if ($evaluadores->id_ciudad==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Municipio}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endif


	@endforeach
</select>
</div>
-->

	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Hoja de Vida <span style="color:#c0392b">(*) Campo Obligatorio </span></label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->HV}}" onchange="nombrefileHV()"> 
		@if(!empty($evaluadores->HV))
		<i class="fa fa-check-square" aria-hidden="true" > Ya tiene una Hoja de Vida en el Sistema ¿desea modificarlo? </i>

		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b">Falta por Subir la Hoja de Vida</span></i>
		@endif

		<p id="hojavida"></p>

	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Subir el Documento de Identidad </label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores->Cedula_pdf}}" onchange="nombrefilecedula()">
		@if(!empty($evaluadores->Cedula_pdf))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene un Documento de identificación en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b">Falta por Subir la Cédula</span></i>
		@endif

		<p id="ceduladoc"></p>

	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Certificado_Bancario </label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" onchange="nombrefilebancario()">
		@if(!empty($evaluadores->Certificado_Bancario))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene un Certificado Bancario en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b"> Falta por subir el Certificado Bancario</span></i>
		@endif

		<p id="bancariodoc"></p>

	</div>
	</div>

		
	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</label>
		
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores->Rut}}" onchange="nombrefilerut()">
		@if(!empty($evaluadores->Rut))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene Documento en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b"> Falta el Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</span></i>
		@endif
		
		<p id="Rutdoc"></p>

		
	</div>
	</div>




	<center><button type="submit" class="btn btn-info pull-center">Actualizar para Continuar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>
</div>
</div>
	</div>


@endsection

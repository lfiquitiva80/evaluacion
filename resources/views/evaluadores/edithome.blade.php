<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>	</title>

					<!-- Latest compiled and minified CSS & JS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
					<script src="//code.jquery.com/jquery.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				</head>
				<body id="registro_home">
					
				</body>
				</html>

				 <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#registro_inicio").modal("show");
  });
  </script>				



		<!--<a class="btn btn-primary" data-toggle="modal" href='#registro_inicio' >Trigger modal</a>-->
		
<div class="modal fade" id="registro_inicio">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar información del Evaluador</h4>
			</div>
			<div class="modal-body">
				
			



{!! Form::open(['route' => ['evaluadores.update', $evaluadores2->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

	<!--<legend>ACTUALIZAR INFORMACION</legend>-->

<!--	 @if (Auth::user()->TipoUsers==0)
	
	<a href="{{ $url = route('homedos')}}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@else
	<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@endif-->
	




	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			
		



	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evaluadores2->id}}" readonly="readonly">
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Nombre Evaluador</label>
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador" value=" {{$evaluadores2->NombreEvaluador}}" readonly="readonly">
	</div>

<!--<div class="form-group">
		<label for="NombreDepartamento">Fecha de Nacimiento <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento"  value=" {{$evaluadores2->Fecha_Nacimiento}}" required>
	</div>
<script type="text/javascript">
$( function() {
    	$( "#Fecha_Nacimiento" ).datepicker();
    	//$( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    	$( "#Fecha_Nacimiento" ).on( "mousedown", function() {
      $( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    });
  } );
  </script>-->
	

	<div class="form-group">
		<!--<label for="email">email (*) Campo Obligatorio</label>-->
		<input type="hidden" class="form-control" name="email" id="email" placeholder="Digite una email"  value="{{$evaluadores2->email}}">
	</div>



	
	<?php  $Usuarios= DB::table('users')->get();?>

	<div class="form-group">
			

			
			
		<input type="hidden" class="form-control" name="id_users" id="id_users" placeholder="Digite el Nombre del evaluador" value="{{$evaluadores2->id_users}}" readonly="readonly">
		

			



	</div>

<div class="form-group ">
		<label for="">Tipo de Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
			<select name="TipoDocumento" id="TipoDocumento" class="form-control" required>
				@foreach($Tipo as $row)

				@if ($evaluadores2->TipoDocumento==$row->id)
				<option value="{{$row->id}}" selected>{{$row->Descripcion_Documento}}</option>
				@else
				<option value="{{$row->id}}" >{{$row->Descripcion_Documento}}</option>
				@endif

				@endforeach
			</select>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Documentos de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label required>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores2->Cedula}}" required>
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Ciudad de Expedición del Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Ciudad_expedicion" id="Ciudad_expedicion" placeholder="Digite una Cedula" value="{{$evaluadores2->Ciudad_expedicion}}" required>
	</div>

	<div class="form-group">
		<label for="Telefono">Teléfono <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="tel" class="form-control" name="Telefono" id="Telefono" placeholder="(+indicativo)(xxxxxxxxxx)"  value="{{$evaluadores2->Telefono}}" required>
	</div>

	<!--

	<div class="form-group">
		<label for="Direccion">Dirección <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Direccion" id="TelefDireccionono" placeholder="Digite una Direccion" value="{{$evaluadores2->Direccion}}" required>
	</div>

	<div class="form-group">
		<label for="Codigo_postal">Código_postal</label>
		<input type="text" class="form-control" name="Codigo_postal" id="Codigo_postal" placeholder="Digite un Codigo_postal" value="{{$evaluadores2->Codigo_postal}}" >
	</div>



	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Hoja de Vida <span style="color:#c0392b">(*) Campo Obligatorio </span></label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores2->HV}}" onchange="nombrefileHV()"> 
		@if(!empty($evaluadores2->HV))
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
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores2->Cedula_pdf}}" onchange="nombrefilecedula()">
		@if(!empty($evaluadores2->Cedula_pdf))
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
		@if(!empty($evaluadores2->Certificado_Bancario))
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
		
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores2->Rut}}" onchange="nombrefilerut()">
		@if(!empty($evaluadores2->Rut))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene Documento en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b"> Falta el Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</span></i>
		@endif
		
		<p id="Rutdoc"></p>

		
	</div>
	</div>-->



	
	
</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Close</button>

				<button type="submit" class="btn btn-info pull-center">Actualizar para Continuar</button>
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>


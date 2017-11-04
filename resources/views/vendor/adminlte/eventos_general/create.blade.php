
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crear un Evento</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



	</head>
	<body>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>




<div class="container-fluid">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	


		<div class="panel panel-default">
		<div class="panel-heading"></div>
		<div class="panel-body">
		<div class="container">



{!! Form::open(['route' => 'eventos_general.store', 'method'=>'POST']) !!}


<a 	href="{{ route('eventos_general.index') }}" class="btn btn-primary" >Regresar</a><p>
	<legend>CREAR UN EVENTO</legend>

	

	<!--<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" Name="id" placeholder="Input field">
	</div>-->

	<div class="form-group">
		<label for="">Tema</label>
		<input type="text" class="form-control" Name="Tema" placeholder="Digite un Tema" size="50">
	</div>

	<div class="form-group">
		<label for="">Nombre del Evento</label>
		<input type="text" class="form-control" name="NombredelEvento" placeholder="Digite un Nombre del Evento" size="50">
	</div>
  
	<div class="form-group">
		<label for="">Lugar:</label>
		<input type="text" class="form-control" name="Lugar" placeholder="Digite un Lugar">
	</div>

	
	

		<?php  
$pais = DB::table('paises')->get();
?>

<div class="form-group">
		<label for="">Pais:</label>
<select name="Pais" id="Pais" class="form-control" required="required" placeholder="Seleccione una Ciudad" style="width:130px">
		
  @foreach($pais as $row)
	@if(343===$row->id)
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Pais}}</option>
	@endif


	@endforeach
</select>
</div>


		<?php  
$departamento = DB::table('departamento')->get();	
?>
<div class="form-group">
		<label for="">Departamento:</label>
<select name="id_departamento" id="id_departamento" class="form-control" required="required" placeholder="Seleccione un Departamento" style="width:150px" onchange="enviardato(this.value)">
		
  @foreach($departamento as $row)	
	
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	
	@endforeach

</select>

</div>

<?php
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad:</label>
<select name="id_ciudad" id="idciudad" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	<option value="">Digite una Ciudad</option>	
  @foreach($municipios as $row)
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endforeach
</select>
</div>



	<div class="form-group">
		<label for="">Ciudad Extranjera:</label>
		<input type="text" class="form-control" name="Ciudad_extranjero" placeholder="Digite un Ciudad Extranjera">
	</div>

	<div class="form-group">
		<label for="">Fecha Inicial:</label>
		<input type="date" class="form-control" name="Fecha_inicial" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Fecha Final:</label>
		<input type="date" class="form-control" name="Fecha_Final" placeholder="">
	</div>

	<div class="form-group">
		<label for="">Organizador:</label>
		<input type="text" class="form-control" name="Organizador" placeholder="Digite el Organizador del Evento">
	</div>



	<?php  
				$funcionario = DB::table('funcionarios')->get();	
				?>

	<div class="form-group">
		<label for="">Persona Encargada de la Difusión:</label>
<select name="Persona_Encargada_difusion" id="Persona_Encargada_difusion" class="form-control" required="required" placeholder="Seleccione un funcionario">
		
  @foreach($funcionario as $row)
	<option value="{{$row->id}}">{{$row->NombresApellidos}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
		<label for="">Tipo de Recurso</label>
		<select name="Tipo_Recurso" id="Tipo_Recurso" class="form-control" required="required">
		<option value="Recursos del OCyT">Recursos del OCyT </option>
		<option value="Recursos de un Proyecto">Recursos de un Proyecto</option>
	</select>


<div class="form-group">
		<label for="">Usuario:</label>
		<input type="hidden" class="form-control" name="id_user" placeholder="Digite el Organizador del Evento" value="{{ Auth::user()->id }}" readonly="readonly" style="width:50px" >{{ Auth::user()->name }} 
 		
	</div>

<div class="form-group" >	
		<label for="">Nombre del Proyecto:</label>
		<input type="text" class="form-control" name="NombreProyecto" id="NombreProyecto" placeholder="Digite el Nombre del Proyecto " size="75" >
	</div>

			<div class="form-group">
		<label for="">Puntos claves:</label>
<textarea class="ckeditor" name="Puntos_claves"  id="Puntos_claves" rows="5" cols="150">	</textarea>

	</div>
	




	<p>
<center><button type="submit" class="btn btn-primary">Guardar</button>
<br>
		{!! Form::close() !!}


		</div>
	</div>
	</div>
@endsection
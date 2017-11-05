
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">


  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  
   <a href="{{ route('evaluadores.store') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'evaluadores.store', 'method'=>'POST','enctype'=>'multipart/form-data','file'=>true]) !!}
	<legend>CREAR EVALUADORES</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="">Nombre Evaluador</label>
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador">
	</div>
	
	<div class="form-group">
		<label for="email">email(*) Campo Obligatorio</label>
		<input type="text" class="form-control" name="email" id="email" placeholder="Digite una email"  >
	</div>



	<?php  $Usuarios= DB::table('users')->orderby('id','desc')->get();?>

	<div class="form-group">
			<label for="">Usuario:</label>
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" >
					
			  @foreach($Usuarios as $row)
					<option value="{{$row->id}}">{{$row->id}}  {{$row->name}}</option>
				@endforeach
			</select>
	</div>

	
	<div class="form-group">
		<label for="">Documentos de Identidad</label>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula"  >
	</div>

	<div class="form-group">
		<label for="Telefono">Teléfono</label>
		<input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Digite un Telefono"  >
	</div>

	<div class="form-group">
		<label for="Direccion">Dirección</label>
		<input type="text" class="form-control" name="Direccion" id="TelefDireccionono" placeholder="Digite una Direccion"  >
	</div>

	

	<div class="form-group">
		<label for="Codigo_postal">Código_postal</label>
		<input type="text" class="form-control" name="Codigo_postal" id="Codigo_postal" placeholder="Digite un Codigo_postal"  >
	</div>

	<!--<?php  
$departamento = DB::table('departamento')->get();	
?>
<div class="form-group">
		<label for="">Departamento_Proponente</label>
<select name="Departamento_Proponente" id="Departamento_Proponente" class="form-control" required="required" placeholder="Seleccione un Departamento" >
		
  @foreach($departamento as $row)	
	
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	
	@endforeach

</select>

</div>

<?php
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad_Proponente</label>
<select name="Ciudad_Proponente" id="Ciudad_Proponente" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	<option value="">Digite una Ciudad</option>	
  @foreach($municipios as $row)
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endforeach
</select>
</div>-->

	<div class="form-group">
		<label for="">Firma Digital</label>
		<input type="file" class="form-control" name="FirmaDigital" id="FirmaDigital" placeholder="Suba la hoja de Vida" value="Sin informacion">
	</div>

	<div class="form-group">
		<label for="">Hoja de Vida</label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida" value="Sin informacion">
	</div>

	<div class="form-group">
		<label for="funcionario">Subir el Documento de Identidad</label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="Sin informacion">
	</div>

	<div class="form-group">
		<label for="funcionario">Certificado_Bancario</label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" value="Sin informacion">
	</div>

	<div class="form-group">
		<label for="funcionario">Cuenta de Cobro</label>
		<input type="file" class="form-control" name="cuentacobro" id="cuentacobro" placeholder="" value="Sin informacion">
	</div>

	<div class="form-group">
		<label for="funcionario">Rut</label>
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="Sin informacion">
	</div>

	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

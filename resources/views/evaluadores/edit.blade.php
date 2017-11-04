@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 @if (Auth::user()->TipoUsers==1)
<center>@include('evaluadores.destroy')</center>
@endif
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['evaluadores.update', $evaluadores->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

	<legend>EDITAR INFORMACION evaluadores</legend>

 <a 	href="{{ route('homedos') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evaluadores->id}}" readonly="readonly">
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Nombre Evaluador</label>
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador" value=" {{$evaluadores->NombreEvaluador}}">
	</div>
		



	<?php  $Usuarios= DB::table('users')->get();?>

	<div class="form-group">
			<label for="">Usuario:</label>
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" >
				

			  @foreach($Usuarios as $row)
					
			  	@if ($evaluadores->id_users==$row->id)	
			  	<option value="{{$row->id}}" selected>{{$row->id}}  {{$row->name}}</option>
			  	@else
			  	<option value="{{$row->id}}">{{$row->id}}  {{$row->name}}</option>
			  	@endif



				@endforeach
			</select>
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">Documentos de Identidad</label>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores->Cedula}}" >
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
		<label for="email">email</label>
		<input type="text" class="form-control" name="email" id="email" placeholder="Digite una email"  value="{{$evaluadores->email}}">
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
	<div class="form-group">
		<label for="NombreDepartamento">Firma Digital</label>
		<input type="file" class="form-control" name="FirmaDigital" id="FirmaDigital" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->FirmaDigital}}" >
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Hoja de Vida</label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores->HV}}" >
	</div>

	<div class="form-group">
		<label for="funcionario">Subir el Documento de Identidad</label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores->Cedula_pdf}}" >
	</div>

	<div class="form-group">
		<label for="funcionario">Certificado_Bancario</label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" >
	</div>

	<div class="form-group">
		<label for="funcionario">Cuenta de Cobro</label>
		<input type="file" class="form-control" name="cuentacobro" id="cuentacobro" placeholder="" value="{{$evaluadores->cuentacobro}}" >
	</div>

	<div class="form-group">
		<label for="funcionario">Rut</label>
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores->Rut}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


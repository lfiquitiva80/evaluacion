@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  


	<legend>EDITAR INFORMACION evaluadores</legend>

 
 

 	{!! Form::open(['route' => ['evaluadores.update', $evaluadores->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true, 'class' => 'form-inline']) !!}
 
 	<div class="form-group">
 		
 	
 
 	<button type="submit" class="btn btn-primary">Submit</button>
 </form>

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
			<select name="id_users" id="id_users" class="form-control" required="required" placeholder="" disabled>
				

			  @foreach($Usuarios as $row)
					
			  	@if ($evaluadores->id_users==$row->id)	
			  	<option value="{{$row->id}}" selected>{{$row->name}}</option>
			  	@else
			  	<option value="{{$row->id}}">{{$row->name}}</option>
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

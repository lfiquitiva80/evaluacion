@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<center>@include('adminlte::funcionarios.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['funcionarios.update', $funcionarios->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION FUNCIONARIOS</legend>

 <a 	href="{{ route('funcionarios.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$funcionarios->id}}" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Cedula</label>
		<input type="text" class="form-control" name="cedula" id="cedula" placeholder="Digite un nuevo funcionario" value="{{$funcionarios->cedula}}" >
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">NombresApellidos</label>
		<input type="text" class="form-control" name="NombresApellidos" id="NombresApellidos" placeholder="Digite un nuevo funcionario" value="{{$funcionarios->NombresApellidos}}" >
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Fecha Nacimiento</label>
		<input type="text" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento" placeholder="Digite un nuevo funcionario" value="{{$funcionarios->Fecha_Nacimiento}}" >
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Cargo</label>
		<input type="text" class="form-control" name="Cargo" id="Cargo" placeholder="Digite un nuevo Cargo" value="{{$funcionarios->Cargo}}" >
	</div>

	<div class="form-group">
		<label for="Nivel">Nivel</label>
		<input type="text" class="form-control" name="Nivel" id="Nivel" placeholder="Digite un nuevo Nivel" value="{{$funcionarios->Nivel}}" >
	</div>


	<div class="form-group">
		<label for="Nivel">Celular</label>
		<input type="text" class="form-control" name="Celular" id="Celular" placeholder="Digite un nuevo Celular" value="{{$funcionarios->Celular}}" >
	</div>

	<div class="form-group">
		<label for="mail">Mail</label>
		<input type="text" class="form-control" name="mail" id="mail" placeholder="Digite un nuevo mail" value="{{$funcionarios->mail}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


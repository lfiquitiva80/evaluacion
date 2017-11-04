
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('funcionarios.store') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'funcionarios.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR FUNCIONARIO</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
		<div class="form-group">
		<label for="NombreDepartamento">Cedula</label>
		<input type="text" class="form-control" name="cedula" id="cedula" placeholder="Digite un nuevo funcionario"  >
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">NombresApellidos</label>
		<input type="text" class="form-control" name="NombresApellidos" id="NombresApellidos" placeholder="Digite un nuevo funcionario"  >
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Fecha Nacimiento</label>
		<input type="date" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento" placeholder="Digite un nuevo funcionario"  >
	</div>

	<div class="form-group">
		<label for="funcionario">Cargo</label>
		<input type="text" class="form-control" name="Cargo" id="Cargo" placeholder="Digite el cargo">
	</div>

	<div class="form-group">
		<label for="funcionario">	Nivel</label>
		<input type="text" class="form-control" name="Nivel" id="Nivel" placeholder="Digite el Nivel">
	</div>

	<div class="form-group">
		<label for="funcionario">Celular</label>
		<input type="text" class="form-control" name="Celular" id="Celular" placeholder="Digite el Nivel">
	</div>

	<div class="form-group">
		<label for="funcionario">Mail</label>
		<input type="email" class="form-control" name="Mail" id="Mail" placeholder="Digite el Mail">
	</div>


	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


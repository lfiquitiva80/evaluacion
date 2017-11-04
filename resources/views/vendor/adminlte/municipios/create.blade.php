@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('municipios.index') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'municipios.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR MUNICIPIO</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Municipio">Nombre Municipio</label>
		<input type="text" class="form-control" name="Municipio" id="Municipio" placeholder="Digite un Municipio nuevo">
	</div>



	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


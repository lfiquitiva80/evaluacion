
@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('paises.index') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'paises.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR PAIS</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Pais">Nombre Pais</label>
		<input type="text" class="form-control" name="Pais" id="Pais" placeholder="Digite un Pais nuevo">
	</div>



	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


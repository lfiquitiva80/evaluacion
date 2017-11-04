
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('area_tematica.index') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'area_tematica.store', 'method'=>'POST' , 'Class'=>'form-inline']) !!}
	<legend>CREAR FORMULARIO DE TEMATICA</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Tematica">Tematica</label>
		<input type="text" class="form-control" name="Tematica" id="Tematica" placeholder="Digite una nueva Tematica">
	</div>



	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


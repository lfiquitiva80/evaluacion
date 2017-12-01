
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'evaluadores.store', 'method'=>'POST']) !!}
	<legend>CREAR EVALUADORES</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
		<div class="form-group">
		<label for="">id_users</label>
		<input type="text" class="form-control" name="id_users" id="id_users" placeholder="Digite un nuevo evaluador" value="{{ Auth::user()->id}}">
	</div>

	
	<div class="form-group">
		<label for="">Cedula</label>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula"  >
	</div>

	<div class="form-group">
		<label for="">Hoja de Vida</label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  >
	</div>

	<div class="form-group">
		<label for="funcionario">Suba la Cedula</label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo">
	</div>

	<div class="form-group">
		<label for="funcionario">Certificado_Bancario</label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario">
	</div>

	<div class="form-group">
		<label for="funcionario">Rut</label>
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut">
	</div>

	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection



@extends('layouts.appdos')

@section('content')



<div class="panel panel-default">
  <div class="panel-body">
  <div class="container">
  
   <a href="{{ route('tipo_participacion.index') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'tipo_participacion.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR TIPO DE PARTICIPACION</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Municipio">Tipo de Participación</label>
		<input type="text" class="form-control" name="Tipos" id="Tipos" placeholder="Digite el tipo de participación" size="150">
	</div>



	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


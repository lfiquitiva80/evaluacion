@extends('layouts.appdos')

@section('content')


<center>@include('tipo_participacion.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['tipo_participacion.update', $tipo_participacion->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION DEL TIPO DE PARTICIPACION</legend>

 <a 	href="{{ route('tipo_participacion.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$tipo_participacion->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">Tipo de Participación</label>
		<input type="text" class="form-control" name="Tipos" id="Tipos" placeholder="Digite un nuevo municipio" value="{{$tipo_participacion->Tipos}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


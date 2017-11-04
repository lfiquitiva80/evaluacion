@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<center>@include('adminlte::municipios.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['municipios.update', $municipios->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION MUNICIPIO</legend>

 <a 	href="{{ route('municipios.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$municipios->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">Nombre Municipio</label>
		<input type="text" class="form-control" name="Municipio" id="Municipio" placeholder="Digite un nuevo municipio" value="{{$municipios->Municipio}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


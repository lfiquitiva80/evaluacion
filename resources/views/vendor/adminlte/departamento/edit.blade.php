@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<center>@include('adminlte::departamento.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['departamento.update', $departamento->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION TEMATICAS</legend>

 <a 	href="{{ route('departamento.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$departamento->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="NombreDepartamento">NombreDepartamento</label>
		<input type="text" class="form-control" name="NombreDepartamento" id="NombreDepartamento" placeholder="Digite una nueva Tematica" value="{{$departamento->NombreDepartamento}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


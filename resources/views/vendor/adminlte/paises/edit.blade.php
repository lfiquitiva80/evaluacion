@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<center>@include('adminlte::paises.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['paises.update', $paises->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION PAIS</legend>

 <a 	href="{{ route('paises.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$paises->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Pais">Pais</label>
		<input type="text" class="form-control" name="Pais" id="Pais" placeholder="Digite un nuevo Pais" value="{{$paises->Pais}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


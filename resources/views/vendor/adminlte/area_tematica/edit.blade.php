@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<center>@include('adminlte::area_tematica.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['area_tematica.update', $area_tematica->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION TEMATICAS</legend>

 <a 	href="{{ route('area_tematica.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$area_tematica->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="Tematica">Tematica</label>
		<input type="text" class="form-control" name="Tematica" id="Tematica" placeholder="Digite una nueva Tematica" value="{{$area_tematica->Tematica}}" >
	</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


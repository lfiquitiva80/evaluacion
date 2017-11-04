@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<center>@include('adminlte::evento_areatematica.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['evento_areatematica.update', $evento_areatematica->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION DEL AREA TEMATICA DEL EVENTO</legend>

 <a 	href="{{ route('evento_areatematica.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evento_areatematica->id}}" readonly="readonly">
	</div>

	<?php  
$eventos = DB::table('eventos_general')->get();
?>
		
	<div class="form-group">
		<label for="">Id Eventos:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($eventos as $row)

  @if($evento_areatematica->id_evento===$row->id)
	<option value="{{$row->id}}" selected>{{$row->id}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->id}}</option>

	@endif

	@endforeach
</select>
</div>

	<?php  
$area = DB::table('area_tematica')->get();
?>

	<div class="form-group">
		<label for="">id_areatematica:</label>
<select name="id_areatematica" id="id_areatematica" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($area as $row)

   @if($evento_areatematica->id_areatematica===$row->id)
	<option value="{{$row->id}}" selected>{{$row->Tematica}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->Tematica}}</option>

	@endif

	@endforeach
</select>
</div>
	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


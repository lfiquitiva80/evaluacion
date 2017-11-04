@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


{!! Form::open(['route' => 'evento_areatematica.store', 'method'=>'POST']) !!}

<div class="container">
	<legend>CREAR UN EVENTO==> AREA TEMATICA</legend>

	  <a 	href="{{ route('evento_areatematica.index') }}" class="btn btn-primary" >Regresar</a><p>

	<!--<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" Name="id" placeholder="Input field">
	</div>-->

	<?php  
$eventos = DB::table('eventos_general')->get();
?>
		
	<div class="form-group">
		<label for="">Id Eventos:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($eventos as $row)
	<option value="{{$row->id}}">{{$row->id}}</option>
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
	<option value="{{$row->id}}">{{$row->Tematica}}</option>
	@endforeach
</select>
</div>
	


	
<center><button type="submit" class="btn btn-primary">Enviar</button>
<button type="reset" class="btn btn-danger">Cancelar</button></center><p>
		{!! Form::close() !!}

@endsection
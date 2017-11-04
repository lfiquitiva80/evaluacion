
@extends('layouts.appdos')

@section('content')


<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
   <a href="{{ route('tiquetes.index') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'tiquetes.store', 'method'=>'POST', 'Class'=>'form-inline']) !!}
	<legend>CREAR TIQUETES</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>


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
$paises = DB::table('paises')->get();
?>
		
	<div class="form-group">
		<label for="">Pais de Origen:</label>
<select name="Pais_Origen" id="Pais_Origen" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($paises as $row)
  	@if(343==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Pais}}</option>
	@endif

	@endforeach
</select>
</div>


<?php  
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad Origen:</label>
<select name="Ciudad_Origen" id="Ciudad_Origen" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	 @foreach($municipios as $row)
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endforeach
</select>
</div>

	<div class="form-group">
		<label for="tiquetes">Ciudad_extranjero</label>
		<input type="text" class="form-control" name="Ciudad_extranjero" id="Ciudad_extranjero" placeholder="Ciudad_extranjero">
	</div>


<?php  
$paises = DB::table('paises')->get();
?>
		
	<div class="form-group">
		<label for="">Pais de Destino:</label>
<select name="Pais_Destino" id="Pais_Destino" class="form-control" required="required" placeholder="Seleccione una Ciudad" >
	
  @foreach($paises as $row)
	@if(343==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Pais}}</option>
	@endif
	@endforeach
</select>
</div>


<?php  
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad_Destino:</label>
<select name="Ciudad_Destino" id="Ciudad_Destino" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	 @foreach($municipios as $row)
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endforeach
</select>
</div>

	<div class="form-group">
		<label for="tiquetes">Ciudad_extranjero_destino</label>
		<input type="text" class="form-control" name="Ciudad_extranjero_destino" id="Ciudad_extranjero_destino" placeholder="Ciudad_extranjero">
	</div>

	<div class="form-group">
		<label for="">Fecha:</label>
		<input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="">
	</div>




	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


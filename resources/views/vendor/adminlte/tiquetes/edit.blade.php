@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<center>@include('adminlte::tiquetes.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['tiquetes.update', $tiquetes->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION TIQUETES</legend>

 <a 	href="{{ route('tiquetes.index') }}" class="btn btn-primary" >Regresar</a><p>
	

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$tiquetes->id}}" readonly="readonly">
	</div>

	
	<?php  
$eventos = DB::table('eventos_general')->get();
?>
		
	<div class="form-group">
		<label for="">Id Eventos:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($eventos as $row)

  	 @if ($tiquetes->id_evento===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->id}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->id}}</option>

	@endif

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

  @if ($tiquetes->Pais_Origen===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
@else
	<option value="{{$row->id}}">{{$row->Pais}}</option>

@endif

	@endforeach
</select>
</div>

<?php  
$departamento = DB::table('departamento')->get();
?>

<div class="form-group">
		<label for="">Departamento Origen:</label>
<select name="Departamento_Origen" id="Departamento_Origen" class="form-control" required="required" placeholder="Seleccione un Departamento">
	
  @foreach($departamento as $row)

  @if ($tiquetes->Departamento_Origen===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombreDepartamento}}</option>
@else
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>

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

	 @if ($tiquetes->Ciudad_Origen===$row->id)
	<option value="{{$row->id}}" selected>{{$row->Municipio}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endif

	@endforeach
</select>
</div>

	<div class="form-group">
		<label for="tiquetes">Ciudad_extranjero</label>
		<input type="text" class="form-control" name="Ciudad_extranjero" id="Ciudad_extranjero" placeholder="Ciudad_extranjero" value="{{$tiquetes->Ciudad_extranjero}}">
	</div>


	<div class="form-group">
		<label for="">Pais_Destino:</label>
<select name="Pais_Destino" id="Pais_Destino" class="form-control" required="required" placeholder="Seleccione una Ciudad" value="{{$tiquetes->Pais_Destino}}">
	
  @foreach($paises as $row)

  @if ($tiquetes->Pais_Destino===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
@else
	<option value="{{$row->id}}">{{$row->Pais}}</option>

@endif

	@endforeach
</select>
</div>

<?php  
$departamento = DB::table('departamento')->get();
?>

<div class="form-group">
		<label for="">Departamento Destino:</label>
<select name="Departamento_destino" id="Departamento_destino" class="form-control" required="required" placeholder="Seleccione un Departamento">
	
  @foreach($departamento as $row)

  @if ($tiquetes->Departamento_destino===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombreDepartamento}}</option>
@else
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>

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

	 @if ($tiquetes->Ciudad_Destino===$row->id)
	<option value="{{$row->id}}" selected>{{$row->Municipio}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endif

	@endforeach
</select>
</div>

	<div class="form-group">
		<label for="tiquetes">Ciudad_extranjero_destino</label>
		<input type="text" class="form-control" name="Ciudad_extranjero_destino" id="Ciudad_extranjero_destino" placeholder="Ciudad_extranjero" value="{{$tiquetes->Ciudad_extranjero_destino}}">
	</div>

	<div class="form-group">
		<label for="">Fecha:</label>
		<input type="text" class="form-control" name="Fecha" id="Fecha" placeholder="" value="{{$tiquetes->Fecha}}">
	</div>


	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


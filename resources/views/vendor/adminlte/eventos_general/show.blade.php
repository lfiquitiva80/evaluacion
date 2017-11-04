@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

{!! Form::open(['route' => ['eventos_general.update', $eventos_general->id],'method'=>'PATCH', 'Class'=>'form-inline']) !!}
<div class="container">
	<b><legend>EDITAR UN EVENTO</legend></b>

    <a 	href="{{ route('eventos_general.index') }}" class="btn btn-primary" >Regresar</a><p>
			
	
	<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" id="id" Name="id" placeholder="Input field" value="{{$eventos_general->id}}" readonly="readonly">
	</div>

	
	<div class="form-group">
		<label for="">Tema</label>
		<input type="text" class="form-control" Name="Tema"  id="Tema" placeholder="Digite un Tema" value="{{$eventos_general->Tema}}">
	</div>

	<div class="form-group">
		<label for="">Nombre del Evento</label>
		<input type="text" class="form-control" name="NombredelEvento" placeholder="Digite un Nombre del Evento" value="{{$eventos_general->NombredelEvento}}">
	</div>

	<div class="form-group">
		<label for="">Lugar:</label>
	<input type="text" class="form-control" name="Lugar" placeholder="Digite un Lugar" value={{$eventos_general->Lugar}}>
	</div>

	
	<!--<div class="form-group">
		<label for="">Ciudad:</label>
		<input type="text" class="form-control" name="id_ciudad" placeholder="Digite un Ciudad">
	</div>-->

		<?php  
$pais = DB::table('paises')->get();
?>

<div class="form-group">
		<label for="">Pais:</label>
<select name="Pais" id="Pais" class="form-control" required="required" placeholder="Seleccione una Ciudad" value="{{$eventos_general->Pais}}" style="width:130px">
		
  @foreach($pais as $row)
  	@if ($eventos_general->Pais===$row->Pais)
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->Pais}}</option>

	@endif

	@endforeach
</select>
</div>





		<?php  $departamento = DB::table('departamento')->get();	?>

<div class="form-group">
		<label for="">Departamento:</label>
<select name="id_departamento" id="id_departamento" class="form-control" required="required" placeholder="Seleccione un Departamento" style="width:150px" value="{{$eventos_general->id_departamento}}">
		
  @foreach($departamento as $row)


	@if ($eventos_general->id_departamento===$row->id)	
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
		<label for="">Ciudad:</label>
<select name="id_ciudad" id="idciudad" class="form-control" required="required" placeholder="Seleccione una Ciudad" value="{{$eventos_general->id_ciudad}}">

  @foreach($municipios as $row)
    @if ($eventos_general->id_ciudad==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Municipio}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endif


	@endforeach
</select>
</div>







	<div class="form-group">
		<label for="">Ciudad Extranjera:</label>
		<input type="text" class="form-control" name="Ciudad_extranjero" placeholder="Digite un Ciudad Extranjera" value="{{$eventos_general->Ciudad_extranjero}}">
	</div>

	
	<div class="form-group">
		<label for="">Fecha Inicial:</label>
		<input type="text" class="form-control" name="Fecha_inicial" placeholder="" value="{{$eventos_general->	Fecha_inicial}}" >
	</div>

	<div class="form-group">
		<label for="">Fecha Final:</label>
		<input type="text" class="form-control" name="Fecha_Final" placeholder="" value="{{$eventos_general->Fecha_Final}}" >
	</div>

	<div class="form-group">
		<label for="">Organizador:</label>
		<input type="text" class="form-control" name="Organizador" placeholder="Digite el Organizador del Evento" value="{{$eventos_general->Organizador}}">
	</div>




	<?php  $funcionario = DB::table('funcionarios')->get();	?>

	<div class="form-group">
		<label for="">Persona Encargada de la Difusión:</label>
<select name="Persona_Encargada_difusion" id="Persona_Encargada_difusion" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$eventos_general->Persona_Encargada_difusion}}">
		
  @foreach($funcionario as $row)
  	@if($eventos_general->Persona_Encargada_difusion===$row->id)
	<option value="{{$row->id}}" selected>{{$row->NombresApellidos}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->NombresApellidos}}</option>
	@endif

	@endforeach
</select>
</div>


<div class="form-group">
		<label for="">Tipo de Recurso</label>
		<select name="Tipo_Recurso" id="Tipo_Recurso" class="form-control" required="required" value="{{$eventos_general->Tipo_Recurso}}">
	
		@if ($eventos_general->Tipo_Recurso==="Recursos del OCyT")
		<option value="Recursos del OCyT" selected>Recursos del OCyT</option>
		<option value="Recursos de un Proyecto">Recursos de un Proyecto</option>
		@else
		<option value="Recursos del OCyT" >Recursos del OCyT</option>
		<option value="Recursos de un Proyecto" selected>Recursos de un Proyecto</option>

		@endif
		
	</select>

</div>	

<div class="form-group" id="ocultar">
		<label for="">Nombre del Proyecto:</label>
		<input type="text" class="form-control" name="NombreProyecto" id="NombreProyecto" placeholder="Digite el Nombre del Proyecto " size="75" value="{{$eventos_general->NombreProyecto}}" >
	</div>





		
	<p>	
	
	<div class="form-group">
		<label for="">Puntos claves:</label>
			<textarea class="ckeditor" name="Puntos_claves"  id="Puntos_claves" value="" rows="10" cols="150">{{$eventos_general->Puntos_claves}}</textarea>

	</div>


	



		{!! Form::close() !!}

</div>




@endsection

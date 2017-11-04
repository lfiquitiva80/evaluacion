@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

   <a href="{{ route('participantesevento.index') }}" class="btn btn-primary" >Regresar</a><p>
  
{!! Form::open(['route' => ['participantes.update', $participantes->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION DE LOS PARTICIPANTES</legend>

	

	<div class="form-group">
		<label for="">Id</label>
		<input type="text" class="form-control" id="id" name="id" placeholder="Id" value="{{$participantes->id}}" readonly="readonly">
	</div>

	<?php  
	$id_evento = DB::table('eventos_general')->get();	
	?>

	<div class="form-group">
		<label for="">Id_Evento:</label>
<select name="id_evento" id="id_evento" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$participantes->id_evento}}">

	@foreach($id_evento as $row)

			@if ($participantes->id_evento===$row->id)	
			<option value="{{$row->id}}" selected>{{$row->id}}</option>
			@else
			<option value="{{$row->id}}">{{$row->id}}</option>
			@endif


	@endforeach
  

</select>
</div>


		<?php  
				$funcionario = DB::table('funcionarios')->get();	
				?>

	<div class="form-group">
		<label for="">Nombre Participante:</label>
<select name="id_nombres" id="id_nombres" class="form-control" required="required" placeholder="Seleccione un funcionario" value="{{$participantes->id_nombres}}">
	
		  @foreach($funcionario as $row)

  @if ($participantes->id_nombres===$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombresApellidos}}</option>

	@else
	<option value="{{$row->id}}" >{{$row->NombresApellidos}}</option>
	@endif

	@endforeach

</select>
</div>

	<?php  
				$tipoParticipacion = DB::table('tipo_participacion')->get();	
				?>

	<div class="form-group">
		<label for="">Tipo de Participacion:</label>
<select name="id_tipodeParticipacion" id="id_tipodeParticipacion" class="form-control" required="required" placeholder="Seleccione el Tipo" value="{{$participantes->id}}">
		
  @foreach($tipoParticipacion as $row)

  	@if($participantes->id_tipodeParticipacion===$row->id)
	<option value="{{$row->id}}" selected>{{$row->Tipos}}</option>
@else

<option value="{{$row->id}}">{{$row->Tipos}}</option>
@endif

	@endforeach
</select>
</div>

<div class="form-group">
		<label for="">Requiere_tiquetes_avion?</label>
		<select name="Requiere_tiquetes_avion" id="Requiere_tiquetes_avion" class="form-control" required="required" value="{{$participantes->Requiere_tiquetes_avion}}">
			
		@if($participantes->Requiere_tiquetes_avion===1)	
		<option value="1" selected>Si</option>
		<option value="0">No</option>

		@else
		<option value="0">No</option>
		<option value="1">Si</option>

		@endif

	
	</select>

	</div>

<?php  
				$tiquetes= DB::table('tiquetes')->get();	
				?>

<!--	<div class="form-group">
		<label for="">Id_Tiquetes</label>
<select name="id_tiquetes" id="id_tiquetes" class="form-control" required="required" placeholder="Seleccione el Tipo" value="{{$participantes->id_tiquetes}}">
		
  @foreach($tiquetes as $row)
  	@if($participantes->id_tiquetes===$row->id)
	<option value="{{$row->id}}" selected>{{$row->id}}</option>
	@else
	<option value="{{$row->id}}">{{$row->id}}</option>
	@endif
	@endforeach
</select>
</div>-->



<div class="form-group">
		<label for="">Requiere Hotel</label>
		<select name="Requiere_hotel" id="Requiere_hotel" class="form-control" required="required" value="{{$participantes->Requiere_hotel}}" >


		@if($participantes->Requiere_hotel===1)	
		<option value="1" selected>Si</option>
		<option value="0">No</option>

		@else
		<option value="1">Si</option>
		<option value="0">No</option>

		@endif
	</select>

	</div>


	</div>

	

	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}
<center>@include('adminlte::participantes.destroy')</center>

  </div>
</div>



@endsection


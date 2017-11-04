	{!! Form::open(['route' => ['participantesevento.update', $participantesevento->id],'method'=>'PATCH']) !!}
 	
 	<div class="form-group"><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
 		...
 	</div>
		<label for="">Elegir Plantilla</label>
			<select name="id_planilla" id="id_planilla" class="form-control" required="required" placeholder="">
				
		  @foreach($participantesevento as $row)
			<option value="{{$participantesevento->id}}">{{$participantesevento->NombrePlantilla}}</option>
			@endforeach
		</select>
</div>

<button class='btn btn-danger'>Actualizar</button>
{!! Form::close() !!}

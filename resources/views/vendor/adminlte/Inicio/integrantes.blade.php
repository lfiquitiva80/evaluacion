@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

@include('adminlte::layouts.menuevento')

<div class="container">
<div class="panel panel-default">
<div class="panel-body">


{!! Form::open(['route' => 'participantes.store', 'method'=>'POST','Class'=>'form-inline']) !!}



<?php 
				$id_user=Auth::user()->id;
				$tem=App\eventos_general::all()->where('id_user',$id_user)->last();

				?>
<legend> PARTICIPANTES </legend>
<center><?php echo "<b>Evento:</b> ".strtoupper($tem->NombredelEvento); ?></center>







<?php  
			$participante= DB::table('participantes')->where('Id_evento',$tem->id)->get();;	
			?>



<table class="table table-hover" >
<thead>
<tr>
  <th>id</th>
<th>Id_Evento</th>
<th>Participante</th>
<th>Tipo de Participación</th>
<th>Requiere_ticket?</th>

<!--<th>Fecha_hora==> IDA</th>
<th>Fecha_hora<== VUELTA</th>-->
<th>Requiere Hotel?</th>
<th>Edición</th>




</tr>
</thead>
<tbody>

@foreach($participante as $row)
<tr class="Info">

      <td>{{$row->id}}</td>
      <td>{{$row->id_evento}}</td>
      <td><?php $comment = App\funcionarios::find($row->id_nombres); echo $comment->NombresApellidos; ?> </td>
    <td><?php $comment = App\tipo_participacion::find($row->id_tipodeParticipacion); echo $comment->Tipos; ?></td>
      <td>@if($row->Requiere_tiquetes_avion===1) Si @else No @endif</td>
      
      
      <td>@if($row->Requiere_hotel===1)Si @else No @endif</td>
      

          

    <td><a href="{{ $url = route('participantes.edit', $row->id) }}" class="glyphicon glyphicon-pencil" aria-hidden="true">Edicion</a></td>
    <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


          


    </td></td>  
  
</tr>
</tbody>

@endforeach


</table>

<hr>					

<?php  
			$id_evento = DB::table('eventos_general')->get();	
			?>

<div class="form-group">
		<label for="">Id Evento:</label>
		<input type="text" class="form-control" name="id_evento" id="id_evento" placeholder="Input field" value="{{$tem->id}}" readonly="readonly" style="width:50px">
	</div>


	<?php  
			$funcionario = DB::table('funcionarios')->get();	
			?>

<div class="form-group">
	<label for="">Nombre Participante:</label>
<select name="id_nombres" id="id_nombres" class="form-control" required="required" placeholder="Seleccione un funcionario">
	
@foreach($funcionario as $row)
<option value="{{$row->id}}">{{$row->NombresApellidos}}</option>
@endforeach
</select>
</div>

<?php  
			$tipoParticipacion = DB::table('tipo_participacion')->get();	
			?>

<div class="form-group">
	<label for="">Tipo de Participacion:</label>
<select name="id_tipodeParticipacion" id="id_tipodeParticipacion" class="form-control" required="required" placeholder="Seleccione el Tipo">
	
@foreach($tipoParticipacion as $row)
<option value="{{$row->id}}">{{$row->Tipos}}</option>
@endforeach
</select>
</div>

<div class="form-group">
	<label for="">Requiere_tiquetes_avion?</label>
	<select name="Requiere_tiquetes_avion" id="Requiere_tiquetes_avion" class="form-control" required="required">
	<option value="1">Si</option>
	<option value="0">No</option>
</select>

</div>



<div class="form-group">
	<label for="">Requiere Hotel</label>
	<select name="Requiere_hotel" id="Requiere_hotel" class="form-control" required="required">
	<option value="1">Si</option>
	<option value="0">No</option>
</select>

</div>





<center><button type="submit" class="btn btn-primary" >Guardar</button>
<!--<button type="reset" class="btn btn-danger">Borrar</button>--></center><p>

{!! Form::close() !!}
<P>
	<HR>
	<center>	
	<a href="{{action('principalController@atematica')}}" class="btn btn-primary btn-danger">Atras</a>
	<a href="{{action('principalController@ticket')}}" class="btn btn-primary btn-success">Siguiente</a></center>

</div>
</div>
</div>
</div>
</div>

			

</div>
</body>
</html>

@endsection
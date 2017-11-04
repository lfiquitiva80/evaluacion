@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

@include('adminlte::layouts.menuevento')


 
<?php 
					$id_user=Auth::user()->id; ?>
					

 


<div class="container">
<h4><b><center>REGISTROS DE TIQUETES</h4></b>
</center>
<center>
					
					</center>



<table class="table table-hover" >
  <thead>
    <tr class="Success">
      <th>id</th>
      <th>id_evento</th>
      <th>Fecha</th>
      <th>Participante</th>
      <th>Cedula</th>
      <th>Fecha de Nacimiento</th>
      <th>Horario de Salida</th>
      <th>Pais_Origen</th>
      <th>Departamento Origen</th>
      <th>Ciudad_Origen</th>
      <th>Ciudad_extranjero</th>
      <th>Pais_Destino</th>
      <th>Departamento Destino</th>
      <th>Ciudad_Destino</th>
      <th>Ciudad_extranjero_destino</th>
     
    
      
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($tiquete as $row)
    <tr class="Success">

          <td >{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td>{{$row->Fecha}}</td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->NombresApellidos; ?> </td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->cedula; ?> </td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->Fecha_Nacimiento; ?> </td>
  
          <td>{{$row->Horario_Salida}}</td>
                  
                	  <td><?php $comment = App\paises::find($row->Pais_Origen); echo $comment->Pais; ?> </td>
   <td><?php $comment = App\departamento::find($row->Departamento_Origen); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Origen); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero}}</td>
          <td><?php $comment = App\paises::find($row->Pais_Destino); echo $comment->Pais; ?> </td>
  <td><?php $comment = App\departamento::find($row->Departamento_destino); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Destino); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero_destino}}</td>
          
          
          

          
          

              
 
        <td><a href="{{ $url = route('tiquetes.edit', $row->id) }}" class="glyphicon glyphicon-pencil" aria-hidden="true">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>

<hr>

{!! Form::open(['route' => 'tiquetes.store', 'method'=>'POST' , 'Class'=>'form-inline']) !!}
	

<!--	<div class="form-group">
		<label for="id" style="visibility:hidden">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" style="visibility:hidden">
	</div>-->


<?php  
$eventos = DB::table('eventos_general')->get();
?>
		
	<div class="form-group">
			<label for="">Id Evento: </label>
			<input type="text" class="form-control" name="id_evento" id="id_evento" placeholder="Input field" value="<?php echo $idtiquetes; ?>" readonly="readonly" style="width:50px">
		</div>
<div class="form-group">
		<label for="">Fecha:</label>
		<input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="" required>
	</div>
	<p>

<?php  
$paises = DB::table('paises')->get();
?>
		
	<div class="form-group">
		<label for="">Pais de Origen:</label>
<select name="Pais_Origen" id="Pais_Origen" class="form-control" required="required" placeholder="Seleccione una Ciudad" style="width:130px">
	
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
$departamento = DB::table('departamento')->get();
?>
<div class="form-group">
		<label for="">Departamento_Origen:</label>
<select name="Departamento_Origen" id="Departamento_Origen" class="form-control" required="required" placeholder="Seleccione un Departamento" style="width:150px">
		
  @foreach($departamento as $row)	
	
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	
	@endforeach

</select>
</div>


<?php  
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad Origen:</label>
<select name="Ciudad_Origen" id="Ciudad_Origen" class="form-control" required="required" placeholder="Seleccione una Ciudad" style="width:150px">
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
<select name="Pais_Destino" id="Pais_Destino" class="form-control" required="required" placeholder="Seleccione una Ciudad" style="width:130px">
	
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
$departamento = DB::table('departamento')->get();
?>
<div class="form-group">
		<label for="">Departamento_destino:</label>
<select name="Departamento_destino" id="Departamento_destino" class="form-control" required="required" placeholder="Seleccione un Departamento" style="width:150px">
		
  @foreach($departamento as $row)	
	
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	
	@endforeach

</select>
</div>


<?php  
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Ciudad_Destino:</label>
<select name="Ciudad_Destino" id="Ciudad_Destino" class="form-control" required="required" placeholder="Seleccione una Ciudad" style="width:150px">
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
		<label for="">Hora Salida:</label>
<select name="Horario_Salida" id="Horario_Salida" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
	<option value="Primera Hora">Primera Hora</option>
	<option value="Media Mañana">Media Mañana</option>
	<option value="Después de Almerzo">Después de Almerzo</option>
	<option value="Tarde">Tarde</option>

</select>
</div>


<?php  
$participantes = DB::table('participantes')->where('id_evento',$idtiquetes)
->Where('Requiere_tiquetes_avion', 1)
->get();


?>

<div class="form-group">
		<label for="">Participantes</label>
<select name="id_participante" id="id_participante" class="form-control" required="required" placeholder="Seleccione una Ciudad">

	 @foreach($participantes as $row)
	<option value="{{$row->id_nombres}}"><td><?php $comment = App\funcionarios::find($row->id_nombres); echo $comment->NombresApellidos; ?> </td>	</option>
	@endforeach
	<option value="PARTICIPANTE EXTERNO"></td>	</option>
</select>
</div>


<p>
	<center><button type="submit" class="btn btn-primary" >Guardar</button>
	<!--<button type="reset" class="btn btn-danger">Borrar</button>--></center><p>

{!! Form::close() !!}


	
	


</div>





@endsection
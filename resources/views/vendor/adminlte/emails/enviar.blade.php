@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container"></div>



<?php  
				$evento = DB::table('eventos_general')->where('id',$idcorreo)->get();
				?>



{!! Form::open(['action' => ['emailController@index'],'method'=>'GET']) !!}

 	


 		
 		<div class="container">
	<legend>CORREO</legend>


<div class="form-group">
		<label for="">De:</label>
		<input type="text" class="form-control" name="para" placeholder="Digite un Nombre del Evento" size="50"  readonly="readonly" value="eventos@ocyt.org.co">
	</div>

	
<div class="form-group">
		<label for="">Para:</label>
		<input type="text" class="form-control" name="de" placeholder="Digite un Nombre del Evento" size="50" value="lfiquitiva@ocyt.org.co" >
	</div>

	

	

	<div class="form-group">
		<label for="">Copia:</label>
		<input type="text" class="form-control" name="cc" placeholder="Digite un Nombre del Evento" size="50" value="{{ Auth::user()->email}}">
	</div>


	
		
		<input type="hidden" class="form-control" name="idcorreo" placeholder="Digite un Nombre del Evento" size="50" value=" <?php echo $idcorreo; ?>">



	  				
  
  @foreach($evento as $row)
	<div class="form-group">
		<label for="">Asunto:</label>
		<input type="text" class="form-control" name="asunto" placeholder="Digite un Lugar" value="Evento [{{$row->id}}]  {{$row->NombredelEvento}}   {{ Auth::user()->name}}"	>
	</div>


	@endforeach


	

	

<button class='btn btn-danger'>Enviar correo</button>



{!! Form::close() !!}
</div>




@endsection








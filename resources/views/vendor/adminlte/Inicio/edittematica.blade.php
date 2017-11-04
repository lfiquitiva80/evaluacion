
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


@include('adminlte::layouts.menuevento')

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>


	<div class="panel-body">
  
<div class="container">


<div class="panel panel-default">
	

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		

<!--=====================================
					= Funcion de traer el ultimo id evento  =
					======================================-->
					


					<?php

					$id_user=Auth::user()->id;

					
					 ?>
					
					<!--====  End of Section comment  ====-->
					<center>
					<legend>AREA TEMATICA</legend>
					
					</center>



		
		
<table class="table table-hover" >
  <thead>
    <tr>
      <th>id</th>
<th>Id_evento</th>
<th>Tematica</th>
<th>Edición</th>



    
    </tr>
  </thead>
  <tbody>

  @foreach($evento_areatematica as $row)
    <tr class="Success">

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>



         <td><?php $comment = App\area_tematica::find($row->id_areatematica); echo $comment->Tematica ?> </td>
         
      
 
        <td><a href="{{ $url = route('evento_areatematica.edit', $row->id) }}" class="glyphicon glyphicon-pencil" aria-hidden="true">Edición</a></td>
        <!--<td><a href="{{ $url = route('evento_areatematica.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
     @endforeach
  </tbody>




</table>
 
<hr>

{!! Form::open(['route' => 'editartematica', 'method'=>'POST','Class'=>'form-inline']) !!}

<div class="container">
	



	<!--<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" Name="id" placeholder="Input field">
	</div>-->
					

					
					


	
		<div class="form-group">
			<label for="">Id Evento:<?php echo $idtematica ?> </label>
			<input type="text" class="form-control" name="id_evento" id="id_evento" placeholder="Input field" value="<?php echo $idtematica ?>" style="visibility:hidden">
		</div>
	
		
				<?php  
				$area= DB::table('area_tematica')->get();	
				?>
	



	
	
	<div class="form-group">

		<label for="">id_areatematica:</label>
	<select name="id_areatematica" id="id_areatematica" class="form-control" required="required" placeholder="Seleccione una Ciudad">
	
  @foreach($area as $row)
	<option value="{{$row->id}}">{{$row->Tematica}}</option>
	@endforeach
	</select>
	</div>
	

	<p>
	
	<center><button type="submit" class="btn btn-primary">Guardar</button>
	<p>

	<hr>
<!--<button type="reset" class="btn btn-danger">Cancelar</button></center><p>-->
		{!! Form::close() !!}


</div>
</div>
</div>
</body>
</html>

@endsection

@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection



@section('main-content')

<div class="container-fluid">
<div class="row">
		<div class="col-md-8 col-md-offset-2">


			<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3 class="panel-title">REPORTES GENERALES</h3></center>
	</div>
	<div class="panel-body">
		<div class="list-group">
			<center>
		  <a href="{{ $url = route('excelproyectosall') }}" class="list-group-item" ><i class="fa fa-table" aria-hidden="true"></i>Todos los Proyectos y/o Artículos</a>
		  <a href="{{ $url = route('allusers') }}" class="list-group-item"><i class="fa fa-table" aria-hidden="true"></i>Todos los usuarios</a>
		  <a href="{{ $url = route('allevaluadores') }}" class="list-group-item"><i class="fa fa-table" aria-hidden="true"></i>Todos los evaluadores</a>
		  <a href="{{ $url = route('allcriterios') }}" class="list-group-item"><i class="fa fa-table" aria-hidden="true"></i>Todos los criterios de evaluación</a>
		  
			
			

		 
		</div>
			<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Reportes a Excel por plantillas
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{ $url = route('eloy') }}" class="list-group-item"><i class="fa fa-table" aria-hidden="true"></i>Reporte en Excel Proyecto Eloy</a></li>
    <li><a href="{{ $url = route('innpulsa') }}" class="list-group-item"><i class="fa fa-table" aria-hidden="true"></i>Reporte en Excel Proyecto Innpulsa</a></li>
    	
  </ul>
</div>
 </center>
	</div>

</div>

			
		</div>
	</div>	



</div>


<div class="container-fluid">
<div class="row">
		<div class="col-md-8 col-md-offset-2">


			<div class="panel panel-primary">
	<div class="panel-heading">
		<center><h3 class="panel-title">REPORTES POR FECHAS</h3></center>
	</div>
	<div class="panel-body">
		<div class="list-group">
			{!! Form::open(['route' => 'rangofechas', 'method'=>'GET', 'class'=>'navbar-form navbar-left']) !!}
 
      <div class="form-group">
  

  <select class="form-control" name="Fechas">
  
   
<option value="Fecha_Envio_a_Evaluador">Fecha_Envio_a_Evaluador</option>
<option value="Fecha_Aceptacion">Fecha_Aceptacion</option>
<option value="Fecha_inicio">Fecha_inicio</option>
<option value="Fecha_Devolucion_Evaluador">Fecha_Devolucion_Evaluador</option>
<option value="created_at">Fecha de Creación</option>
<option value="updated_at" >Fecha de Actualización</option>




  </select>
{!! Form::label('Fecha Inicial', 'Fecha Inicial', []) !!}  
{!! Form::date('Fecha_Inicial',null,['class'=>'form-control','placeholder'=>'Digite para buscar...', 'required'])!!}
{!! Form::label('Fecha Final', 'Fecha Final', []) !!}  
{!! Form::date('Fecha_Final',null,['class'=>'form-control','placeholder'=>'Digite para buscar...','required'])!!}

</div>  

 {!! Form::submit('Descargar', ['class'=>'btn btn-info'])!!}
 
{!! Form::close() !!}
		</div>
	</div>
</div>
			
		</div>
	</div>	



</div>





@endsection



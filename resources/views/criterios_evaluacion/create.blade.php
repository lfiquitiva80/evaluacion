
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <a href="{{ route('criterios_evaluacion.store') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'criterios_evaluacion.store', 'method'=>'POST','enctype'=>'multipart/form-data','File'=>true]) !!}
	<legend>CREAR criterios_evaluacion</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>
	
		<?php  $proyectos_articulos = DB::table('proyectos_articulos')->get();?>


	<div class="form-group">
			<label for="">	Proyecto y/o Articulos</label>
			<select name="id_proyectos_articulos" id="id_proyectos_articulos" class="form-control" required="required" placeholder="id_proyectos_articulos" >

			  @foreach($proyectos_articulos as $row)
					<option value="{{$row->id}}" >{{$row->id}} {{$row->DescripcionProyecto_Articulo}}</option>
				@endforeach
			</select>
	</div>


	<div class="form-group">
	<label for="NombreDepartamento">Descripción Evaluación</label>
	<input type="text" class="form-control" name="DescripcionEvaluacion" id="DescripcionEvaluacion" placeholder="Digite un nuevo DescripcionEvaluacion">
	</div>




	<div class="form-group">
	<label for="Desc_criterio_eval">CRITERIOS DE EVALUACIÓN</label>
	<textarea class="ckeditor" name="Desc_criterio_eval" id="Desc_criterio_eval" placeholder="Desc_criterio_eval"></textarea>
	</div>




	<div class="form-group">
		<label for="NombreDepartamento">Puntaje Máximo</label>
		<input type="text" class="form-control" name="Puntaje_Maximo" id="Puntaje_Maximo" placeholder="Digite un Puntaje_Maximo"  required>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Puntaje_evaluador</label>
		<input type="text" class="form-control" name="Puntaje_evaluador" id="Puntaje_evaluador" placeholder="Digite un Puntaje_evaluador" readonly >
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Deficiente</label>
		<input type="text" class="form-control" name="Deficiente" id="Deficiente" placeholder="Deficiente"  value="xx-xx puntos">
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Aceptable</label>
		<input type="text" class="form-control" name="Aceptable" id="Aceptable" placeholder="Aceptable"  value="xx-xx puntos">
	</div>

	<div class="form-group">
	<label for="Sobresaliente">Sobresaliente</label>
	<input type="text" class="form-control" name="Sobresaliente" id="Sobresaliente" placeholder="Sobresaliente" value="80 puntos" >
	</div>

	<div class="form-group">
	<label for="Muy_Bueno">Muy_Bueno</label>
	<input type="text" class="form-control" name="Muy_Bueno" id="Muy_Bueno" placeholder="Muy_Bueno" value="90 puntos" >
	</div>

	<div class="form-group">
	<label for="Sobresaliente">Excelente</label>
	<input type="text" class="form-control" name="Excelente" id="Excelente" placeholder="Sobresaliente" value="100 puntos" >
	</div>

	<!--<div class="form-group">
	<label for="Sobresaliente">Justificacion_Comentarios</label>
	<textarea class="ckeditor" name="Justificacion_Comentarios" id="Justificacion_Comentarios" placeholder="Desc_criterio_eval"></textarea>
	</div>

	<div class="form-group">
	<label for="Total_evaluacion">Total Evaluación</label>
	<input type="text" class="form-control" name="Total_evaluacion" id="Total_evaluacion" placeholder="Total_evaluacion" readonly>
	</div>

	<div class="form-group">
	<label for="concepto_final">concepto_final</label>
	<textarea class="ckeditor" name="concepto_final" id="concepto_final" placeholder="concepto_final"></textarea>
	</div>-->













	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

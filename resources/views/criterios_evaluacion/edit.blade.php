@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<center></center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">



{!! Form::open(['route' => ['criterios_evaluacion.update', $criterios_evaluacion->id],'method'=>'PATCH']) !!}

	<legend>EDITAR INFORMACION DE CRITERIOS DE EVALUACION</legend>

 <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>


	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$criterios_evaluacion->id}}">
	</div>


		<?php  $proyectos_articulos = DB::table('proyectos_articulos')->get();?>


	<div class="form-group">
			<label for="">	Proyecto y/o Artículos</label>
			<select name="id_proyectos_articulos" id="id_proyectos_articulos" class="form-control" required="required" placeholder="id_proyectos_articulos" >

			  @foreach($proyectos_articulos as $row)

			  		@if($criterios_evaluacion->id_proyectos_articulos==$row->id)
					<option value="{{$row->id}}" selected>{{$row->DescripcionProyecto_Articulo}}</option>
					@else
					<option value="{{$row->id}}">{{$row->DescripcionProyecto_Articulo}}</option>
					@endif

				@endforeach
			</select>
	</div>


	<div class="form-group">
	<label for="NombreDepartamento">Descripción Evaluación</label>
	<input type="text" class="form-control" name="DescripcionEvaluacion" id="DescripcionEvaluacion" placeholder="Digite un nuevo DescripcionEvaluacion" value="{{$criterios_evaluacion->DescripcionEvaluacion}}">
	</div>



	<div class="form-group">
	<label for="Desc_criterio_eval">CRITERIOS DE EVALUACIÓN</label>
	<textarea type="text" name="Desc_criterio_eval" id="Desc_criterio_eval" placeholder="Desc_criterio_eval" value="{{$criterios_evaluacion->Desc_criterio_eval}}" cols="148" rows="5">{{$criterios_evaluacion->Desc_criterio_eval}}</textarea>
	</div>




	<div class="form-group">
		<label for="NombreDepartamento">Puntaje Máximo (*) Campo Obligatorio</label>
		<input type="text" class="form-control" name="Puntaje_Maximo" id="Puntaje_Maximo" placeholder="Digite un Puntaje_Maximo" value="{{$criterios_evaluacion->Puntaje_Maximo}}" required>
	</div>

	<div class="form-group">
		<label for="">Ayuda para el Evaluador</label>
		<textarea class="ckeditor" name="ayuda" id="ayuda" placeholder="Ayuda para el evaluador" cols="148" rows="5">{{$criterios_evaluacion->ayuda}}</textarea>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Puntaje_evaluador</label>
		<input type="text" class="form-control" name="Puntaje_evaluador" id="Puntaje_evaluador" placeholder="Digite un Puntaje_evaluador" value="{{$criterios_evaluacion->Puntaje_evaluador}}" readonly>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Deficiente</label>
		<input type="text" class="form-control" name="Deficiente" id="Deficiente" placeholder="Deficiente"  value="{{$criterios_evaluacion->Deficiente}}">
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Aceptable</label>
		<input type="text" class="form-control" name="Aceptable" id="Aceptable" placeholder="Aceptable" value="{{$criterios_evaluacion->Aceptable}}"  >
	</div>

	<div class="form-group">
	<label for="Sobresaliente">Sobresaliente</label>
	<input type="text" class="form-control" name="Sobresaliente" id="Sobresaliente" placeholder="Sobresaliente"  value="{{$criterios_evaluacion->Sobresaliente}}" >
	</div>

	<div class="form-group">
	<label for="Muy_Bueno">Muy_Bueno</label>
	<input type="text" class="form-control" name="Muy_Bueno" id="Muy_Bueno" placeholder="Muy_Bueno" value="90 puntos" value="{{$criterios_evaluacion->Muy_Bueno}}" >
	</div>

	<div class="form-group">
	<label for="Sobresaliente">Excelente</label>
	<input type="text" class="form-control" name="Excelente" id="Excelente" placeholder="Excelente" value="100 puntos" value="{{$criterios_evaluacion->Excelente}}" >
	</div>


	<!--<div class="form-group">
	<label for="Sobresaliente">Justificacion_Comentarios</label>
	<textarea class="ckeditor" name="Justificacion_Comentarios" id="Justificacion_Comentarios" placeholder="Desc_criterio_eval" value="{{$criterios_evaluacion->Justificacion_Comentarios}}">{{$criterios_evaluacion->Justificacion_Comentarios}}</textarea>
	</div>


	<div class="form-group">
	<label for="Total_evaluacion">Total Evaluación</label>
	<input type="text" class="form-control" name="Total_evaluacion" id="Total_evaluacion" placeholder="Total_evaluacion" value="{{$criterios_evaluacion->Total_evaluacion}}" >
	</div>

	<div class="form-group">
	<label for="concepto_final">concepto_final</label>
	<textarea class="ckeditor" name="concepto_final" id="concepto_final" placeholder="concepto_final" value="{{$criterios_evaluacion->concepto_final}}">{{$criterios_evaluacion->concepto_final}}</textarea>
	</div>-->



	<center><button type="submit" class="btn btn-primary" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

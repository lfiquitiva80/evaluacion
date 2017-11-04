
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

   <a href="{{ route('proyectos_articulos.store') }}" class="btn btn-primary" >Regresar</a><p>

{!! Form::open(['route' => 'proyectos_articulos.store', 'method'=>'POST','enctype'=>'multipart/form-data','File'=>true]) !!}
	<legend>Crear proyectos_articulos</legend>


	<div class="panel panel-success" >
		<div class="panel-default">
			<h3 class="panel-title"></h3>
		</div>
		<div class="form-group">
			<label for="id">id</label>
			<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
		</div>
		
		<div class="form-group">
			<label for="">DescripcionProyecto_Articulo</label>
			<input type="text" class="form-control" name="DescripcionProyecto_Articulo" id="DescripcionProyecto_Articulo" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo">
		</div>
		
			<?php  $evaluadores = DB::table('evaluadores')->get();?>
				
		
		<div class="form-group">
				<label for="">Id_Evaluador:</label>
				<select name="id_evaluador" id="id_evaluador" class="form-control" required="required" placeholder="" >
						
				  @foreach($evaluadores as $row)
						<option value="{{$row->id}}" >{{$row->id}} {{$row->NombreEvaluador}}</option>
					@endforeach
				</select>
		</div>
		
		
		<div class="form-group">
		<label for="">Categoria</label>
		<select name="categoria" id="categoria" class="form-control">
			<option value="1" selected>Investigador Consolidado</option>
			<option value="0">Investigador en Formación</option>
		</select>
		</div>
		
		<div class="form-group">
		<label for="">Área</label>
		<select name="area" id="area" class="form-control">
			<option value="Ingeniería" selected>Ingeniería</option>
			<option value="Ciencias">Ciencias</option>
			.<option value="Salud">Salud</option>
			<option value="Ciencias Sociales">Ciencias Sociales</option>
			<option value="Desarrollo Tecnológico e Innovación">Desarrollo Tecnológico e Innovación</option>
		</select>
		</div>
		
		<div class="form-group">
		<label for="">plantilla</label>
		<select name="plantilla" id="plantilla" class="form-control">
			<option value="PlantillaEloy" selected>PlantillaEloy</option>
			<option value="PlantillaInnpulsa">PlantillaInnpulsa</option>
		</select>
		</div>
		
		<div class="form-group"><label for="">Objetivo</label><input type="text" class="form-control" name="Objetivo" id="Objetivo" placeholder="Objetivo"></div>
		
		
		
		
		<div class="form-group">
			<label for="">Proyecto PDF (*) Campo Obligatorio e importante para el evaluador</label>
			<input type="file" class="form-control" name="proyecto_pdf" id="proyecto_pdf" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" required>
		</div>
		
		<div class="form-group" >
			<label for="">El proyecto al evaluador se paga?</label>
		<select name="sepaga" id="sepaga"  class="form-control" required="required"  >
			<option value="Con Pago" selected>Con Pago</option>
			<option value="Sin Pago">Sin Pago</option>
		</select>
		</div>
		

		<div class="form-group" >
			<label for="">Precio Pago al Investigador o Evaluador</label>
			<input type="text" class="form-control" name="pago_evaluador" id="pago_evaluador" placeholder="Digite un pago_evaluador"  >
		</div>

	
		
		<div class="form-group">
			<label for="">Proponente</label>
			<input type="text" class="form-control" name="CoordinadorProyecto_Articulo" id="CoordinadorProyecto_Articulo" placeholder="Digite un CoordinadorProyecto_Articulo"  >
		</div>
	</div>

	

	<div class="row">
        <div class="col-md-12">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class=""></i>

              <h3 class="box-title">Datos Adicionales para otros proyectos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div style="width:100%;">

    <div class="form-group">
		<label for="">Grupo_Investigacion</label>
		<input type="text" class="form-control" name="Grupo_Investigacion" id="Grupo_Investigacion" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo">
	</div>
          	
             
    <div class="form-group">
		<label for="">Formato de evaluación diligenciado</label>
		<input type="file" class="form-control" name="calificacion_proyecto" id="calificacion_proyecto" placeholder="Digite un nuevo 	calificacion_proyecto">
	</div>

	<div class="form-group">
		<label for="">Documento de confidencialidad</label>
		<input type="file" class="form-control" name="doc_confidencialidad" id="doc_confidencialidad" placeholder="Digite un nuevo 	img_proyecto">
	</div> 


	<div class="form-group">
		<label for="">Imagen del proyecto</label>
		<input type="file" class="form-control" name="img_proyecto" id="img_proyecto" placeholder="Digite un nuevo 	img_proyecto">
	</div>       

	<div class="form-group"><label for="">Nombre_convocatoria</label><input type="text" class="form-control" name="Nombre_convocatoria" id="Nombre_convocatoria" placeholder="Nombre_convocatoria"></div>

	<div class="form-group"><label for="">Codigo_convocatoria</label><input type="text" class="form-control" name="Codigo_convocatoria" id="Codigo_convocatoria" placeholder="Codigo_convocatoria">
	</div>

	<div class="form-group"><label for="">Presuesto</label><input type="text" class="form-control" name="Presuesto" id="Presuesto" placeholder="Presuesto"></div><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
		...
	</div>

	

	<div class="form-group"><label for="">Resumen_Proyecto</label><input type="text" class="form-control" name="Resumen_Proyecto" id="Resumen_Proyecto" placeholder="Resumen_Proyecto"></div>

	<div class="form-group"><label for="">Duracion_proyecto</label><input type="text" class="form-control" name="Duracion_proyecto" id="Duracion_proyecto" placeholder="Duracion_proyecto"></div>

	<div class="form-group"><label for="">Valor_confinaciado_solicitado</label><input type="text" class="form-control" name="Valor_confinaciado_solicitado" id="Valor_confinaciado_solicitado" placeholder="Valor_confinaciado_solicitado"></div>

	<div class="form-group"><label for="">Valor_Contrapartida_Propuesto</label><input type="text" class="form-control" name="Valor_Contrapartida_Propuesto" id="Valor_Contrapartida_Propuesto" placeholder="Valor_Contrapartida_Propuesto"></div>

	<div class="form-group"><label for="">Valor_Total_Poryecto</label><input type="text" class="form-control" name="Valor_Total_Poryecto" id="Valor_Total_Poryecto" placeholder="Valor_Total_Poryecto"></div>

	<div class="form-group"><label for="">Fecha_Envio_a_Evaluador</label><input type="date" class="form-control" name="Fecha_Envio_a_Evaluador" id="Fecha_Envio_a_Evaluador" placeholder="Fecha_Envio_a_Evaluador"></div>

	<div class="form-group"><label for="">Fecha_Devolucion_Evaluador</label><input type="date" class="form-control" name="Fecha_Devolucion_Evaluador" id="Fecha_Devolucion_Evaluador" placeholder="Fecha_Devolucion_Evaluador"></div>

	<div class="form-group"><label for="">Observaciones</label><input type="text" class="form-control" name="Observaciones" id="Observaciones" placeholder="Observaciones"></div>

	<div class="form-group"><label for="">Metas_Indicadores_Resultados_esperados</label><input type="text" class="form-control" name="Metas_Indicadores_Resultados_esperados" id="Metas_Indicadores_Resultados_esperados" placeholder="Metas_Indicadores_Resultados_esperados"></div>


	<?php  
$pais = DB::table('paises')->get();
?>

<div class="form-group">
		<label for="">Pais:</label>
<select name="Pais" id="Pais" class="form-control" placeholder="Seleccione una Ciudad" >
		
  @foreach($pais as $row)
	@if(343===$row->id)
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
		<label for="">Departamento_Intervención</label>
<select name="Departamento_Intervencioin" id="Departamento_Intervencioin" class="form-control" placeholder="Seleccione un Departamento" >
		
  @foreach($departamento as $row)	
	
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	
	@endforeach

</select>

</div>

<?php
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Municipio_Intervencion</label>
<select name="Municipio_Intervencion" id="Municipio_Intervencion" class="form-control" placeholder="Seleccione una Ciudad">
	  @foreach($municipios as $row)
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endforeach
</select>
</div>

	<div class="form-group"><label for="">Sectores_Usuarios_Finales</label><input type="text" class="form-control" name="Sectores_Usuarios_Finales" id="Sectores_Usuarios_Finales" placeholder="Sectores_Usuarios_Finales"></div>

	<div class="form-group"><label for="">Subsectores_Usuarios_Finales</label><input type="text" class="form-control" name="Subsectores_Usuarios_Finales" id="Subsectores_Usuarios_Finales" placeholder="Subsectores_Usuarios_Finales"></div>

	<div class="form-group"><label for="">Num_Usuarios_Finales</label><input type="text" class="form-control" name="Num_Usuarios_Finales" id="Num_Usuarios_Finales" placeholder="Num_Usuarios_Finales"></div>

	</div>
            </div>
            <!-- /.box-body-->
          </div>


	




	

	

	

	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


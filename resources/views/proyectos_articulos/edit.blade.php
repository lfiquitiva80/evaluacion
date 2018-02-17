@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<center>@include('proyectos_articulos.destroy')</center>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  	<div class="col-md-8 col-md-offset-2">

  
  
{!! Form::open(['route' => ['proyectos_articulos.update', $proyectos_articulos->id],'method'=>'PATCH','enctype'=>'multipart/form-data','File'=>true]) !!}

	<legend>EDITAR INFORMACION PROYECTOS ARTICULOS</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>
	

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly"  value="{{$proyectos_articulos->id}}">
	</div>

	<div class="form-group">
		<label for="">DescripcionProyecto_Articulo</label>
		<input type="text" class="form-control" name="DescripcionProyecto_Articulo" id="DescripcionProyecto_Articulo" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->DescripcionProyecto_Articulo}}" onchange="Mayusculas()">
	</div>

	<div class="form-group">
			<label for="">CODIGO</label>
			<input type="text" class="form-control" name="CODIGO" id="CODIGO" placeholder="Digite un CODIGO" value="{{$proyectos_articulos->CODIGO}}">
		</div>

		<div class="form-group">
			<label for="">CARPETA  / ARCHIVO O INFORME</label>
			<input type="text" class="form-control" name="CARPETA_ARCHIVO_O_INFORME" id="CARPETA_ARCHIVO_O_INFORME" placeholder="Digite un CARPETA_ARCHIVO_O_INFORME" value="{{$proyectos_articulos->CARPETA_ARCHIVO_O_INFORME}}" >
		</div>

		<div class="form-group">
			<label for="">FACULTAD</label>
			<input type="text" class="form-control" name="Facultad" id="Facultad" placeholder="Digite Facultad"  value="{{$proyectos_articulos->Facultad}}">
		</div>

		<div class="form-group">
			<label for="">DEPENDENCIA</label>
			<input type="text" class="form-control" name="DEPENDENCIA" id="DEPENDENCIA" placeholder="Digite DEPENDENCIA" value="{{$proyectos_articulos->DEPENDENCIA}} ">
		</div>

		<div class="form-group">
			<label for="">CONVOCATORIA</label>
			<input type="text" class="form-control" name="CONVOCATORIA" id="CONVOCATORIA" placeholder="Digite CONVOCATORIA" value="{{$proyectos_articulos->CONVOCATORIA}} ">
		</div>

		<div class="form-group">
			<label for="">AÑO</label>
			<input type="text" class="form-control" name="ANIO" id="ANIO" placeholder="Digite ANIO"  value="{{$proyectos_articulos->ANIO}}">
		</div>

		<div class="form-group">
			<label for="">INVESTIGADOR PRINCIPAL</label>
			<input type="text" class="form-control" name="INVESTIGADOR_PRINCIPAL" id="INVESTIGADOR_PRINCIPAL" placeholder="Digite INVESTIGADOR PRINCIPAL" value="{{$proyectos_articulos->INVESTIGADOR_PRINCIPAL}}">
		</div>

		<div class="form-group">
			<label for="">POSIBLES EVALUADORES</label>
			<input type="text" class="form-control" name="POSIBLES_EVALUADORES" id="POSIBLES_EVALUADORES" placeholder="Digite INVESTIGADOR PRINCIPAL" value="{{$proyectos_articulos->POSIBLES_EVALUADORES}}">
		</div>
		<?php  $evaluadores = DB::table('evaluadores')->orderBy('NombreEvaluador', 'asc')->get();?>
	<div class="form-group">
		<label for="">EVALUADOR DESIGNADO</label>
		<select name="id_evaluador" id="id_evaluador" class="form-control" required="required" placeholder="" >
		

		  @foreach($evaluadores as $row)
	  	@if ($proyectos_articulos->id_evaluador==$row->id)
			<option value="{{$row->id}}" selected>{{$row->NombreEvaluador}}</option>
		@else
		<option value="{{$row->id}}">{{$row->NombreEvaluador}}</option>
		@endif

			@endforeach
		</select>
</div>


	
	

	<div class="form-group">
	<label for="">plantilla</label>
	<select name="plantilla" id="plantilla" class="form-control" value="{{$proyectos_articulos->plantilla}}">
		@if ($proyectos_articulos->plantilla=="PlantillaEloy")
		<option value="PlantillaEloy" selected>Plantilla Eloy</option>
		<option value="PlantillaInnpulsa">Plantilla Innpulsa</option>
		<option value="PlantillaUtadeo">Plantilla Utadeo</option>
		@elseif ($proyectos_articulos->plantilla=="PlantillaInnpulsa")
		<option value="PlantillaEloy" >PlantillaEloy</option>
		<option value="PlantillaInnpulsa" selected>PlantillaInnpulsa</option>
		<option value="PlantillaUtadeo">Plantilla Utadeo</option>
		@else
		<option value="PlantillaEloy" >PlantillaEloy</option>
		<option value="PlantillaInnpulsa" >PlantillaInnpulsa</option>
		<option value="PlantillaUtadeo" selected>Plantilla Utadeo</option>

		@endif
	</select>
	</div>

	
		


	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="">Proyecto PDF</label>
		<input type="file" class="form-control" name="proyecto_pdf" id="proyecto_pdf" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->proyecto_pdf}}">
		@if(!empty($proyectos_articulos->proyecto_pdf))
		<i class="fa fa-check-square" aria-hidden="true"> </i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> </i>
		@endif
	</div>

	<div class="form-group" >
			<label for="">El proyecto al evaluador se paga?</label>
		<select name="sepaga" id="sepaga"  class="form-control" value="{{$proyectos_articulos->sepaga}}">

			@if($proyectos_articulos->sepaga=="Con Pago")
			<option value="Con Pago" selected>Con Pago</option>
			<option value="Sin Pago">Sin Pago</option>
			@else

			<option value="Con Pago">Con Pago</option>
			<option value="Sin Pago" selected>Sin Pago</option>

			@endif
		</select>
		</div>

		

	<div class="form-group">
		<label for="">Coordinador/Proponente</label>
		<input type="text" class="form-control" name="CoordinadorProyecto_Articulo" id="CoordinadorProyecto_Articulo" placeholder="Digite un CoordinadorProyecto_Articulo" value="{{$proyectos_articulos->CoordinadorProyecto_Articulo}}" >
	</div>

	<div class="form-group">
			<label for="">Centro de Costos</label>
			<input type="text" class="form-control" name="centro_costos" id="centro_costos" placeholder="Digite un Centro de Costos" value="{{$proyectos_articulos->centro_costos}}" >
		</div>
	
	

	<div class="form-group">
		<label for="">Precio Pago al Investigador o Evaluador</label>
		<input type="text" class="form-control" name="pago_evaluador" id="pago_evaluador" placeholder="Digite un pago_evaluador"  value="{{$proyectos_articulos->pago_evaluador}}">
	</div>

	<div class="form-group" >
			<label for="">Precio en letras</label>
			<input type="text" class="form-control" name="precioletras" id="precioletras" placeholder="Digite el precio en letras ejemplo Docientos mil pesos Moneda Corriente" value="{{$proyectos_articulos->precioletras}}">
		</div>


			
			

	
		



	


		</div>
	</div>


	<center><button type="submit" class="btn btn-info ">Actualizar</button>
	</center>
	<p>

	<div class="row">
        <div class="col-md-12">
          <!-- Line chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class=""></i>

              <h3 class="box-title">Datos Adicionales para otros proyectos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" id="ocultarproyectoedit">
              <div style="width:100%;">
             
    <div class="form-group">
    	<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Calificacion proyecto</label>
		<input type="file" class="form-control" name="calificacion_proyecto" id="calificacion_proyecto" placeholder="Digite un nuevo 	calificacion_proyecto" value="{{$proyectos_articulos->calificacion_proyecto}}">
		@if(!empty($proyectos_articulos->calificacion_proyecto))
		<i class="fa fa-check-square" aria-hidden="true"> </i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> </i>
		@endif
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#ocultarproyectoedit').hide();
		});
	</script>

	<div class="form-group">
		<label for="NombreDepartamento">Grupo_Investigacion</label>
		<input type="text" class="form-control" name="Grupo_Investigacion" id="Grupo_Investigacion" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->Grupo_Investigacion}}">
	</div>

	<div class="form-group">
	<label for="">Categoria</label>
	<input type="text" class="form-control" name="categoria" id="categoria" placeholder="Digite un categoria" value="{{$proyectos_articulos->categoria}}" >
	</div>


	<div class="form-group">
		<label for="">Área</label>
		<input type="text" class="form-control" name="area" id="area" placeholder="Digite un área" value="{{$proyectos_articulos->area}}" >
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="">Imagen del proyecto</label>
		<input type="file" class="form-control" name="img_proyecto" id="img_proyecto" placeholder="Digite un nuevo 	img_proyecto" value="{{$proyectos_articulos->img_proyecto}}">
		@if(!empty($proyectos_articulos->img_proyecto))
		<i class="fa fa-check-square" aria-hidden="true"> </i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> </i>
		@endif

	</div> 

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="">Documento de confidencialidad</label>
		<input type="file" class="form-control" name="doc_confidencialidad" id="doc_confidencialidad" placeholder="Digite un nuevo 	doc_confidencialidad" value="{{$proyectos_articulos->doc_confidencialidad}}">
		@if(!empty($proyectos_articulos->doc_confidencialidad))
		<i class="fa fa-check-square" aria-hidden="true"> </i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> </i>
		@endif
	</div>       

	<div class="form-group"><label for="">Nombre_convocatoria</label><input type="text" class="form-control" name="Nombre_convocatoria" id="Nombre_convocatoria" placeholder="Nombre_convocatoria" value="{{$proyectos_articulos->Nombre_convocatoria}}"
></div>
<div class="form-group"><label for="">Codigo_convocatoria</label><input type="text" class="form-control" name="Codigo_convocatoria" id="Codigo_convocatoria" placeholder="Codigo_convocatoria" value="{{$proyectos_articulos->Codigo_convocatoria}}"
></div>
<div class="form-group"><label for="">Presuesto</label><input type="text" class="form-control" name="Presuesto" id="Presuesto" placeholder="Presuesto" value="{{$proyectos_articulos->Presuesto}}"
></div>
<div class="form-group"><label for="">Objetivo</label><input type="text" class="form-control" name="Objetivo" id="Objetivo" placeholder="Objetivo" value="{{$proyectos_articulos->Objetivo}}"
></div>
<div class="form-group"><label for="">Resumen_Proyecto</label><input type="text" class="form-control" name="Resumen_Proyecto" id="Resumen_Proyecto" placeholder="Resumen_Proyecto" value="{{$proyectos_articulos->Resumen_Proyecto}}"
></div>
<div class="form-group"><label for="">Duracion_proyecto</label><input type="text" class="form-control" name="Duracion_proyecto" id="Duracion_proyecto" placeholder="Duracion_proyecto" value="{{$proyectos_articulos->Duracion_proyecto}}"
></div>
<div class="form-group"><label for="">Valor_confinaciado_solicitado</label><input type="text" class="form-control" name="Valor_confinaciado_solicitado" id="Valor_confinaciado_solicitado" placeholder="Valor_confinaciado_solicitado" value="{{$proyectos_articulos->Valor_confinaciado_solicitado}}"
></div>
<div class="form-group"><label for="">Valor_Contrapartida_Propuesto</label><input type="text" class="form-control" name="Valor_Contrapartida_Propuesto" id="Valor_Contrapartida_Propuesto" placeholder="Valor_Contrapartida_Propuesto" value="{{$proyectos_articulos->Valor_Contrapartida_Propuesto}}"
></div>
<div class="form-group"><label for="">Valor_Total_Poryecto</label><input type="text" class="form-control" name="Valor_Total_Poryecto" id="Valor_Total_Poryecto" placeholder="Valor_Total_Poryecto" value="{{$proyectos_articulos->Valor_Total_Poryecto}}"
></div>
<div class="form-group"><label for="">Fecha_Envio_a_Evaluador</label><input type="text" class="form-control" name="Fecha_Envio_a_Evaluador" id="Fecha_Envio_a_Evaluador" placeholder="Fecha_Envio_a_Evaluador" value="{{$proyectos_articulos->Fecha_Envio_a_Evaluador}}"
></div>
<div class="form-group"><label for="">Fecha_Devolucion_Evaluador</label><input type="text" class="form-control" name="Fecha_Devolucion_Evaluador" id="Fecha_Devolucion_Evaluador" placeholder="Fecha_Devolucion_Evaluador" value="{{$proyectos_articulos->Fecha_Devolucion_Evaluador}}"
></div>
<div class="form-group"><label for="">Observaciones</label><input type="text" class="form-control" name="Observaciones" id="Observaciones" placeholder="Observaciones" value="{{$proyectos_articulos->Observaciones}}"
></div>
<div class="form-group"><label for="">Metas_Indicadores_Resultados_esperados</label><input type="text" class="form-control" name="Metas_Indicadores_Resultados_esperados" id="Metas_Indicadores_Resultados_esperados" placeholder="Metas_Indicadores_Resultados_esperados" value="{{$proyectos_articulos->Metas_Indicadores_Resultados_esperados}}"
></div>

<?php  
$pais = DB::table('paises')->get();

?>



<div class="form-group">
		<label for="">Pais:</label>
<select name="Pais" id="Pais" class="form-control" required="required" placeholder="Seleccione una Ciudad" value="{{$proyectos_articulos->Pais}}" >
		
  @foreach($pais as $row)
  	@if ($proyectos_articulos->Pais==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Pais}}</option>
	@else
	<option value="{{$row->id}}" >{{$row->Pais}}</option>

	@endif

	@endforeach
</select>
</div>


	<?php  $departamento = DB::table('departamento')->get();	?>

<div class="form-group">
		<label for="">Departamento_Intervención</label>
<select name="Departamento_Intervencioin" id="Departamento_Intervencioin" class="form-control" required="required" placeholder="Seleccione un Departamento" value="{{$proyectos_articulos->Departamento_Intervencioin}}">
		
  @foreach($departamento as $row)


	@if ($proyectos_articulos->Departamento_Intervencioin==$row->id)	
	<option value="{{$row->id}}" selected>{{$row->NombreDepartamento}}</option>
	@else
	<option value="{{$row->id}}">{{$row->NombreDepartamento}}</option>
	@endif
	
	@endforeach

</select>
</div>

	<?php  
$municipios = DB::table('municipios')->get();
?>

<div class="form-group">
		<label for="">Municipio_Intervencion:</label>
<select name="Municipio_Intervencion" id="Municipio_Intervencion" class="form-control" required="required" placeholder="Seleccione una Ciudad" value="{{$proyectos_articulos->Municipio_Intervencion}}">

  @foreach($municipios as $row)
    @if ($proyectos_articulos->Municipio_Intervencion==$row->id)
	<option value="{{$row->id}}" selected>{{$row->Municipio}}</option>
	@else
	<option value="{{$row->id}}">{{$row->Municipio}}</option>
	@endif


	@endforeach
</select>
</div>
<div class="form-group"><label for="">Sectores_Usuarios_Finales</label><input type="text" class="form-control" name="Sectores_Usuarios_Finales" id="Sectores_Usuarios_Finales" placeholder="Sectores_Usuarios_Finales" value="{{$proyectos_articulos->Sectores_Usuarios_Finales}}"
></div>
<div class="form-group"><label for="">Subsectores_Usuarios_Finales</label><input type="text" class="form-control" name="Subsectores_Usuarios_Finales" id="Subsectores_Usuarios_Finales" placeholder="Subsectores_Usuarios_Finales" value="{{$proyectos_articulos->Subsectores_Usuarios_Finales}}"
></div>
<div class="form-group"><label for="">Num_Usuarios_Finales</label><input type="text" class="form-control" name="Num_Usuarios_Finales" id="Num_Usuarios_Finales" placeholder="Num_Usuarios_Finales" value="{{$proyectos_articulos->Num_Usuarios_Finales}}"
></div>

            </div>
            <!-- /.box-body-->
          </div>


	

	<center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>
</div>


@endsection


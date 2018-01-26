@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  
  
{!! Form::open(['route' => ['proyectos_articulos.update', $proyectos_articulos->id],'method'=>'PATCH','enctype'=>'multipart/form-data','File'=>true]) !!}

	<legend>SUBIR LOS DOCUMENTOS CORRESPONDIENTES</legend>

 <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

	<div class="panel panel-success">
		<div class="panel-primary">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">

		{{$proyectos_articulos->DescripcionProyecto_Articulo}}		
	
	<div class="form-group">
		
		<input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly"  value="{{$proyectos_articulos->id}}">
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="DescripcionProyecto_Articulo" id="DescripcionProyecto_Articulo" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->DescripcionProyecto_Articulo}}">
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="categoria" id="categoria" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->categoria}}">
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="plantilla" id="plantilla" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->plantilla}}">
	</div>
	<div class="form-group">
		
		<input type="hidden" class="form-control" name="sepaga" id="sepaga" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->sepaga}}">
	</div>
		
	<div class="form-group">
		
		<input type="hidden" class="form-control" name="area" id="area" placeholder="Digite un área" value="{{$proyectos_articulos->area}}" >
	</div>



	<div class="form-group">
		
		<input type="hidden" class="form-control" name="img_proyecto" id="img_proyecto" placeholder="Digite un nuevo 	img_proyecto" value="{{$proyectos_articulos->img_proyecto}}">
	</div>



	<div class="form-group">
		
		<input type="hidden" class="form-control" name="proyecto_pdf" id="proyecto_pdf" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->proyecto_pdf}}">
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="CoordinadorProyecto_Articulo" id="CoordinadorProyecto_Articulo" placeholder="Digite un CoordinadorProyecto_Articulo" value="{{$proyectos_articulos->CoordinadorProyecto_Articulo}}" >
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="pago_evaluador" id="pago_evaluador" placeholder="Digite un pago_evaluador"  value="{{$proyectos_articulos->pago_evaluador}}">
	</div>

	<div class="form-group">
		
		<input type="hidden" class="form-control" name="id_evaluador" id="id_evaluador" placeholder="Digite un pago_evaluador"  value="{{$proyectos_articulos->id_evaluador}}">
	</div>


			


	<div class="form-group">
	
		<input type="hidden" class="form-control" name="Grupo_Investigacion" id="Grupo_Investigacion" placeholder="Digite un nuevo 	DescripcionProyecto_Articulo" value="{{$proyectos_articulos->Grupo_Investigacion}}">
	</div>


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
    	<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Calificacion proyecto</label>
		<input type="file" class="form-control" name="calificacion_proyecto" id="calificacion_proyecto" placeholder="Digite un nuevo 	calificacion_proyecto" value="{{$proyectos_articulos->calificacion_proyecto}}">
	</div>
	</div> 

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="">Documento de confidencialidad</label>
		<input type="file" class="form-control" name="doc_confidencialidad" id="doc_confidencialidad" placeholder="Digite un nuevo 	doc_confidencialidad" value="{{$proyectos_articulos->doc_confidencialidad}}">
	</div>
	</div> 

	 <div class="form-group">
    	<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Cuenta de Cobro</label>
		<input type="file" class="form-control" name="doc_cuenta_cobro" id="doc_cuenta_cobro" placeholder="Suba una cuenta de cobro" value="{{$proyectos_articulos->calificacion_proyecto}}">
	</div>
	</div>       

	<div class="form-group"><input type="hidden" class="form-control" name="Nombre_convocatoria" id="Nombre_convocatoria" placeholder="Nombre_convocatoria" value="{{$proyectos_articulos->Nombre_convocatoria}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="centro_costos" id="centro_costos" placeholder="Nombre_convocatoria" value="{{$proyectos_articulos->Nombre_convocatoria}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Codigo_convocatoria" id="Codigo_convocatoria" placeholder="Codigo_convocatoria" value="{{$proyectos_articulos->Codigo_convocatoria}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Presuesto" id="Presuesto" placeholder="Presuesto" value="{{$proyectos_articulos->Presuesto}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Objetivo" id="Objetivo" placeholder="Objetivo" value="{{$proyectos_articulos->Objetivo}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Resumen_Proyecto" id="Resumen_Proyecto" placeholder="Resumen_Proyecto" value="{{$proyectos_articulos->Resumen_Proyecto}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Duracion_proyecto" id="Duracion_proyecto" placeholder="Duracion_proyecto" value="{{$proyectos_articulos->Duracion_proyecto}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Valor_confinaciado_solicitado" id="Valor_confinaciado_solicitado" placeholder="Valor_confinaciado_solicitado" value="{{$proyectos_articulos->Valor_confinaciado_solicitado}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Valor_Contrapartida_Propuesto" id="Valor_Contrapartida_Propuesto" placeholder="Valor_Contrapartida_Propuesto" value="{{$proyectos_articulos->Valor_Contrapartida_Propuesto}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Valor_Total_Poryecto" id="Valor_Total_Poryecto" placeholder="Valor_Total_Poryecto" value="{{$proyectos_articulos->Valor_Total_Poryecto}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Fecha_Envio_a_Evaluador" id="Fecha_Envio_a_Evaluador" placeholder="Fecha_Envio_a_Evaluador" value="{{$proyectos_articulos->Fecha_Envio_a_Evaluador}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Fecha_Devolucion_Evaluador" id="Fecha_Devolucion_Evaluador" placeholder="Fecha_Devolucion_Evaluador" value="{{$proyectos_articulos->Fecha_Devolucion_Evaluador}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Observaciones" id="Observaciones" placeholder="Observaciones" value="{{$proyectos_articulos->Observaciones}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Metas_Indicadores_Resultados_esperados" id="Metas_Indicadores_Resultados_esperados" placeholder="Metas_Indicadores_Resultados_esperados" value="{{$proyectos_articulos->Metas_Indicadores_Resultados_esperados}}"
></div>

<div class="form-group"><input type="hidden" class="form-control" name="Pais" id="Metas_Indicadores_Resultados_esperados" placeholder="Pais" value="{{$proyectos_articulos->Pais}}"
></div>

<div class="form-group"><input type="hidden" class="form-control" name="Departamento_Intervencioin" id="Departamento_Intervencioin" placeholder="Departamento_Intervencioin" value="{{$proyectos_articulos->Departamento_Intervencioin}}"
></div>

<div class="form-group"><input type="hidden" class="form-control" name="Municipio_Intervencion" id="Municipio_Intervencion" placeholder="Departamento_Intervencioin" value="{{$proyectos_articulos->Municipio_Intervencion}}"
></div>



	

	

<div class="form-group"><input type="hidden" class="form-control" name="Sectores_Usuarios_Finales" id="Sectores_Usuarios_Finales" placeholder="Sectores_Usuarios_Finales" value="{{$proyectos_articulos->Sectores_Usuarios_Finales}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Subsectores_Usuarios_Finales" id="Subsectores_Usuarios_Finales" placeholder="Subsectores_Usuarios_Finales" value="{{$proyectos_articulos->Subsectores_Usuarios_Finales}}"
></div>
<div class="form-group"><input type="hidden" class="form-control" name="Num_Usuarios_Finales" id="Num_Usuarios_Finales" placeholder="Num_Usuarios_Finales" value="{{$proyectos_articulos->Num_Usuarios_Finales}}"
></div>

            </div>
            <!-- /.box-body-->
          </div>


	

	<center><button type="submit" class="btn btn-success pull-right" >Actualizar</button>
	</center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


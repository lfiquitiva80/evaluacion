@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">
  
<div class="container">
{!! Form::open(['route' => 'evaluacion_par.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE PROYECTOS Y ARTICULOS</h4></b></center>


<a href="{{ $url = route('evaluacion_par.create') }}" class="btn btn-primary">Registar Nuevos evaluacion_par</a>




<p>
<div style="overflow-y: hidden;">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id</td>
      <td>Nombre del la Evaluación</td>
      <!--<td>produccion</td>
      <td>justificacion_produccion</td>
      <td>calidad_proyecto</td>
      <td>justificacion_calidad_proyecto</td>
      <td>impacto_potencial</td>
      <td>justificacion_impacto_potencial</td>
      <td>capacidad_desarrollo_proyecto</td>
      <td>justificacion_capacidad_desarrollo_proyecto</td>
      <td>presupuesto</td>
      <td>justificacion_presupuesto</td>
      <td>trabajo_colaborativo</td>
      <td>justificacion_trabajo_colaborativo</td>
      <td>formacion_recurso_humano</td>
      <td>justificacion_formacion_recurso_humano</td>
      <td>Total_evaluacion</td>
      <td>concepto_final</td>
      <td>recomendacion_proyecto</td>-->
      <td>Acción</td>


     
   
    </tr>
  </thead>
  <tbody>

  @foreach($evaluacion_par as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->DescripcionEvaluacion}}</td>
          <!--<td>{{$row->produccion}}
          <td>{{$row->justificacion_produccion}}
          <td>{{$row->calidad_proyecto}}
          <td>{{$row->justificacion_calidad_proyecto}}
          <td>{{$row->impacto_potencial}}
          <td>{{$row->justificacion_impacto_potencial}}
          <td>{{$row->capacidad_desarrollo_proyecto}}
          <td>{{$row->justificacion_capacidad_desarrollo_proyecto}}
          <td>{{$row->presupuesto}}
          <td>{{$row->justificacion_presupuesto}}
          <td>{{$row->trabajo_colaborativo}}
          <td>{{$row->justificacion_trabajo_colaborativo}}
          <td>{{$row->formacion_recurso_humano}}
          <td>{{$row->justificacion_formacion_recurso_humano}}
          <td>{{$row->Total_evaluacion}}
          <td>{{$row->concepto_final}}
          <td>{{$row->recomendacion_proyecto}}-->

          

         

          
          

              
 
        <td><a href="{{ $url = route('evaluacion_par.edit', $row->id) }}" class="btn btn-primary">Edicion</a>
        <a href="{{ $url = route('pdfevaluacion', $row->id) }}" class="btn btn-info" target="_blank" title="pdfevaluacion">PDF</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
</div>



</div>

</div>
</div>



@endsection


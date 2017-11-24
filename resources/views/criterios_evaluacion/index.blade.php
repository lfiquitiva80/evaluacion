  @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<div class="container">

   <div class="panel panel-primary">
   <div class="panel-heading">
     <h3 class="panel-title">Listar proyectos</h3>
   </div>
   <div class="panel-body">
     {!! Form::open(['route' => 'criterios_evaluacion.index', 'method'=>'GET']) !!}

<!--{!! Form::select('listaproyectos', $listaproyectos, Null, ['id' => 'listaproyectos', 'class' => 'form-control']) !!}-->

  <select name="listaproyectos" id="listaproyectos" class="form-control" >
    @foreach($listaproyectos as $row)
    @if($id==$row->id)
    <option value="{{$row->id}}" selected>{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
    @else
    <option value="{{$row->id}}" >{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
    @endif


    @endforeach
  </select>


 <br>
  <center>

    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i> Consultar</button>

  {!! Form::close() !!}
  </div>
   </div>
 </div>






  <div class="panel-body">

<div class="container">



{!! Form::open(['route' => 'criterios_evaluacion.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS CRITERIOS DE EVALUACION</h4></b></center>


<a href="{{ $url = route('criterios_evaluacion.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Registrar Nuevos criterios evaluación</a>

<p>
<div class="table-responsive">
<table class="table table-striped table-bordered" cellspacing="0" width="100%" >
  <thead>
    <tr>
      <td>  <i class="fa fa-clipboard" aria-hidden="true"></i></td>
      <td>  id  </td>
      <td>  proyectos artículos  </td>
      <td>  Descripción Evaluación </td>
      <td>  Preguntas Asignadas </td>
           <!--<td>  Desc_criterio_eval  </td>
      <td>  Puntaje_Maximo  </td>
      <td>  Puntaje_evaluador </td>
      <td>  Deficiente  </td>
      <td>  Aceptable </td>
      <td>  Sobresaliente </td>
      <td>  Justificacion_Comentarios </td>
      <td>  Total</td>
      <td>  Concepto Final </td>-->

      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($criterios_evaluacion as $row)
    <tr>
          <td><a href="{{ $url = route('duplicar',$row->id) }}" ><i class="fa fa-clipboard" aria-hidden="true"></i></a>
        </td>
          <td>{{$row->id}}</td>
          <td><?php $comment = App\proyectos_articulos::find($row->id_proyectos_articulos); echo $comment->DescripcionProyecto_Articulo ?>
          </td>
          <td>{{$row->DescripcionEvaluacion}}</td>
          <td><?php echo $row->Desc_criterio_eval; ?></td>

          <!--<td>{{$row->Desc_criterio_eval}}</td>
          <td>{{$row->Puntaje_Maximo}}</td>
          <td>{{$row->Puntaje_evaluador}}</td>
          <td>{{$row->Deficiente}}</td>
          <td>{{$row->Aceptable}}</td>
          <td>{{$row->Sobresaliente}}</td>
          <td>{{$row->Justificacion_Comentarios}}</td>
          <td>{{$row->Total_evaluacion}}</td>
          <td>{{$row->concepto_final}}</td>-->


        <td><a href="{{ $url = route('criterios_evaluacion.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a>
</td>
    <td>@include('criterios_evaluacion.destroy')</td>




        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>


</div>

</div>
</div>

<center>{{$criterios_evaluacion->links() }}</center>

@endsection

  @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Sistema para duplicar preguntas a otro proyecto</div>
                <div class="panel-body">

  
  {!! Form::open(['route' => 'preguntasduplicar', 'method'=>'GET']) !!}

   <br>
  <div><small> <strong>COPIAR LAS PREGUNTAS DEL SIGUIENTE PROYECTO A</small></strong> </div>
  <hr>
  <!--{!! Form::select('listaproyectos', $listaproyectos, Null, ['id' => 'listaproyectos', 'class' => 'form-control']) !!}-->

 <select name="listaproyectos" id="listaproyectos" class="form-control" >

  @foreach($listaproyectos2 as $row)
   <option value="{{$row->id}}">{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
  @endforeach
 </select>  

  <br>
  <div><small> <strong>COPIAR AL SIGUIENTE PROYECTO</small></strong> </div>
  <hr>
   <!--{!! Form::select('listaproyectos2', $listaproyectos, Null, ['id' => 'listaproyectos2', 'class' => 'form-control']) !!}-->
<select name="listaproyectos2" id="listaproyectos2" class="form-control" >

  @foreach($listaproyectos2 as $row)
   <option value="{{$row->id}}">{{$row->id}}  {{$row->DescripcionProyecto_Articulo}}</option>
  @endforeach
 </select> 

   <br>
  
  <hr>
  <center>
  {!! Form::submit('EJECUTAR', ['class' => 'btn btn-danger']) !!}
  </center>
  {!! Form::close() !!}




</div>
</div>
</div>   
</div>
</div>
</div>   

      
        


  <!--<div class="panel-body">
  
<div class="container">




 
<div class="panel panel-default">
<h4><b><center>REGISTROS CRITERIOS DE EVALUACION</h4></b></center>


<a href="{{ $url = route('preguntas.create') }}" class="btn btn-primary">Registar Nuevos preguntas</a>


{!! Form::open(['route' => ['preguntasduplicar', 1], 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<p>

<table class="table table-striped table-bordered" cellspacing="0" width="100%" >
  <thead>
    <tr>
      <td>  <i class="fa fa-clipboard" aria-hidden="true"></i></td>
      <td>  id  </td>
      <td>  id_proyectos_articulos  </td>
      <td>  DescripcionEvaluacion </td>
      <!~~<td>  Desc_criterio_eval  </td>
      <td>  Puntaje_Maximo  </td>
      <td>  Puntaje_evaluador </td>
      <td>  Deficiente  </td>
      <td>  Aceptable </td>
      <td>  Sobresaliente </td>
      <td>  Justificacion_Comentarios </td>
      <td>  Total</td>
      <td>  Concepto Final </td>~~>

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
          <!~~<td>{{$row->Desc_criterio_eval}}</td>
          <td>{{$row->Puntaje_Maximo}}</td>
          <td>{{$row->Puntaje_evaluador}}</td>
          <td>{{$row->Deficiente}}</td>
          <td>{{$row->Aceptable}}</td>
          <td>{{$row->Sobresaliente}}</td>
          <td>{{$row->Justificacion_Comentarios}}</td>
          <td>{{$row->Total_evaluacion}}</td>
          <td>{{$row->concepto_final}}</td>~~>

 
        <td><a href="{{ $url = route('preguntas.edit',$row->id) }}" alt="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <a href="{{ $url = route('duplicar',$row->id) }}" ><i class="fa fa-clipboard" aria-hidden="true"></i></a>
        </td>
        <!~~<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>~~>


              


        </td></td>  
      
    </tr>
  </tbody>

 @endforeach


</table>
 


  </center><p>



</div>

</div>
</div>
{!! Form::close() !!}
-->
@endsection




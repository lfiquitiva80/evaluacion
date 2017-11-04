  @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">
  
<div class="container">
{!! Form::open(['route' => 'proyectos_articulos.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE PROYECTOS Y ARTICULOS</h4></b></center>


<a href="{{ $url = route('proyectos_articulos.create') }}" class="btn btn-primary">Registar Nuevos proyectos_articulos</a>




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Descripción Proyecto Articulo</td>
      <td>  Proyecto (Documentos)</td>
      <td>  Doc. Calificación</td>
      <td>  Doc. Confidencialidad</td>
      <td>  id_evaluador</td>
      <td>  Evaluación Dinámica</td>
      <td>  Imprimir</td>
      <!--<td>  Evaluacion_par</td>-->
      <td>  Finalizar Evaluación</td>
      <!--<td>  Acción </td>-->

     
   
    </tr>
  </thead>
  <tbody>

  @foreach($proyectos_articulos as $row)
    <tr>

                    <td>{{$row->id}}</td>
          <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>

          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>

          @if (!empty($row->calificacion_proyecto))
          <td><a href="{{$row->calificacion_proyecto}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo de CALIFICACION" ><span class="glyphicon glyphicon-cloud-download" aria-hidden="true" ></span></a>
          @else
          <td> 
             
          <a href="{{ $url = route('subircal', $row->id) }}" class="btn btn-info"  data-toggle="tooltip" data-placement="top" title="Cargar o Subir Documento de CALIFICACION"><span class="glyphicon glyphicon-open-file" aria-hidden="true" ></span></a>
            
          </td>
          @endif

           @if (!empty($row->doc_confidencialidad))
          <td><a href="{{$row->doc_confidencialidad}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo de Confidencialidad"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></a>
          @else
          <td> 
             
          <a href="{{ $url = route('subircal', $row->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Subir o cargar el Documento de Confidencialidad, !Hace falta!"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></a>
            
          </td>
          @endif


          </td>
          <td>  
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}" data-toggle="tooltip" data-placement="top" title="Aqui puede subir su HV, Rut, Actualizar su información">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> 
          </a></td>
          <td><!--<a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary">Inicio Evaluación</a>-->
          @if ($row->plantilla=="PlantillaEloy")  
          <a href="{{ $url = route('preguntaseloy', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada">Inicio Evaluación Eloy</a> 
          @else
          <a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada">Inicio Evaluación Innpulsa</a> 
          @endif</td>

          <td>
             @if ($row->plantilla=="PlantillaEloy")  
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-default" target="_blank" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a> 
          @else
          <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default" target="_blank" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          @endif
          </td> 



         
  <td>
  @if (empty($row->Fecha_inicio))
  Falta iniciar la evaluación
  @else

<a class="btn btn-default" data-toggle="modal" href='#modal-{{$row->id}}' data-placement="top" title="Click para Finalizar al evaluación">Finalizar Evaluación</a>
<div class="modal fade" id="modal-{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Finalización de la Evaluación</h4>
      </div>
      <div class="modal-body">
       <lu>
        <li><strong>Antes de Finalizar verificar lo siguiente:</strong></li>
        <li>1.Revisar que hallá cargado el documento de Calificación del Proyecto</li>
        <li>2. Revisar que hallá cargado el Documento de Confidencialidad</li>
        <li>3. Revisar que hallá Cargado su Hoja de Vida, Rut , etc.., para el pago</li>
        <li>4. Revisar que hallá terminado la Evaluación.</li>

       </lu>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ $url = route('finalevaluacion',$row->id) }}" class="btn btn-default" >Finalizar la evaluacion</a>
      </div>
    </div>
  </div>
</div>
@endif
          </td>
 
        
          
          

         

          
          

              
 
        <!--<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" class="btn btn-success">Edicion</a></td>-->
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
</div>
<center>{{ $proyectos_articulos->links() }}</center>

</div>

</div>
</div>



@endsection


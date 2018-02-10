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


<a href="{{ $url = route('proyectos_articulos.create') }}" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i> Registar Nuevos proyectos_articulos</a>




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Descripción Proyecto Articulo</td>
      <td>  Proyecto (Documentos)</td>
      <!--<td>  Cuenta de Cobro</td>-->
      <td>  Doc. Confidencialidad</td>
      <td>  Evaluador</td>
      <td>  Evaluación Dinámica</td>
      <td>  Imprimir</td>
      <!--<td>  Evaluacion_par</td>-->
      <td>  Finalizar Evaluación</td>



    </tr>
  </thead>
  <tbody>

  @foreach($proyectos_articulos as $row)
    <tr>

          <td>{{$row->id}}</td>
         <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" >{{$row->DescripcionProyecto_Articulo}}</a>
          

          @if (!empty($row->proyecto_pdf))
          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>
          @else
          <td>Falta por subir</td>
          @endif

            <?php   $confidencialidad= App\confidencialidad::where('proyectos_articulos_id', $row->id)->first(); //echo $confidencialidad->doyfe;     ?>
          <td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('confidencialidad.show', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" ><i class="fa fa-search" aria-hidden="true"></i> Confidencialidad aceptada.</a>
              @else 
          <a href="{{ $url = route('crearconfidencialidad', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" ><i class="fa fa-bell" aria-hidden="true"></i> Aceptar Confidencialidad</a>    
          
              @endif
          </td>
        
        

          </td>
          <td >
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}" data-toggle="tooltip" data-placement="top" title="Subir o Actualizar sus Documentos">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
         </a></td>
         @if (count($confidencialidad)>=1)
          <td ><!--<a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary">Inicio Evaluación</a>-->
          @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('preguntaseloy', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Ver Evaluación</a>
          @else
          <a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Ver Evaluación</a>
          @endif</td>

          <td>
             @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          @else
          <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default"  data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          @endif
          </td>
          @else
          <td>No puede iniciar porque no ha aceptado la confidencialidad</td>          
          <td>No puede iniciar porque no ha aceptado la confidencialidad</td>
          @endif


          






  <td>
  @if (empty($row->Fecha_inicio))
  Falta iniciar la evaluación
  @else

<!--<a class="btn btn-default" data-toggle="modal" href='#modal-{{$row->id}}' data-placement="top" title="Click para Finalizar al evaluación">Finalizar Evaluación</a>
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
        <li>1.Revisar que haya cargado el documento de Calificación del Proyecto</li>
        <li>2. Revisar que haya cargado el Documento de Confidencialidad</li>
        <li>3. Revisar que haya Cargado su Hoja de Vida, RUT actualizado O Pasaporte , etc.., para el pago</li>
        <li>4. Revisar que haya terminado la Evaluación.</li>
      
        

       </lu>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ $url = route('finalevaluacion',$row->id) }}" class="btn btn-default" id="confirmar" >Finalizar la evaluación</a>
      </div>
    </div>
  </div>
</div>-->

<a class="btn btn-default" data-toggle="modal" href='#pago-{{$row->id}}' data-placement="top" title="Click para Confirmar Pago">Confirmación Pago y Terminación evaluación</a>
<div class="modal fade" id="pago-{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Confirmación Pago y Terminación evaluación</h4>
      </div>
      <div class="modal-body">
       <lu>
        <li><strong>Si o No acepta el pago de {{$row->pago_evaluador}} , por el proyecto {{$row->DescripcionProyecto_Articulo}} </strong></li>
      </lu>

      <lu>
        <strong>Antes de Finalizar verificar lo siguiente:</strong>
        <hr>
        <li> Revisar que haya Cargado su Hoja de Vida, RUT actualizado O Pasaporte , etc.., para el pago</li>
        <li>Revisar que haya terminado la Evaluación.</li>
      
        

       </lu>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ $url = route('siAceptoElPago',$row->id) }}" class="btn btn-default" id="confirmar" >Si acepto el pago</a>
        <a href="{{ $url = route('noAceptoElPago',$row->id) }}" class="btn btn-default" id="confirmar" >No acepto el pago</a>
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

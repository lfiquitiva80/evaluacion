
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


Fecha de Ingreso al sistema  {{ $date }}
<div class="container">


  <h2>Bienvenido <strong><?php $comment = App\tratamiento_carta::find(Auth::user()->id_tratamiento); echo $comment->Titulo ?> {{ Auth::user()->name }} </strong>

</h2>

<div class="jumbotron">
  <div class="container">
    <h1>PROCESO DE EVALUACIÓN DE PROYECTOS Y/O ARTÍCULOS</h1>
    <p>A continuación encontrará los siguientes pasos, para la correspondiente evaluación del Proyecto y/o artículo que fue aceptada en la notificación enviada por email</p>
    <p>

    </p>
  </div>
</div>




 <!-- <div class="panel-group" id="accordion">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">EVALUACIACIONES EN PROCESO</a>
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse">
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  DescripcionProyecto_Articulo</td>
      <td>  Proyecto PDF</td>
      <td>  Soporte Calificación</td>
      <td>  id_evaluador</td>
      <td>  Evaluacion_Dinámica</td>
      <!~~<td>  Evaluacion_par</td>~~>
      <td>  Finalizar Evaluación</td>
      <!~~<td>  Acción </td>~~>



    </tr>
  </thead>
  <tbody>

  @foreach($proyectos_articulos as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>
          <td><a href="{{$row->proyecto_pdf}}" target="_blank"><i class="fa fa-file-o" aria-hidden="true"></i></a></td>
          @if (!empty($row->calificacion_proyecto))
          <td><a href="{{$row->calificacion_proyecto}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a>
          @else
          <td>

          <a href="{{ $url = route('subircal', $row->id) }}" class="btn btn-warning">Falta por subir la Calificación</a>

          </td>



          @endif


          </td>
          <td>
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
          </a></td>
          <td><!~~<a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary">Inicio Evaluación</a>~~>
          <a href="{{ $url = route('preguntaseloy', $row->id) }}" class="btn btn-primary">Inicio Evaluación Eloy</a>
         </a> </td>



  <td>
  @if (empty($row->Fecha_inicio))
  Falta iniciar la evaluación
  @else

<a class="btn btn-default" data-toggle="modal" href='#modal-{{$row->id}}'>Finalizar Evaluación</a>
<div class="modal fade" id="modal-{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Finalización de la Evaluación</h4>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tenetur minus eligendi officia commodi voluptatibus non distinctio dignissimos, fugit quo culpa modi rem, quos totam nam at. Explicabo, praesentium, deserunt.
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












        <!~~<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" class="btn btn-success">Edicion</a></td>~~>
        <!~~<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>~~>





        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

</div>

    <!~~</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">DOCUMENTOS</a>
        </h4>
      </div>
     <div id="collapse2" class="panel-collapse collapse">



<p>En el siguiente link puede subir los siguientes documentos:


<li>1.  Hoja de vida (si ya la remitió por favor omita el envío del documento).</li>
<li>2.  Certificación bancaria en la que se registre la cuenta en la que se le consignará.</li>
<li>3.  Cuenta de Cobro por valor de $200.000 con número de cédula (diligenciar <a href="<?php $url = asset('imgplantillas/MODELO.doc'); echo $url; ?>" target="_blank" >Carta Modelo</a> adjunto y enviarlo con su firma).</li>
<li>4.  Copia de la cédula de ciudadanía en formato pdf. </li>
<li>5.  RUT actualizado.</li>

<br>



<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  id_users  </td>
      <td>  Cedula  </td>
      <td>  Documentos</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($evaluadores as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td><?php $comment = App\User::find($row->id_users); echo $comment->name;  ?></td>

          <td>{{$row->Cedula}}</td>
          <td><a href="{{$row->HV}}"> {{$row->HV}}</a><br>
          <a href="{{$row->Cedula_pdf}}">{{$row->Cedula_pdf}}</a><br>
          <a href="{{$row->Certificado_Bancario}}">{{$row->Certificado_Bancario}}</a><br>
          <a href="{{$row->cuentacobro}}">{{$row->cuentacobro}}</a><br>
          <a href="{{$row->Rut}}">{{$row->Rut}}</a><br></td>








        <td><a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!~~<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>~~>





        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>
~~>
<div class="panel-group" id="accordion">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">HISTORICOS</a>
        </h4>
      </div>

      <div id="collapse3" class="panel-collapse collapse">
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>

      <td>  DescripcionProyecto_Articulo</td>
      <td>  Proyecto PDF</td>

      <td>  id_evaluador</td>
      <td>  Evaluacion_par</td>
      <!~~<td>  Acción </td>~~>



    </tr>
  </thead>
  <tbody>

  @foreach($historico as $row)
    <tr>

          <td>{{$row->id}}</td>

          <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>
          <td><a href="{{$row->proyecto_pdf}}" class="btn btn-info" target="_blank">Descargar</a></td>

          <td>
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
          </a></td>

          <td>
          <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default">Vista</a>
         </a>
          <a href="{{ $url = route('pdfevaluacion', $row->id) }}" class="btn btn-default" target="_blank">PDF</a>

          <a href="{{ $url = route('pdfevaluacion2', $row->id) }}" class="btn btn-default" target="_blank">PDF2</a>
        </td>










        <!~~<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" class="btn btn-success">Edicion</a></td>~~>
        <!~~<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>~~>





        </td></td>

    </tr>
  </tbody>




  @endforeach


</table>
</div>

</div>






        </div>
      </div>
    </div>


  </div>






</div>
-->

<div class="container">
  <!--<h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>-->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Evaluaciones">Evaluaciones</a></li>
    <li><a data-toggle="tab" href="#Históricos">Históricos</a></li>
    <li><a data-toggle="tab" href="#Documentos">Documentos</a></li>
    <!--<li><a data-toggle="tab" href="#Finalizar">Finalizar</a></li>-->
  </ul>

  <div class="tab-content">
    <div id="Evaluaciones" class="tab-pane fade in active">
      <h3>Evaluaciones</h3>
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
         <!-- <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>-->
          <td>{{$row->DescripcionProyecto_Articulo}}</td>

          @if (!empty($row->proyecto_pdf))
          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>
          @else
          <td>Falta por subir</td>
          @endif

          @if (!empty($row->calificacion_proyecto))
          <td><a href="{{$row->calificacion_proyecto}}"  data-toggle="tooltip" data-placement="top" title="Descargar el archivo de CALIFICACION" ><span class="glyphicon glyphicon-cloud-download" aria-hidden="true" ></span></a>
          @else
          <td>

          <a href="{{ $url = route('subircal', $row->id) }}" class="btn btn-info"  data-toggle="tooltip" data-placement="top" title="Cargar o Subir Documento de CALIFICACION"><span class="glyphicon glyphicon-open-file" aria-hidden="true" ></span></a>

          </td>
          @endif

           @if (!empty($row->doc_confidencialidad))
          <td><a href="{{$row->doc_confidencialidad}}" data-toggle="tooltip" data-placement="top" title="Descargar el archivo de Confidencialidad"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></a>
          @else
          <td>

          <a href="{{ $url = route('subircal', $row->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Subir o cargar el Documento de Confidencialidad, !Hace falta!"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></a>

          </td>
          @endif


          </td>
          <td>
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}" data-toggle="tooltip" data-placement="top" title="Subir o Actualizar sus Documentos">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
          </a></td>
          <td><!--<a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary">Inicio Evaluación</a>-->
          @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('preguntaseloy', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Ver Evaluación</a>
          @else
          <a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Ver Evaluación</a>
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
        <li>1.Revisar que haya cargado el documento de Calificación del Proyecto</li>
        <li>2. Revisar que haya cargado el Documento de Confidencialidad</li>
        <li>3. Revisar que haya Cargado su Hoja de Vida, RUT actualizado O Pasaporte , etc.., para el pago</li>
        <li>4. Revisar que haya terminado la Evaluación.</li>

       </lu>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ $url = route('finalevaluacion',$row->id) }}" class="btn btn-default" >Finalizar la evaluación</a>
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
    </div>
    <div id="Históricos" class="tab-pane fade">
      <h3>Históricos</h3>
      <div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>

      <td>  Descripción Proyecto Artículo</td>
      <td>  Proyecto PDF</td>

      <td>  id_evaluador</td>
      <td>  Evaluacion_par</td>
      <td>  Certificado</td>
      <!--<td>  Acción </td>-->



    </tr>
  </thead>
  <tbody>

  @foreach($historico as $row)
    <tr>

          <td>{{$row->id}}</td>

          <!--<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>-->
          <td>{{$row->DescripcionProyecto_Articulo}}</td>

          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>

          <td>
          <a href="{{ $url = route('evaluadores.edit', $row->id_evaluador) }}">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
          </a></td>

          <td>
          <!--<a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default">Vista</a>
         </a>-->
           @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-primary" target="_blank">Vista Eloy</a>
          @else
          <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default" target="_blank">Vista Innpulsa</a>
          @endif


          <!--<a href="{{ $url = route('pdfevaluacion', $row->id) }}" class="btn btn-default" target="_blank">PDF</a>

          <a href="{{ $url = route('pdfevaluacion2', $row->id) }}" class="btn btn-default" target="_blank">PDF2</a>-->

         <!-- @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('pdfevaluacion2', $row->id) }}" class="btn btn-primary">PDF Eloy</a>
          @else
          <a href="{{ $url = route('pdfevaluacion', $row->id) }}" class="btn btn-primary">PDF Innpulsa</a>
          @endif
-->
        </td>
        <td>
          <a href="{{ $url = route('certificadoeloy', $row->id) }}" class="btn btn-info">Certificado</a>
        </td>









        <!--<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" class="btn btn-success">Edicion</a></td>-->
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->





        </td></td>

    </tr>
  </tbody>




  @endforeach


</table>
</div>
    </div>
    <div id="Documentos" class="tab-pane fade">
      <h3>Documentos</h3>

      <div class="table-responsive">
<p>Reciba un cordial saludo. Agradecemos el servicio prestado. Atentamente me permito solicitar los siguientes documentos para gestionar el pago:


<li>1.  Hoja de vida (si ya la remitió por favor omita el envío del documento).</li>
<li>2.  Certificación bancaria en la que se registre la cuenta en la que se le consignará.</li>
<li>3.  Cuenta de Cobro por valor a cobrar con número de cédula (diligenciar <a href="<?php $url = asset('imgplantillas/MODELO.doc'); echo $url; ?>" target="_blank" >Carta Modelo</a> adjunto y enviarlo con su firma).</li>
<li>4.  Copia de la cédula de ciudadanía en formato pdf. </li>
<li>5.  RUT actualizado O Pasaporte.</li>

<br>

<center><strong><small>Nota: Si el icono esta en <font color="red">Rojo</font>, falta por subir el documento. Por favor dar click en Edición o en los iconos. </small></strong></center>
<div class="table-responsive">


<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Evaluador</td>
      <td>  Firma Digital</td>
      <td>  Hoja de Vida</td>
      <td>  Documento de identidad en PDF</td>
      <td>  Certificado Bancario</td>
      <td>  Cuenta de Cobro</td>
      <td>  Rut / Pasaporte </td>

      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($evaluadores as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td><?php $comment = App\User::find($row->id_users); echo $comment->name;  ?></td>
          <td><a href="{{$row->FirmaDigital}}" target="_blank">
            @if(!empty($row->FirmaDigital))
              <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-check" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <td>
            <a href="{{$row->HV}}" target="_blank">
            @if(!empty($row->HV))
              <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </td>
           <td>
          <a href="{{$row->Cedula_pdf}}" target="_blank">
             @if(!empty($row->Cedula_pdf))
              <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-modal-window" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <td><a href="{{$row->Certificado_Bancario}}" target="_blank">
             @if(!empty($row->Certificado_Bancario))
              <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <td><a href="{{$row->cuentacobro}}" target="_blank">
            @if(!empty($row->cuentacobro))
              <span class="glyphicon glyphicon-usd" aria-hidden="true"></span></a>
            @else
               <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </a></td>

          <td>
          <a href="{{$row->Rut}}" target="_blank">
            @if(!empty($row->Rut))
              <span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-link" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </td>


        <td><a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edición</a></td>






        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>
</div>

    </div>
  <div id="Finalizar" class="tab-pane fade">
      <h3>Finalizar</h3>



      </div>





@endsection

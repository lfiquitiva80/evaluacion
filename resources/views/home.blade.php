
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



Fecha de Ingreso al sistema  {{ $date }}  <p id="reloj"></p>
<div class="container">


  <h2>Bienvenido <strong><?php $comment = App\tratamiento_carta::find(Auth::user()->id_tratamiento); echo $comment->Titulo ?> {{ Auth::user()->name }} </strong>

</h2>

<div class="jumbotron" >
  <div class="container">
    <h1>PROCESO DE EVALUACIÓN DE PROYECTOS Y/O ARTÍCULOS</h1>
    <p>A continuación encontrará los siguientes pasos, para la correspondiente evaluación del Proyecto y/o artículo que fue aceptada en la notificación enviada por email</p>
    <p>
    <!--<p><a class="btn btn-primary btn-lg" href="{{asset('documentos/Instrucciones para el Evaluador.pdf')}}" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Instructivo para el Evaluador</a></p>-->  

    </p>
  </div>
</div>



<div class="container">
  <!--<h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>-->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Evaluaciones">Evaluaciones por Iniciar</a></li>
    	
    <li><a data-toggle="tab" href="#Documentos">Documentos para Gestionar el Pago</a></li>
    <li><a data-toggle="tab" href="#Financiera">Cuenta de Cobro en Linea</a></li>
    <li><a data-toggle="tab" href="#Históricos">Evaluaciones Terminadas</a></li>
    <!--<li><a data-toggle="tab" href="#cuentadecobro">Cuenta de Cobro</a></li>-->
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
         <!-- <td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" target="_blank">{{$row->DescripcionProyecto_Articulo}}</a></td>-->
          <td>{{$row->DescripcionProyecto_Articulo}}</td>

          @if (!empty($row->proyecto_pdf))
          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>
          @else
          <td>Falta por subir</td>
          @endif

            <?php   $confidencialidad= App\confidencialidad::where('proyectos_articulos_id', $row->id)->first(); //echo $confidencialidad->doyfe;     ?>
          <td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('confidencialidad.show', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" >Confidencialidad aceptada.</a>
              @else 
          <a href="{{ $url = route('crearconfidencialidad', $row->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" >Aceptar Confidencialidad</a>    
          
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
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-default" target="_blank" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
          @else
          <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default" target="_blank" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
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
      <h3>Evaluaciones Terminandas y Certificaciones</h3>
      <div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>

      <td>  Descripción Proyecto Artículo</td>
      <td>  Proyecto PDF</td>
      <td>  Cuenta de Cobro </td>
      <td>  Confidencialidad</td>
      <td>  Evaluación Terminada</td>
      <td>  Certificado</td>
      <!--<td>  Acción </td>-->



    </tr>
  </thead>
  <tbody>

  @foreach($historico as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->DescripcionProyecto_Articulo}}</td>
          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a></td>

          <td>
          <a href="{{ $url = route('cuentacobro', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Revisar la cuenta de Cobro">Revisar la cuenta de Cobro</a>
           <?php   $confidencialidad= App\confidencialidad::where('proyectos_articulos_id', $row->id)->first(); //echo $confidencialidad->doyfe;     ?>
          <td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('confidencialidad.show', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" >Confidencialidad aceptada.</a>
              @else 
          <a href="{{ $url = route('crearconfidencialidad', $row->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" >Aceptar Confidencialidad</a>    
          
              @endif
          </td>
        
		  </td>

        
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
          @if($row->certificadoypago==1)
          <a href="{{ $url = route('certificadoeloy', $row->id) }}" class="btn btn-info">Certificado</a>
          @else
          
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

	<div id="Financiera" class="tab-pane fade">
      <h3>Cuenta de Cobro en Linea</h3>
      <div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>

      <td>  Descripción Proyecto Artículo</td>
      <td>  Cuenta de cobro por proyecto</td>
      <td>  Correo Gestión Pago</td>
      <td>  Confirmación Pago</td>
      <td>  Fecha de Confirmación de Pago</td>
    
      
      <!--<td>  Acción </td>-->



    </tr>
  </thead>
  <tbody>

  @foreach($historico as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->DescripcionProyecto_Articulo}}</td>

          <?php $cuenta= App\cuentacobro::where('proyectos_articulos_id',$row->id)->first(); ?>
         
         @if(!empty($cuenta->proyectos_articulos_id))

         <td>
          <a href="{{ $url = route('cuentacobro', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar la cuenta de Cobro"><i class="glyphicon glyphicon-search" aria-hidden="true"></i> Vista cuenta de Cobro</a>
		  </td>
		  @else
         <td><a href="{{ $url = route('infofinanciera', $row->id ) }}" class="btn btn-primary" title="Click para actualizar información financiera para la cuenta de cobro"><i class="fa fa-users" aria-hidden="true"></i>Realizar la Cuenta de cobro</a></td> 
      @endif


        <td>
          @if ($row->correo_gestion_pago!=0)
        <a href="{{ $url = route('gestionpago',$row->id) }}" class="btn btn-default" >La cuenta de cobro ya fue enviada
        @else
        <a href="{{ $url = route('gestionpago',$row->id) }}" class="btn btn-info">Cobrar la cuenta de Cobro
        @endif


        </a></td>
         
       @if(empty($row->Fecha_Pago_Financiera))
       <td>
       <!-- <a href="{{ $url = route('confirmacionpago',$row->id) }}" class="btn btn-success"><i class="fa fa-usd" aria-hidden="true"></i> Confirmar el Pago</a>--></td>
        @else
        <td>
        <a href="#" class="btn btn-info"><i class="fa fa-usd" aria-hidden="true"></i> Pago Realizado -Ok</a>
        @endif

        </td>
        
        

        <td>
        {{$row->Fecha_Pago_Financiera}}
        </td>
        </a></td>
       

        <!--<td><a href="{{ $url = route('proyectos_articulos.edit',$row->id) }}" class="btn btn-success">Edicion</a></td>-->
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->
        

    </tr>
  </tbody>




  @endforeach


</table>
</div>
    </div>



    <div id="Documentos" class="tab-pane fade">
      <h3>Información personal y Financiera para la cuenta de cobro</h3>

      <div class="table-responsive">
<p>Reciba un cordial saludo. Agradecemos el servicio prestado. Atentamente me permito solicitar los siguientes documentos para gestionar el pago:


<li>1.  Hoja de vida (si ya la remitió por favor omita el envío del documento).</li>
<li>2.  Certificación bancaria en la que se registre la cuenta en la que se le consignará.</li>
<!--<li>3.  Cuenta de Cobro por valor a cobrar con número de cédula (diligenciar <a href="<?php $url = asset('imgplantillas/MODELO.doc'); echo $url; ?>" target="_blank" >Carta Modelo</a> adjunto y enviarlo con su firma).</li>-->
<li>.   Realizar la cuenta de cobro en linea.</li>
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
      <td>  Documentos para gestion de Pago</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($evaluadores as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td><?php $comment = App\User::find($row->id_users); echo $comment->name;  ?></td>
          <!--<td><a href="{{$row->FirmaDigital}}" >
            @if(!empty($row->FirmaDigital))
              <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-check" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>-->
          <td>
            <a href="{{$row->HV}}" >
            @if(!empty($row->HV))
              <span class="fa fa-check" aria-hidden="true"> Hoja de vida </span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}"  title="Subir la hoja de vida, hace falta"><span class="fa fa-close" aria-hidden="true" style="color:red;"> Hoja de vida </span></a>
            @endif

         
          <br>
          <a href="{{$row->Cedula_pdf}}" >
             @if(!empty($row->Cedula_pdf))
              <span class="fa fa-check" aria-hidden="true"> Copia de la cédula de ciudadanía en formato pdf</span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" title="Falta por subir la Cédula"><span class="fa fa-close" aria-hidden="true" style="color:red;"> Copia de la cédula de ciudadanía en formato pdf</span></a>
            @endif
          </a>
          <br>
          <a href="{{$row->Certificado_Bancario}}" >
             @if(!empty($row->Certificado_Bancario))
              <span class="fa fa-check" aria-hidden="true"> Certificación bancaria</span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}"  title="Falta por subri la certificación Bancaria"><span class="fa fa-close" aria-hidden="true" style="color:red;"> Certificación bancaria</span></a>
            @endif
          </a>
         

          <br>
          <a href="{{$row->Rut}}" >
            @if(!empty($row->Rut))
              <span class="fa fa-check" aria-hidden="true"> RUT actualizado O Pasaporte</span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" title="Falta por subir el  RUT actualizado O Pasaporte"><span class="fa fa-close" aria-hidden="true" style="color:red;"> RUT actualizado O Pasaporte</span></a>
            @endif
			
        	</td>

        	 
		

        <td><a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-success" title="Click aqui para subir los documentos faltantes y actualizar la información"><i class="fa fa-pencil" aria-hidden="true" ></i> Actualizar la información y Subir Documentos Faltantes</a></td>






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

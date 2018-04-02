
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

@include('sweet::alert')

Fecha de Ingreso al sistema  {{ $date }}  <p id="reloj"></p>
<div class="container" id="home">
 


  <h2>Bienvenido <strong><?php $comment = App\tratamiento_carta::find(Auth::user()->id_tratamiento); echo $comment->Titulo ?> {{ Auth::user()->name }} </strong>

</h2>

<!--<div class="jumbotron" >
  <div class="container">
    <h1>PROCESO DE EVALUACIÓN DE PROYECTOS Y/O ARTÍCULOS</h1>-->
    <p>A continuación encontrará los siguientes pasos, para la correspondiente evaluación que fue aceptada en la notificación enviada por email</p>
    
    <!--<p><a class="btn btn-primary btn-lg" href="{{asset('documentos/Instrucciones para el Evaluador.pdf')}}" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Instructivo para el Evaluador</a>

    </p>
  </div>
</div>-->








<div class="container">
  <!--<h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>-->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Evaluaciones" title="Iniciar la evaluación"><span class="badge"> Paso 1</span> Evaluaciones por Iniciar</a></li>
      
    <li><a data-toggle="tab" href="#Documentos" id="doc" title="En este paso se puede actualizar su información para gestionar el pago "><span class="badge"> Paso 2</span> Documentos para Gestionar el Pago</a></li>
    <li><a data-toggle="tab" href="#Financiera" title="En este paso se puede gestionar la cuenta de cobro"><span class="badge"> Paso 3</span> Cuenta de Cobro en Linea</a></li>
    <li><a data-toggle="tab" href="#Históricos" title="En este paso se puede verificar la cuenta de cobro, la carta de confidencialidad, la evaluación y el certificado"><span class="badge"> Paso 4</span> Evaluaciones Terminadas</a></li>
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
      <td style="width:150%">  Descripción Proyecto Articulo</td>
      
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
          <td >{{$row->DescripcionProyecto_Articulo}}</td>
          
          @if (!empty($row->proyecto_pdf))
          <td><a href="{{$row->proyecto_pdf}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Descargar el archivo del Proyecto para evaluar" class="btn btn-success"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true" >  Descargar<br> los Documentos<br> del Proyecto</span></a></td>
          @elseif (empty($row->Fecha_Aceptacion))
              <td>Falta por aceptar el proyecto por el correo</td>
          @else
          <td>Falta por subir</td>
          @endif

            <?php   $confidencialidad= App\confidencialidad::where('proyectos_articulos_id', $row->id)->first(); //echo $confidencialidad->doyfe;     ?>
          <!--<td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('confidencialidad.show', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" ><i class="fa fa-search" aria-hidden="true"></i> Confidencialidad aceptada.</a>
              @elseif (empty($row->Fecha_Aceptacion))
              Falta por aceptar el proyecto por el correo
              @else 
          <a href="{{ $url = route('crearconfidencialidad', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" ><i class="fa fa-bell" aria-hidden="true"></i> Aceptar Confidencialidad</a>    
          
              @endif
          </td>-->


                    <td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('showconfidencialidadutadeo', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" id="enterconfidencialidad"><i class="fa fa-search" aria-hidden="true"></i> Confidencialidad aceptada.</a>
              @elseif (empty($row->Fecha_Aceptacion))
              Falta por aceptar el proyecto por el correo
              @else 
          <a href="{{ $url = route('crearconfidencialidadutadeo', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" ><i class="fa fa-bell" aria-hidden="true"></i> Aceptar Confidencialidad</a>    
          
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
          <a href="{{ $url = route('preguntaseloy', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Realizar Evaluación Eloy</a>
          @elseif($row->plantilla=="PlantillaUtadeo")
          <a href="{{ $url = route('utadeo.edit', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Realizar Evaluación Utadeo</a>
          
          @else
          <a href="{{ $url = route('preguntas.edit', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para iniciar al Evaluación asignada"><i class="fa fa-star" aria-hidden="true"></i>  Realizar Evaluación Innpulsa</a>

          @endif</td>


          <td>
             @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
           @elseif($row->plantilla=="PlantillaUtadeo")

           <a href="{{ $url = route('utadeo.show', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Click para imprimir la Evaluación asignada"><i class="glyphicon glyphicon-print" aria-hidden="true"></i> </a>

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

<a class="btn btn-default" data-toggle="modal" href='#pago-{{$row->id}}' data-placement="top" title="Click para Confirmar Pago">Terminación evaluación<br> y Confirmación de pago</a>
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
        
        <hr>
        <!--<li> Revisar que haya Cargado su Hoja de Vida, RUT actualizado O Pasaporte , etc.., para el pago</li>-->
        <li id="segpaso"><mark>Si acepta el pago</mark>, por favor seguir con el segundo paso <strong>"Documentos para gestionar el pago"</strong>. Para actualizar lo siguiente: </li>
          <lo>
            <br>
          <li>Hoja de vida.</li>
          <li>Certificación bancaria en la que se registre la cuenta en la que se le consignará.</li>
          <li>Cuenta de Cobro se hace en linea, por la plataforma de evaluadores</li>
          <li>Copia de la cédula de ciudadanía en formato pdf.</li>
          <li>RUT actualizado (en caso de que realice actividades económicas en el territorio colombiano) o Copia del pasaporte (en caso de que sea extranjero y no realice actividades económicas en el territorio colombiano).</li>
        </lo>
        

       </lu>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ $url = route('siAceptoElPago',$row->id) }}" class="btn btn-default" id="confirmar" >Si acepto el pago</a>
        <a href="{{ $url = route('noAceptoElPago',$row->id) }}" class="btn btn-default" id="confirmar2" >No acepto el pago</a>
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

			   <?php $cuenta= App\cuentacobro::where('proyectos_articulos_id',$row->id)->first(); ?>
           <?php   $confidencialidad= App\confidencialidad::where('proyectos_articulos_id', $row->id)->first();?>

          
           @if ($row->sepaga=="Sin Pago" || $row->acepto_pago=="noaceptopago" )
          <td>Proyecto sin Pago</td>
          <!--<td>Proyecto sin Pago</td>
          <td>Proyecto sin Pago</td>
          <td>Proyecto sin Pago</td>-->
          

        @else
         @if(!empty($cuenta->proyectos_articulos_id))

         <td>
          <a href="{{ $url = route('cuentacobro', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar la cuenta de Cobro"><i class="glyphicon glyphicon-search" aria-hidden="true"></i> Vista cuenta de Cobro</a>
      </td>
      @else
         <!--<td><a href="{{ $url = route('infofinanciera', $row->id ) }}" class="btn btn-primary" title="Click para actualizar información financiera para la cuenta de cobro"><i class="fa fa-users" aria-hidden="true"></i>Realizar la Cuenta de cobro</a></td>-->
        
      <td>
         <a class="btn btn-primary" data-toggle="modal" href='#revi-{{$row->id}}'>Diligenciar la Cuenta de Cobro</a>
          <div class="modal fade" id="revi-{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Verificación de Documentos antes de Continuar</h4>
                </div>
                <div class="modal-body">
                  
                  <?php $proyectos= App\proyectos_articulos::find($row->id); ?>

                  Del siguiente listado verificar que todos tengan un <i class="fa fa-check" aria-hidden="true"></i>  para continuar, si hay alguno con <i class="fa fa-times" aria-hidden="true"></i>, por favor Cerrar y actualizar la información faltante.
                  <p>
                  @if(empty($proyectos->evaluadores->HV))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir la Hoja de Vida.
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Hoja de Vida Ok 
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->Fecha_Nacimiento))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir digitar la fecha de Nacimiento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Fecha de Nacimiento Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Cedula))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir la Cédula en PDF
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Cédula Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Certificado_Bancario))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir el Certificado Bancario
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Certificado Bancario Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Rut))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir el Rut o Pasaporte
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Rut o Pasaporte Ok
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->TipoDocumento))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta selecionar el tipo de Documento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Tipo de Documento OK
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->Ciudad_expedicion))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite la Ciudad de Expedicion del Documento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Ciudad de Expedicion OK
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Telefono))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite el Teléfono
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Teléfono OK
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Direccion))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite la Dirección
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Dirección OK
                  @endif                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="{{ $url = route('infofinanciera', $row->id ) }}" class="btn btn-primary" title="Click para actualizar información financiera para la cuenta de cobro"><i class="fa fa-users" aria-hidden="true"></i>generar cuenta de cobro</a>
                </div>
              </div>
            </div>
          </div> 


      </td>    
         @endif
  
    @endif

         
		        <td >
              @if (count($confidencialidad)>=1)
          
          <a href="{{ $url = route('showconfidencialidadutadeo', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar el documento de confidencialidad" ><i class="fa fa-search" aria-hidden="true"></i> Confidencialidad aceptada.</a>
              @elseif (empty($row->Fecha_Aceptacion))
              Falta por aceptar el proyecto por el correo
              @else 
          <a href="{{ $url = route('crearconfidencialidadutadeo', $row->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Aceptar el documento de confidencialidad para continuar" ><i class="fa fa-bell" aria-hidden="true"></i> Aceptar Confidencialidad</a>    
          
              @endif
          </td>


        
          <td>
          <!--<a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default">Vista</a>
         </a>-->
           @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('showeloy', $row->id) }}" class="btn btn-default" target="_blank"> <i class="fa fa-search" aria-hidden="true"></i> Vista Eloy</a>
          @elseif ($row->plantilla=="PlantillaUtadeo")
           <a href="{{ $url = route('utadeo.show', $row->id) }}" class="btn btn-default" target="_blank"><i class="fa fa-search" aria-hidden="true"></i> Vista Utadeo</a>
           @else
            <a href="{{ $url = route('preguntas.show', $row->id) }}" class="btn btn-default" target="_blank"><i class="fa fa-search" aria-hidden="true"></i> Vista Innpulsa</a>
          @endif 

         

        </td>
        <td>
          @if($row->certificadoypago==1 || $row->acepto_pago=="noaceptopago")
          

          @if ($row->plantilla=="PlantillaEloy")
          <a href="{{ $url = route('certificadoeloy', $row->id) }}" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Certificado Eloy</a>
          @elseif ($row->plantilla=="PlantillaUtadeo")
           <a href="{{ $url = route('certificadotadeo', $row->id) }}" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Certificado Utadeo</a>
           @else
            <a href="{{ $url = route('certificadoeloy', $row->id) }}" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Certificado Eloy</a>
          @endif 
          @else
          
          @endif
        </td>

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
         
        @if ($row->sepaga=="Sin Pago" || $row->acepto_pago=="noaceptopago" )
          <td>Proyecto sin Pago</td>
          <td>Proyecto sin Pago</td>
          <td>Proyecto sin Pago</td>
          <td>Proyecto sin Pago</td>
        @else
         @if(!empty($cuenta->proyectos_articulos_id))

         <td>
          <a href="{{ $url = route('cuentacobro', $row->id) }}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Revisar la cuenta de Cobro"><i class="glyphicon glyphicon-search" aria-hidden="true"></i> Vista cuenta de Cobro</a>
      </td>
      @else
         <!--<td><a href="{{ $url = route('infofinanciera', $row->id ) }}" class="btn btn-primary" title="Click para actualizar información financiera para la cuenta de cobro"><i class="fa fa-users" aria-hidden="true"></i>Realizar la Cuenta de cobro</a></td>-->
    
      <td>
         <a class="btn btn-primary" data-toggle="modal" href='#revision-{{$row->id}}'>Diligenciar la Cuenta de Cobro</a>
          <div class="modal fade" id="revision-{{$row->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Verificación de Documentos antes de Continuar</h4>
                </div>
                <div class="modal-body">
                  
                  <?php $proyectos= App\proyectos_articulos::find($row->id); ?>

                  Del siguiente listado verificar que todos tengan un <i class="fa fa-check" aria-hidden="true"></i>  para continuar, si hay alguno con <i class="fa fa-times" aria-hidden="true"></i>, por favor Cerrar y actualizar la información faltante.
                  <p>
                  @if(empty($proyectos->evaluadores->HV))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir la Hoja de Vida.
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Hoja de Vida Ok 
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->Fecha_Nacimiento))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir digitar la fecha de Nacimiento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Fecha de Nacimiento Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Cedula))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir la Cédula en PDF
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Cédula Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Certificado_Bancario))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir el Certificado Bancario
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Certificado Bancario Ok
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Rut))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta subir el Rut o Pasaporte
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Rut o Pasaporte Ok
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->TipoDocumento))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta selecionar el tipo de Documento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Tipo de Documento OK
                  @endif
                  <br>
                   @if(empty($proyectos->evaluadores->Ciudad_expedicion))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite la Ciudad de Expedicion del Documento
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Ciudad de Expedicion OK
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Telefono))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite el Teléfono
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Teléfono OK
                  @endif
                  <br>
                  @if(empty($proyectos->evaluadores->Direccion))
                      <i class="fa fa-times" aria-hidden="true"></i> Falta que digite la Dirección
                  @else
                      <i class="fa fa-check" aria-hidden="true"></i> Dirección OK
                  @endif                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="{{ $url = route('infofinanciera', $row->id ) }}" class="btn btn-primary" title="Click para actualizar información financiera para la cuenta de cobro"><i class="fa fa-users" aria-hidden="true"></i>generar cuenta de cobro</a>
                </div>
              </div>
            </div>
          </div> 


      </td>    
         @endif
  
       @if(empty($row->Fecha_Pago_Financiera))
       <td>
      </td>
        @else
        <td>
        <a href="#" class="btn btn-default"><i class="fa fa-usd" aria-hidden="true"></i> Pago Realizado -Ok</a>
        @endif

        </td>
        
        

        <td>
        {{$row->Fecha_Pago_Financiera}}
        </td>
        </a></td>
       
        @endif
        

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


     

<div class="modal modal-success fade" id="pasos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Paso 1</h4>
      </div>
      <div class="modal-body">
          <mark>Recuerde seguir los siguientes pasos:</mark>
          <br> 1. Aceptar la carta de confidencialidad.
          <br> 2. Descargar los documentos.
          <br> 3. Realizar la evaluación.
          <br> 4. Finalizar la evaluación.
          <br> 5. Gestionar los Documentos para la gestión de pagos.
          <br> 6. Gestionar la cuenta de cobro en Línea.

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

 <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#pasos").modal("show");
  });


  </script> 


@endsection


        @extends('adminlte::layouts.app')

    @section('htmlheader_title')
      {{ trans('adminlte_lang::message.home') }}
    @endsection


    @section('main-content')


    <center></center>
    <div class="container" id="app">
    <div class="panel panel-default">
      <div class="panel-body">

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      
    

        <legend>Formulario de Evaluación de propuesta de Investigación</legend>

    <a href="{{ URL::previous() }}" class="btn btn-primary" id="preguntarguardar"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

        {!! Form::open(['route' => ['preguntas.update', $id],'method'=>'PATCH']) !!}

<table cellspacing="0" class="table table-bordered table-responsive">
    <tbody>
         <tr>
            <td colspan="7" style="border-color:windowtext; height:28.5pt; text-align:center; vertical-align:middle; white-space:nowrap; width:800pt"><span style="font-size:16pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">
                 <img src="/documentos/documentos/utadeo.png" alt="" align="right">
                 <img src="/documentos/documentos/ocyt.png" alt="" align="left">

           
            </span></strong></span></td>
        </tr>
        <tr>
          <td colspan="7" style="border-color:windowtext; height:28.5pt; text-align:center; vertical-align:middle; white-space:nowrap; width:800pt"></td>  
        </tr>

        <tr>
            <td colspan="7" style="border-color:windowtext; height:28.5pt; text-align:center; vertical-align:middle; white-space:nowrap; width:800pt"><span style="font-size:16pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Formato de Evaluaci&oacute;n de impacto de los proyectos de investigaci&oacute;n de la Universidad de Bogot&aacute; Jorge Tadeo Lozano</span></strong></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Facultad:&nbsp;</span></span></strong></span></td>
            <td colspan="5" style=" border-color:windowtext; height:21.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">
                
                         {{$proyectos_articulos->Facultad}}
          

            </span></span></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Dependencia:&nbsp;</span></span></strong></span></td>
            <td colspan="5" style="border-color:windowtext; height:21.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">{{$proyectos_articulos->DEPENDENCIA}}</span></span></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Nombre del Proyecto:</span></span></strong></span></td>
            <td colspan="5" style="border-color:windowtext; height:21.0pt; text-align:justify;  vertical-align:middle; "><span style="font-size:11pt"><span style="text-align:justify; font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black; text-align:justify;">{{$proyectos_articulos->DescripcionProyecto_Articulo}}</span></span></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Nombre del evaluador:</span></span></strong></span></td>
            <td colspan="5" style=" border-color:windowtext; height:21.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">{{$proyectos_articulos->evaluadores->NombreEvaluador}}</span></span></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Documento de identificaci&oacute;n:</span></span></strong></span></td>
            <td colspan="5" style="border-color:windowtext; height:21.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">{{$proyectos_articulos->evaluadores->Cedula}} expedida en {{$proyectos_articulos->evaluadores->Ciudad_expedicion}}</span></span></span></td>
        </tr>
        <tr>
            <td colspan="2" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">Fecha de evaluaci&oacute;n:&nbsp;</span></span></strong></span></td>
            <td colspan="5" style="border-color:windowtext; height:21.0pt; text-align:center; vertical-align:bottom; white-space:nowrap"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">{{$fecha_evaluacion->toDateString()}}</span></span></span></td>
        </tr>
    </tbody>
</table>

        <a class="btn btn-primary" data-toggle="modal" href='#guia-{{$proyectos_articulos->id}}'>Guía</a>
        <div class="modal fade" id="guia-{{$proyectos_articulos->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Guía</h4>
                    </div>
                    <div class="modal-body">

                        <table  class="table table-bordered table-responsive">
    <tbody>
        <tr>
            <td rowspan="2" style="background-color:#a6a6a6; height:16.5pt; text-align:left; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">CRITERIOS DE EVALUACI&Oacute;N</span></strong></span></td>
            <td rowspan="2" style="background-color:#a6a6a6; height:16.5pt; text-align:center; vertical-align:middle; white-space:normal; width:69pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">PUNTAJE M&Aacute;XIMO</span></strong></span></td>
            <td colspan="3" style="background-color:#a6a6a6; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap; width:805pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">DESCRIPCI&Oacute;N DE LAS CATEGOR&Iacute;AS</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#a6a6a6; height:15.75pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Deficiente</span></strong></span></td>
            <td style="background-color:#a6a6a6; height:15.75pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Aceptable</span></strong></span></td>
            <td style="background-color:#a6a6a6; height:15.75pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:12pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Sobresaliente</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#bfbfbf; height:16.5pt; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">1. Impactos</span></strong></span></td>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">60</span></strong></span></td>
            <td colspan="3" style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#f2f2f2; height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Impactos que pueden promover desarrollo social y/o estrategias de protecci&oacute;n ambiental, as&iacute; como aplicaciones pr&aacute;cticas en el sector real, lo cual promueve el&nbsp; fortalecimiento de las competencias y la productividad.&nbsp;</span></span></td>
            <td style="height:99.0pt; text-align:center; vertical-align:middle; white-space:normal; width:69pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">60</span></span></td>
            <td style="height:99.0pt; text-align:left; vertical-align:middle; white-space:normal; width:263pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">0 a 19 puntos: No se evidencian de forma clara y espec&iacute;fica los impactos que pueden promover desarrollo social y/o estrategias de protecci&oacute;n ambiental y las aplicaciones reales o potenciales no se evidencian o son muy limitadas lo cual no genera un impacto especificio en la productividad o competitividad en el &aacute;rea de estudio</span></span></td>
            <td style="height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:248pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">20 a 39 puntos:&nbsp; El proyecto evidencia de manera b&aacute;sica algunos impactos que pueden promover desarrollo social y/o estrategias de protecci&oacute;n ambiental, los&nbsp; impactos espec&iacute;ficos en el sector real son limitados o de dificil aplicaci&oacute;n. El&nbsp; fortalecimiento de las competencias y la productividad es limitado.</span></span></td>
            <td style="height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:294pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">40 a 60 puntos: A partir de los resultados del proyecto se evidencian impactos que pueden promover desarrollo social y/o estrategias de protecci&oacute;n ambiental, as&iacute; como aplicaciones pr&aacute;cticas que impactan el sector real, gener&aacute;ndose el fortalecimiento de las competencias y la productividad.&nbsp;</span></span></td>
        </tr>
        <tr>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:left; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">2. Coherencia, visibilidad, aplicabilildad y estrategia</span></strong></span></td>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">40</span></strong></span></td>
            <td colspan="3" style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:left; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">2.1. Coherencia entre lo planeado y lo ejecutado</span></strong></span></td>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">15</span></strong></span></td>
            <td colspan="3" style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#ededed; height:50.25pt; text-align:justify; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Coherencia del proyecto formulado con respecto a la ejecuci&oacute;n y resultados obtenidos</span></span></td>
            <td style="height:50.25pt; text-align:center; vertical-align:middle; white-space:normal; width:69pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">15</span></span></td>
            <td style="height:50.25pt; text-align:justify; vertical-align:middle; white-space:normal; width:263pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">1 a 4 puntos: El proyecto no logr&oacute; responder la pregunta de investigaci&oacute;n, no se cumplieron los objetivos y/o no se cumpli&oacute; con la planeaci&oacute;n del mismo.</span></span></td>
            <td style="height:50.25pt; text-align:justify; vertical-align:middle; white-space:normal; width:248pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">5 a 9 puntos: El proyecto logr&oacute; de forma b&aacute;sica y/o aceptable responder la pregunta de investigaci&oacute;n, cumple parcilamente los objetivos y/o con la planeaci&oacute;n del mismo.</span></span></td>
            <td style="height:50.25pt; text-align:justify; vertical-align:middle; white-space:normal; width:294pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">10 a 15 puntos: El proyecto logr&oacute; responder a profundidad la pregunta de investigaci&oacute;n, se cumplieron a cabalidad los objetivos y se cumpli&oacute; con la planeaci&oacute;n del mismo.</span></span></td>
        </tr>
        <tr>
            <td style="background-color:#bfbfbf; height:49.5pt; text-align:left; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">2.2. Potencial de aplicabilidad,&nbsp; impacto y sostenibilidad de la soluci&oacute;n por un per&iacute;odo de tiempo</span></strong></span></td>
            <td style="background-color:#bfbfbf; height:49.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">10</span></strong></span></td>
            <td colspan="3" style="background-color:#bfbfbf; height:49.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#ededed; height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Potencial de aplicabilidad, impacto y sostenibilidad del proyecto.</span></span></td>
            <td style="background-color:white; height:99.0pt; text-align:center; vertical-align:middle; white-space:normal; width:69pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">10</span></strong></span></td>
            <td style="height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:263pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">1 a 3 puntos: Los resultados no se&nbsp; evidencian de manera clara y espec&iacute;fica, no se muestra un potencial de aplicabilidad en el tiempo, la soluci&oacute;n no demuestra efectividad de acuerdo al alcance planteado y/o no se realizan reevaluaciones peri&oacute;dicas de los mismos.</span></span></td>
            <td style="height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:248pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">4 a 6 puntos: Los resultados del proyecto apenas se&nbsp; evidencian de manera general, no se muestra potencial de aplicabilidad en el tiempo, la soluci&oacute;n demuestra cierta efectividad de acuerdo al alcance planteado y/o apenas se plantean reevaluaciones peri&oacute;dicas de los mismos.</span></span></td>
            <td style="height:99.0pt; text-align:justify; vertical-align:middle; white-space:normal; width:294pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">7 a 10 puntos: Los resultados se&nbsp; evidencian de manera clara y espec&iacute;fica, muestran potencial de aplicabilidad en el tiempo, la soluci&oacute;n demuestra efectividad de acuerdo al alcance planteado y/o se realizan reevaluaciones peri&oacute;dicas de los mismos.</span></span></td>
        </tr>
        <tr>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:left; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">2.3. Visibilidad y estrategia</span></strong></span></td>
            <td style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">15</span></strong></span></td>
            <td colspan="3" style="background-color:#bfbfbf; height:16.5pt; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:11pt"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;</span></strong></span></td>
        </tr>
        <tr>
            <td style="background-color:#ededed; height:99.75pt; text-align:justify; vertical-align:middle; white-space:normal; width:257pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Socializaci&oacute;n de los resultados del proyecto y&nbsp; planteamiento de una estrategia para su puesta en marcha y divulgaci&oacute;n&nbsp;</span></span></td>
            <td style="height:99.75pt; text-align:center; vertical-align:middle; white-space:normal; width:69pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">15</span></span></td>
            <td style="height:99.75pt; text-align:justify; vertical-align:middle; white-space:normal; width:263pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">1 a 4 puntos: Los resultados del proyecto no fueron aceptados ni comentados por los grupos de inter&eacute;s del proyecto, no se plantea una estrategia para su puesta en marcha y divulgaci&oacute;n de acuerdo a los resultados obtenidos. Adem&aacute;s, no se evidencia una estrategia o resultados de sostenibilidad del proyecto en el largo plazo.</span></span></td>
            <td style="height:99.75pt; text-align:justify; vertical-align:middle; white-space:normal; width:248pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">5 a 9 puntos: Los resultados del proyecto fueron apenas aceptados por algunos grupos de inter&eacute;s del proyecto, se plantea una estrategia b&aacute;sica para su puesta en marcha y divulgaci&oacute;n de acuerdo a los resultados obtenidos, sin ser evidente una estrategia o resultados de sostenibilidad del proyecto en el largo plazo.</span></span></td>
            <td style="height:99.75pt; text-align:justify; vertical-align:middle; white-space:normal; width:294pt"><span style="font-size:11pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">10 a 15 puntos: Los resultados del proyecto lograron que estos fueron aceptados y comentados por los grupos de inter&eacute;s del proyecto y se plantea una estrategia para su puesta en marcha y divulgaci&oacute;n de acuerdo a los resultados obtenidos. Adem&aacute;s, los resultados positivos del&nbsp; proyecto se mantienen por un largo periodo de tiempo.</span></span></td>
        </tr>
    </tbody>
</table>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>

        <p></p>
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>
            <tr>
                <th  colspan="7" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap" >
                    <center>HOJA DE EVALUACIÓN </center>
                </th>
                
            </tr>
        </thead>
        <tbody style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
        

            <tr>
                <td colspan="1" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    CRITERIOS DE EVALUACIÓN
                </td>
                <td colspan="1" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    Puntaje Evaluador
                </td >
                <td colspan="3" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <center>Tabla de Puntuación</center>
                </td>
                <td colspan="1" rowspan="1" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    Justificación y/o Comentarios del Evaluador
                </td>
                
            </tr>


           
            @foreach($preguntas as $row)

           

            <tr>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <strong>{{$row->DescripcionEvaluacion}}</strong>
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <strong>{{$row->Puntaje_Maximo}}</strong>
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <strong>Deficiente</strong>
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <strong>Aceptable</strong>
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <strong>Sobresaliente</strong>
                </td >
                <!--<td>
                    <!~~<strong>Muy Bueno</strong>~~>
                </td>-->
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <!--<strong>Excelente</strong>-->
                </td>
                
            </tr>
            <tr>

                
                <td style="border-color:windowtext; height:23.25pt; text-align:justify; vertical-align:middle; white-space:normal; width:216pt"><span style="font-size:9pt" title="<?php echo $row->ayuda;  ?>"><span style="font-family:Arial,sans-serif"><span style="color:black">
                   
                    <input type="hidden" class="form-control" name="id[]"  id="id" placeholder="Id" readonly="readonly" value="{{$row->id}}">
                    <?php echo $row->Desc_criterio_eval ?>
               
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                <div class="form-group">
            <!--<label for="">produccion</label>-->
                    
            
        
            <input type="number" class="form-control sumados" name="Puntaje_evaluador[]"  id="Puntaje_evaluador" min="0" max="{{$row->Puntaje_Maximo}}" width="1000" height="1000" value="{{$row->Puntaje_evaluador}}">
        </div>   
                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <center>{{$row->Deficiente}}</center>

                </td>   
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <center>{{$row->Aceptable}}</center>

                </td>
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    <center>{{$row->Sobresaliente}}</center>

                </td>
               <!-- <td>
                    <center>{{$row->Muy_Bueno}}</center>

                </td>
                <td>
                    <center>{{$row->Excelente}}</center>

                </td>-->
                <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap" title="Justificacion_Comentarios">
                    <div class="form-group">
            <!--<label for="">Justificacion_Comentarios</label>-->
            <textarea class="form-control" name="Justificacion_Comentarios[]"  id="Justificacion_Comentarios" placeholder="Justificacion_Comentarios" rows="5" > <?php echo $row->Justificacion_Comentarios ?></textarea>
        </div>

                </td>
            </tr>
           @endforeach
            
        </tbody>
        
         

        <td style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    TOTAL->

                </td>
                <td>
                   <div class="form-group" id="app">
            <label for="">Total_evaluacion</label>
            <input type="text" class="form-control" name="Total_evaluacion"  id="Total_evaluacion" placeholder="Total_evaluacion" value="{{$row->Total_evaluacion}}" readonly>
        </div>

                </td>
                <td colspan="6" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
                    
                </td>
                
            </tr>

        <!--Este codigo realiza el calculo de Total-->

        
         <!--<script type="text/javascript">
               $(document).ready(function() 
               {
                    $('.suma').bind('keyup keypress',function(event) 
                    {
                        var total = 0;
                        $('.suma').each(function(i)
                        {
                            if ( !$(this).val() ) 
                            {
                                total = 0;
                                
                            }
                            else
                            {
                                total = parseInt( total ) + parseInt( $(this).val() );   
                                
                            }                       
                        });
                        $('#Total_evaluacion').val( total );
                                          
                    });
                });                
        </script>   -->

            <tr>
                <td colspan="7" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
             

                </td>
                
            </tr>

             <tr>
                <td colspan="7" style="border-color:windowtext; height:21.0pt; text-align:left; vertical-align:middle; white-space:nowrap">
             3.CONCEPTO GENERAL

                </td>
                
            </tr>
            <tr>
                <td colspan="7" >
                 <div class="form-group">
                <label for="">Concepto final de la evaluacion del Proyecto</label>
                <textarea class="text" name="concepto_final" id="concepto_final" placeholder="concepto_final" value="{{$row->concepto_final}}" cols="150" rows="10">{{$row->concepto_final}}</textarea>
                </div>

                </td>
                </tr>
               

            <tr>
                <td >
                   Recomienda el proyecto<br>
    NOTA: El puntaje mínimo para la aprobación del proyecto será de mayor o Igual 70 puntos.

                </td>
                
                <td colspan="7">
            <!--        <div class="form-group">
            <!~~<label for="">recomendacion_proyecto</label>
            <select name="recomendacion_proyecto" id="recomendacion_proyecto" class="form-control" required="required" value="{{$row->recomendacion_proyecto}}">~~>
            
            @if ($row->recomendacion_proyecto==1)
                <label>Si recomiendo el Proyecto y/o Artículo</label>
                <input type="text" name="recomendacion_proyecto" id="recomendacion_proyecto" value="{{$row->recomendacion_proyecto}}">
                <!~~<option value="1" selected>Si recomiendo el Proyecto y/o Articulo</option>~~>
                <!~~<option value="0">No recomiendo el Proyecto y/o Articulo</option>~~>
            @else
                <!~~<option value="1">Si recomiendo el Proyecto y/o Articulo</option>~~>
                <!~~<option value="0" selected="">No recomiendo el Proyecto y/o Articulo</option>~~>
                <label >No recomiendo el Proyecto y/o Artículo</label>  
                <input type="text" name="recomendacion_proyecto" id="recomendacion_proyecto" value="{{$row->recomendacion_proyecto}}">
            @endif
-->        
            <div id="nosirecomiento">
            <?php if ($row->recomendacion_proyecto==1) {
                echo "Si recomiendo el Proyecto y/o Articulo";
            } else {
                echo "No recomiendo el Proyecto y/o Articulo";
            } ?>
            </div>
            <input type="hidden" name="recomendacion_proyecto" id="recomendacion" value="{{$row->recomendacion_proyecto}}">
            <p id="respuesta"></p>

            
                </td>

                <input type="hidden" name="caracteristicas" value="0">
                <input type="hidden" name="conflicto_real" value="0">
                <input type="hidden" name="conflicto_aparente" value="0">
                <input type="hidden" name="conflicto_potencial" value="0">
        
        <tr>
        <<!--td colspan="7">  
        <div class="panel panel-default">
            <div class="panel-body">
                <strong>Nota:</strong> Con el fin mantener la confidencialidad de la identidad del par evaluador; por favor abstenerse de registrar datos personales o firmar el presente documento. Para la identificación correspondiente se utilizará el código que se encuentra en la parte superior derecha de este formulario, el cual lo relaciona con el formulario “Declaración de conflicto de Interés para propuesta de investigación”, donde se encuentran los datos personales del par evaluador.
            </div>
        </div>
        </td>-->


         <tr>
        <td colspan="7">  
        <!--<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Para uso exclusivo de las Direcciones de investigación y Extensión de Facultad</strong></h3>
            </div>
            <div class="panel-body">
                
                <center>

                <br>Fecha de revisión (Director DIEF de facultad):
                <br>Certífico que la información consignada fue diligenciada por el par evaluador correspondiente.
                <br>
                <br>
                <br>
                <br>
                <br>
                 @if(!empty($evaluadores->FirmaDigital))
                    @if (Auth::user()->TipoUsers==0)
                    <img src="<?php echo "/".$evaluadores->FirmaDigital; ?>" height="40%" width="40%">
                    @endif
                    @else
                    
                    @endif    
                
                    
                    <br>__________________________________________________
                <br><strong>FIRMA DE EVALUADOR</strong> -->  

                <input type="checkbox" checked>Si, Acepto la evaluación
                <hr> 
                <p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">NOMBRE:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> {{$proyectos_articulos->evaluadores->NombreEvaluador}}</b></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">FECHA DE NACIMIENTO:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> {{$fecha_nacimiento->toFormattedDateString()}}</b></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">{{$proyectos_articulos->evaluadores->tipodocumento->Descripcion_Corta}}&nbsp;</span><span style="font-family:&quot;Arial&quot;,sans-serif">N&deg; {{$proyectos_articulos->evaluadores->Cedula}} expedida en {{$proyectos_articulos->evaluadores->Ciudad_expedicion}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">DIRECCION: {{$proyectos_articulos->evaluadores->Direccion}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">TELEFONO: {{$proyectos_articulos->evaluadores->Telefono}}</span></span></span></p>
                <!--</center>    
                
                  

                </div>
            </div>
        </div>-->
        </td>  


        


        </tr>    
         <tr>   

    <td colspan="7"> <center><button type="submit" class="btn btn-primary" >Guardar </button>
            <br>

        </center><p></td>


            </tr>



        </table>
       

           


       


        {!! Form::close() !!}

    
      </div>
      
    </div>

    <hr>
       
      
      
    </div>
      

    
       
        
 


    @endsection


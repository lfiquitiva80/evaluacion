
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

     <a href="{{ route('homedos') }}" class="btn btn-primary" >Regresar</a><p>

    <div class="panel panel-default">
        <div class="panel-body">
           <strong>Fecha de Diligenciamiento del formulario:</strong> {{$proyectos_articulos->Fecha_Devolucion_Evaluador}}
        </div>
    </div>

 



     <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>1.Información de la propuesta</strong></h3>
        </div>
        <div class="panel-body">
            
    <div>
         <div class="table-responsive">
             <table class="table table-hover">
                 <thead>
                     <tr>
                         <th>a. Código:</th>
                         <th>b. Director:</th>
                         <th>c. Título de la propuesta:</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>{{$proyectos_articulos->Codigo_convocatoria}}</td>
                         <td>{{$proyectos_articulos->CoordinadorProyecto_Articulo}}</td>
                         <td>{{$proyectos_articulos->Nombre_convocatoria}}</td>
                     </tr>
                 </tbody>
             </table>
         </div>


    </div>  
        </div>
    </div>
        
     

    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>2.Evaluación Cuantitativa</strong></h3>
        </div>
        <div class="panel-body">
            
    <div>Para cada uno de los criterios de la calificación correspondiente que considera apropiada para su propuesta</div>  
        </div>
    </div>
      	

    {!! Form::open(['route' => ['preguntas.update', $id],'method'=>'PATCH']) !!}
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>
            <tr>
                <th  colspan="8" >
                    <center>HOJA DE EVALUACIÓN </center>
                </th>
                
            </tr>
        </thead>
        <tbody>
      <!--      <tr>
                <td colspan="1">
                    Grupo de investigación:
                </td>
                <td colspan="5">
                
                 
                </td>
                
            </tr>
            <tr>
                <tr>
                <td colspan="1">
                    Titulo del Proyecto:

                </td>
                <td colspan="5">
           
                           

                </td>
                
                </tr>
            </tr>
            <tr>
                <td colspan="1">
                    Nombre del Evaluador:
                </td>   
                <td colspan="5">
                             
                </td>
                
            </tr>
            <tr>
                <td colspan="1">
                    Documento de identificación
                </td>
                <td colspan="5">
                   
                </td>
                </td>
                
            </tr>
            <tr>
                <td colspan="1">
                    Fecha de evaluación:
                </td>
                <td colspan="5">
                    
                </td>
                
            </tr>
            <tr>
                <td colspan="6">
                    
                </td>
                
            </tr>-->

    		

            <tr >
                <td colspan="1" >
                    CRITERIOS DE EVALUACIÓN
                </td>
                <td colspan="1">
                    Puntaje Evaluador
                </td >
                <td colspan="5" >
                    <center>Tabla de Puntuación</center>
                </td>
                <td colspan="1" rowspan="1">
                    Justificación y/o Comentarios del Evaluador
                </td>
                
            </tr>


           
            @foreach($preguntas as $row)

           

            <tr >
                <td >
                    <strong>{{$row->DescripcionEvaluacion}}</strong>
                </td>
                <td>
                    <strong>{{$row->Puntaje_Maximo}}</strong>
                </td>
                <td>
                    <strong>Deficiente</strong>
                </td>
                <td>
                    <strong>Aceptable</strong>
                </td>
                <td>
                    <strong>Bueno</strong>
                </td>
                 <td>
                    <strong>Muy Bueno</strong>
                </td>
                <td>
                    <strong>Excelente</strong>
                </td>
                
            </tr>
            <tr>

                
                <td>
                   
                    <input type="hidden" class="form-control" name="id[]"  id="id" placeholder="Id" readonly="readonly" value="{{$row->id}}">
                    <?php echo $row->Desc_criterio_eval ?>
               
                </td>
                <td>
                <div class="form-group">
    		<label for="">produccion</label>
                    
            
        
    		<input type="number" class="form-control sumados" name="Puntaje_evaluador[]"  id="Puntaje_evaluador" min="0" max="{{$row->Puntaje_Maximo}}" step="10" width="1000" height="1000" value="{{$row->Puntaje_evaluador}}">
    	</div>   
                </td>
                <td>
                    <center>{{$row->Deficiente}}</center>

                </td>   
                <td>
                    <center>{{$row->Aceptable}}</center>

                </td>
                <td>
                    <center>{{$row->Sobresaliente}}</center>

                </td>
                <td>
                    <center>{{$row->Muy_Bueno}}</center>

                </td>
                <td>
                    <center>{{$row->Excelente}}</center>

                </td>
                <td>
                    <div class="form-group">
    		<label for="">Justificacion_Comentarios</label>
    		<textarea class="form-control" name="Justificacion_Comentarios[]"  id="Justificacion_Comentarios" placeholder="Justificacion_Comentarios" rows="15" > <?php echo $row->Justificacion_Comentarios ?></textarea>
    	</div>

                </td>
            </tr>
           @endforeach
            
        </tbody>
        
         

        <td>
                    TOTAL->

                </td>
                <td>
                   <div class="form-group" id="app">
            <label for="">Total_evaluacion</label>
            <input type="text" class="form-control" name="Total_evaluacion"  id="Total_evaluacion" placeholder="Total_evaluacion" value="{{$row->Total_evaluacion}}" readonly>
        </div>

                </td>
                <td colspan="6">
                    
                </td>
                
            </tr>

        <!--Este codigo realiza el calculo de Total-->

        
         <script type="text/javascript">
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
            </script>   

            <tr>
                <td colspan="8">
             

                </td>
                
            </tr>

             <tr>
                <td colspan="8">
             3.CONCEPTO GENERAL

                </td>
                
            </tr>
            <tr>
                <td colspan="8">
                 <div class="form-group">
                <label for="">Concepto final de la evaluacion del Proyecto</label>
                <textarea class="ckeditor" name="concepto_final" id="concepto_final" placeholder="concepto_final" value="{{$row->concepto_final}}">{{$row->concepto_final}}</textarea>
                </div>

                </td>
                </tr>
               

            <tr>
                <td>
                   Recomienda el proyecto<br>
    NOTA: El puntaje mínimo para la aprobación del proyecto será de 70 puntos.

                </td>
                
                <td colspan="7">
                    <div class="form-group">
            <label for="">recomendacion_proyecto</label>
            <select name="recomendacion_proyecto" id="recomendacion_proyecto" class="form-control" required="required" value="{{$row->recomendacion_proyecto}}">
            
            @if ($row->recomendacion_proyecto==1)
                <option value="1" selected>Si recomiendo el Proyecto y/o Articulo</option>
                <option value="0">No recomiendo el Proyecto y/o Articulo</option>
            @else
                <option value="1">Si recomiendo el Proyecto y/o Articulo</option>
                <option value="0" selected="">No recomiendo el Proyecto y/o Articulo</option>

            @endif

        </select>
                </td>
        
        <tr>
        <td colspan="8">  
        <div class="panel panel-default">
            <div class="panel-body">
                <strong>Nota:</strong> Con el fin mantener la confidencialidad de la identidad del par evaluador; por favor abstenerse de registrar datos personales o firmar el presente documento. Para la identificación correspondiente se utilizará el código que se encuentra en la parte superior derecha de este formulario, el cual lo relaciona con el formulario “Declaración de conflicto de Interés para propuesta de investigación”, donde se encuentran los datos personales del par evaluador.
            </div>
        </div>
        </td>


         <tr>
        <td colspan="8">  
        <div class="panel panel-default">
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
                
                    
                    <br>__________________________________________________
                <br>Director de Investigación y Extensión de Facultad
                </center>    
                
                  

                </div>
            </div>
        </div>
        </td>  





        </tr>    
         <tr>
                <td colspan="8"> <center><button type="submit" class="btn btn-primary" >Guardar {{$row->DescripcionEvaluacion}}
            </button>
            <br><small>Nota->Guarda parcialmente. Si se evaluo todo por favor dar click a Finalizar con el boton de abajo</small>
        </center><p></td>


            </tr>


        </table>
       

           


       


        {!! Form::close() !!}

    
      </div>
      
    </div>

    <hr>
       
      
      
    </div>
      
       

    
       
        
 


    @endsection


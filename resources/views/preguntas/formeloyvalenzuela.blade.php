
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
      
    
 

     <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

	

    {!! Form::open(['route' => ['preguntas.update', $id],'method'=>'PATCH']) !!}
    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>

             <tr>
                <th  colspan="2" >
                    <center><img src="/documentos/proyecto/oHVZxPe4s3H6GLuG04TUuhqTJRhZeFyJNPFm9FvU.png"></center>
                </th>
                <th  colspan="4" >
                    <center><legend>FORMULARIO DE EVALUACIÓN<BR>
        CONVOCATORIA PREMIO ELOY VALENZUELA 2017</legend><BR></center>
                </th>
                
            </tr>
            <tr>
                <th  colspan="6" >
                    <center>HOJA DE EVALUACIÓN </center>
                </th>
                
            </tr>
        </thead>
        <tbody>


			 <tr >
                <td colspan="1" rowspan="2" >
                    1.
                </td>
                <td colspan="1" rowspan="2">
                    Fecha de la evaluación:
                </td >
                <td >
                    <center>Día/Hora</center>
                </td>
                <td >
                    <center>Mes</center>
                </td>
                 <td colspan="2">
                    <center>Año</center>
                </td>
               	
                
            </tr>
            <tr >
                <td >

                <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[2];   
                } else {
                	echo date("Y");
                }
                
                ?>	
                
                </td>
                <td >
                	 <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[1];   
                } else {
                	echo date("m");
                }
                
                ?>	
                </td >
                <td colspan="2">
				 <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[0];   
                } else {
                	echo date("d");
                }
                
                ?>
                
                </td>
                
               
                 
                    
                
                
            </tr>


            <tr >
                <td colspan="1" >
                    2.
                </td>
                <td colspan="1">
                    Título del trabajo a evaluar:
                </td >
                <td colspan="4" >
                  {{$proyectos_articulos->DescripcionProyecto_Articulo}}  
                </td>
                
            </tr>
			
              <tr >
                <td colspan="1" >
                    3.
                </td>
                <td colspan="1">
                    Categoría en la que participa el trabajo::
                </td >
                <td colspan="4" >
                
                @if($proyectos_articulos->categoria==1)
                
                Investigador Consolidado

                @else

                Investigador en Formación
                @endif
                 

         
                </td>
                
            </tr>
			
      
            <tr >
                <td colspan="1" >
                    4.
                </td>
                <td colspan="1">
                    <strong>Parámetro o ítem a evaluar</strong>
                </td >
                <td colspan="1" >
                    <strong><center>Puntaje Asignado</center></strong>
                </td>
                <td colspan="2" >
                    <strong>Observaciones o Comentarios</strong> 
                </td>
                <td colspan="1">
                   <strong> Puntaje Máximo</strong>
                </td>
                
            </tr>

        <?php $i=97; ?>		
           @foreach($preguntas as $row)
            

           

           
            <tr>
            	<td>

                    <?php 
                        
                        echo chr($i++);  
                        
                     ?>
            
            	</td>

                	
                <td colspan="1">
                   
                    <input type="hidden" class="form-control" name="id[]"  id="id" placeholder="Id" readonly="readonly" value="{{$row->id}}">
                    <?php echo $row->Desc_criterio_eval ?>
               
                </td>
                <td>
                <div class="col-xs-3">
    		<label for="">Puntaje Asignado</label>
                    
            <input type="number" class="form-control sumados" name="Puntaje_evaluador[]"  id="Puntaje_evaluador" min="0" max="{{$row->Puntaje_Maximo}}" width="1000" height="1000" value="{{$row->Puntaje_evaluador}}">        
    	
    	</div>   
                </td>
                
                <td colspan="2">
                    <div class="form-group">
    		<!--<label for="">Observaciones o Comentarios </label>-->
    		<textarea class="form-control" name="Justificacion_Comentarios[]"  id="Justificacion_Comentarios" placeholder="Justificacion_Comentarios" rows="5" > <?php echo $row->Justificacion_Comentarios ?></textarea>
    	</div>

                </td>

			<td>
			<strong><center>{{$row->Puntaje_Maximo}}</center></strong>
			</td>	

            </tr>
           @endforeach
            
        </tbody>
        
         
		<td></td>
        <td colspan="2">
                    PUNTAJE TOTAL

                </td>
                <td></td>
                <td >
                   <div class="form-group" id="app">
            <label for="">Total_evaluacion</label>
            <input type="text" class="form-control" name="Total_evaluacion"  id="Total_evaluacion" placeholder="Total_evaluacion" value="{{$row->Total_evaluacion}}" readonly>
        </div>

                </td>

                <td colspan="2">
                	
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
             5.Concepto general sobre el trabajo: 

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
                6.	

                </td>
                <td colspan="3">  
        			
                   ¿Las características de este trabajo ameritan el otorgamiento del Premio, considerando que el estímulo es de 32 SMLMV para Investigador Consolidado y de 13 SMLMV para Investigador en Formación?

                </td>
                
                <td colspan="2">
                    <div class="form-group">
            
            <select name="caracteristicas" id="caracteristicas" class="form-control" required="required" value="{{$row->caracteristicas}}">
            
            @if ($row->caracteristicas==1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            @else
                <option value="1">Si</option>
                <option value="0" selected="">No</option>

            @endif

        </select>

		    </div>
			</div>
                </td>
        </tr>

        <input type="hidden" name="recomendacion_proyecto" id="recomendacion_proyecto" class="form-control" value="0">

		<tr>
		<td colspan="6">
		<strong><center>¿Tiene Usted alguno de los siguientes tipos de conflictos de interés?</center></strong>
		</td>		

		</tr>


		<tr>
                <td>
                7.	
                </td>	
                <td colspan="1">  
        		
                   Conflicto de interés real: 

                </td>
                <td colspan="2">
                Cuando el evaluador(a) o el esposo(a) o algún familiar hasta el cuarto grado de consanguinidad, o la unidad administrativa para la cual trabaja tenga un interés financiero, u otro tipo de interés que pudiera indudablemente influenciar la posición del evaluador.

                </td>

                
                <td colspan="3">
                    <div class="form-group">
            
            <select name="conflicto_real" id="conflicto_real" class="form-control" required="required" value="{{$row->conflicto_real}}">
            
            @if ($row->conflicto_real==1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            @else
                <option value="1">Si</option>
                <option value="0" selected="">No</option>

            @endif

        </select>

		    
                </td>
                </div>
			</div>
        </tr>



        <tr>
                <td>
                8.	
                </td>	
                <td colspan="1">  
        		
            		
                   Conflicto de interés aparente:

                </td>
                <td colspan="2">
                Cuando un interés podría no necesariamente influir la posición del experto, pero podría hacer que su objetividad fuese cuestionada por otros.

                </td>

                
                <td colspan="3">
                    <div class="form-group">
            
            <select name="conflicto_aparente" id="conflicto_aparente" class="form-control" required="required" value="{{$row->conflicto_aparente}}">
            
            @if ($row->conflicto_aparente==1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            @else
                <option value="1">Si</option>
                <option value="0" selected="">No</option>

            @endif

        </select>

		    
                </td>
                </div>
			</div>
        </tr>


	

	<tr>
                <td>
                9.	
                </td>	
                <td colspan="1">  
        		
            		
                   Conflicto de interés potencial:

                </td>
                <td colspan="2">
                Cuando existe un interés del cual una persona podría razonablemente dudar si fue o no reportado.

                </td>

                
                <td colspan="3">
                    <div class="form-group">
            
            <select name="conflicto_potencial" id="conflicto_potencial" class="form-control" required="required" value="{{$row->conflicto_potencial}}">
            
            @if ($row->conflicto_potencial==1)
                <option value="1" selected>Si</option>
                <option value="0">No</option>
            @else
                <option value="1">Si</option>
                <option value="0" selected="">No</option>

            @endif

        </select>

		    
                </td>
                </div>
			</div>
        </tr>	
		

        <tr>
        <td colspan="8">  
        <div class="panel panel-default">
            <div class="panel-body">
                <strong>Nota:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum deserunt expedita, rem nesciunt omnis, tempore ex. In sit dolores totam quibusdam at veritatis nihil sint? Sunt veniam eius quis repellendus!
            </div>
        </div>
        </td>


         <tr>
        <td colspan="8">  
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Para uso exclusivo de los datos del evaluador : </strong></h3>
            </div>
            <div class="panel-body">
                
                <center>

                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>    
               
                    @if(empty($evaluadores->FirmaDigital))
                    <img src="<?php echo "/".$evaluadores->FirmaDigital; ?>" height="40%" width="40%">
                    @else
                    
                    @endif
                    <br>__________________________________________________
                <br><strong>FIRMA DE EVALUADOR</strong>    
                <br><strong>Nombre:</strong>{{$evaluadores->NombreEvaluador}}
                <br><strong>Documento: {{$evaluadores->Cedula}}</strong> 
                </center>    
                
                  

                </div>
            </div>
        </div>
        </td>  





        </tr>    
         <tr>
                <td colspan="8"> <center><button type="submit" class="btn btn-primary" >Guardar</button>
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


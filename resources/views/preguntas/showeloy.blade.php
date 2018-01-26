
        @extends('adminlte::layouts.app')

    @section('htmlheader_title')
      {{ trans('adminlte_lang::message.home') }}
    @endsection


    @section('main-content')


    <center></center>
    <div class="container" id="app">
    <div class="panel panel-default">
      <div class="panel-body">

   
      
    
        
 <center><button type="button" class="btn btn-info" onclick="window.print();">Imprimir el Documento</button></center>

     <!--<a href="{{ route('homedos') }}" class="btn btn-primary" >Regresar</a><p>-->

	


    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>

             <tr>
                <th  colspan="2" >
                    <center><img src="/documentos/proyecto/oHVZxPe4s3H6GLuG04TUuhqTJRhZeFyJNPFm9FvU.png" ></center>
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
                <center>
                <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[2];   
                } else {
                	echo date("Y");
                }
                
                ?>	
                </center>
                </td>
                <td >
                <center>	 <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[1];   
                } else {
                	echo date("m");
                }
                
                ?>	</center>
                </td >
                <td colspan="2">
				<center> <?php 

                if (!empty($proyectos_articulos->Fecha_Devolucion_Evaluador)) {
	                	$fecha=$proyectos_articulos->Fecha_Devolucion_Evaluador;
	               		$dato = explode("-", $fecha);
	                	echo $dato[0];   
                } else {
                	echo date("d");
                }
                
                ?>
                </center>
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
                    Parámetro o ítem a evaluar
                </td >
                <td colspan="1" >
                    <center>Puntaje Asignado</center>
                </td>
                <td colspan="2" >
                    <center>Observaciones o Comentarios</center>
                </td>
                <td colspan="1" rowspan="1">
                    <center>Puntaje Máximo</center>
                </td>
                
            </tr>
            
			<?php $i=97; ?>
           @foreach($preguntas as $row)
            

           

           
            <tr>
            	<td>
            	<center><?php echo chr($i++);  ?></center>
            	</td>

                	
                <td colspan="1">
                   
                    <input type="hidden" class="form-control" name="id[]"  id="id" placeholder="Id" readonly="readonly" value="{{$row->id}}">
                    <?php echo $row->Desc_criterio_eval ?>
               
                </td>
                <td>
                <div class="form-group">
    		
                    
            
        
    		<center>{{$row->Puntaje_evaluador}}</center>
    	</div>   
                </td>
                
                <td colspan="2">
                    <div class="form-group">
    		<center><?php echo $row->Justificacion_Comentarios; ?></center>
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
                {{$row->concepto_final}}
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
                <strong>Nota:</strong>  
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

                
                <br>Certífico que la información consignada fue diligenciada por el par evaluador correspondiente.
                <br>
                <br>
                <br>
                <br>
                <br>    
               
                    
                     @if(!empty($evaluadores->FirmaDigital))
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
                


            </tr>


        </table>
       

           


       


        
    
      </div>
      
    </div>

    <hr>
       
      
      
    </div>
      
       

 
       
        
 


    @endsection


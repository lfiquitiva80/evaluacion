    @extends('adminlte::layouts.app')

    @section('htmlheader_title')
      {{ trans('adminlte_lang::message.home') }}
    @endsection


    @section('main-content')


    <center>@include('evaluacion_par.destroy')</center>
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
      
    {!! Form::open(['route' => ['evaluacion_par.update', $evaluacion_par->id],'method'=>'PATCH']) !!}

    	<legend>EDITAR INFORMACION evaluacion_par</legend>

     <a href="{{ route('evaluacion_par.index') }}" class="btn btn-primary" >Regresar</a><p>
    	

    	<div class="form-group">
    		<label for="id">id</label>
    		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$evaluacion_par->id}}">
    	</div>


        <div class="form-group">
            <label for="id">DescripcionEvaluacion</label>
            <input type="text" class="form-control" name="DescripcionEvaluacion"  id="DescripcionEvaluacion" placeholder="Id"  value="{{$evaluacion_par->DescripcionEvaluacion}}">
        </div>


    	



    <table class="table table-bordered table-striped table-hover table-condensed table-responsive">
        <thead>
            <tr>
                <th  colspan="6" >
                    <center>HOJA DE EVALUACIÓN </center>
                </th>
                
            </tr>
        </thead>
        <tbody>
            <!--<tr>
                <td colspan="3">
                    Grupo de investigación:
                </td>
                <td colspan="3">
                    
                 
                </td>
                
            </tr>
            <tr>
                <tr>
                <td colspan="3">
                    Titulo del Proyecto:

                </td>
                <td colspan="3">

                            

                </td>
                
                </tr>
            </tr>
            <tr>
                <td colspan="3">
                    Nombre del Evaluador:
                </td>   
                <td colspan="3">
                           
                </td>
                
            </tr>
            <tr>
                <td colspan="3">
                    Documento de identificación
                </td>
                <td colspan="3">
                   
                        
                           
                </td>
               
                
            </tr>-->
            <tr>
                <td colspan="3">
                    Fecha de evaluación:
                </td>
                <td colspan="3">
                    {{$evaluacion_par->Fecha_de_evaluacion}}
                </td>
                
            </tr>
            <tr>
                <td colspan="6">
                    
                </td>
                
            </tr>

    		

            <tr >
                <td>
                    CRITERIOS DE EVALUACIÓN
                </td>
                <td>
                    Puntaje Evaluador
                </td>
                <td colspan="3" >
                    <center>Tabla de Puntuación</center>
                </td>
                <td rowspan="2">
                    Justificación y/o Comentarios del Evaluador
                </td>
                
            </tr>
            <tr>
                <td>
                    1. Producción
                </td>
                <td>
                    10
                </td>
                <td>
                    Deficiente
                </td>
                <td>
                    Aceptable
                </td>
                <td>
                    Sobresaliente
                </td>
                
            </tr>
            <tr>
                <td>
                    Como resultado del proyecto se desarrollarán alguno (s) de los siguientes producto(s): <br>
    <li>Productos de nuevo conocimiento a través de artículos de investigación, capítulos o libros resultados de investigación, con posibilidad para ser publicados o aceptados para publicación.</li>
    <li>Productos de nuevo conocimiento con posibilidades de convertirse en solicitud de patentes, secretos industriales y modelos de utilidad.</li>
    <li>Nuevos procesos de desarrollo tecnológico e innovación.</li>
    <li>Generación de masa crítica en la problemática del proyecto.</li>
    <li>Productos de apropiación social del conocimiento.</li>
                </td>
                <td>
                <div class="form-group">
    		<label for="NombreDepartamento">produccion</label>
    		<input type="number" class="form-control suma" name="produccion" id="produccion" min="0" max="10"  width="1000" height="1000"	value="{{$evaluacion_par->produccion}}">
    	</div>   
                </td>
                <td>
                    <center>0-4 puntos</center>

                </td>
                <td>
                    <center>5-7 puntos</center>

                </td>
                <td>
                    <center>8-10 puntos</center>

                </td>
                <td>
                    <div class="form-group">
    		<label for="NombreDepartamento">Justificación producción</label>
    		<textarea class="form-control" name="justificacion_produccion" id="justificacion_produccion" placeholder="justificacion_produccion" rows="15" >{{$evaluacion_par->justificacion_produccion}}</textarea>
    	</div>

                </td>
            </tr>
            <tr>
                <td>
                    2. Calidad del proyecto
                </td>
                <td>
                    25
                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    "El proyecto cumple con los siguientes criterios en términos de calidad:<br>
    <li> Claridad y coherencia del planteamiento del objeto de estudio.</li>
    <li> Claridad en el planteamiento de la hipótesis del problema central.</li>
    <li> Claridad en las preguntas científicas sobre la hipótesis.</li>
    <li> Articulación equilibrada entre justificación, objetivos y diseño metodológico.</li>
    <li> Claridad y coherencia entre los objetivos y los procedimientos propuestos para la búsqueda y procesamiento de la información.</li>
    <li> Claridad en el planteamiento de la metodología para la interpretación de los resultados obtenidos.</li>
    <li> Viabilidad de los procesos técnico-científicos en relación con los objetivos propuestos.</li>
    <li> Articulación a planes, políticas, CONPES o directrices a nivel nacional o internacional."</li>

                </td>
                <td>
                 <div class="form-group">
    		<label for="NombreDepartamento">Calidad del Proyecto</label>
    		<input type="number" class="form-control suma" name="calidad_proyecto" id="calidad_proyecto"  value="{{$evaluacion_par->calidad_proyecto}}" min="0" max="25">
    	</div>

    	
                </td>
                <td>
                    <center>0-10 puntos.</center>

                </td>
                <td>
                    <center>11-18 puntos. </center>

                </td>
                <td>
                   <center>19-25 puntos.</center>

                </td>
                <td>
                   <div class="form-group">
    		<label for="NombreDepartamento">Justificación de la calidad del proyecto</label>
    		<textarea class="form-control" name="justificacion_calidad_proyecto" id="justificacion_calidad_proyecto" placeholder="justificacion_calidad_proyecto" rows="15">{{$evaluacion_par->justificacion_calidad_proyecto}}</textarea>
    	</div>   
                </td>
            </tr>
            <tr>
                <td>
                    3. Impactos potenciales y/o probables

                </td>
                <td>
                    20

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    "Algunos de los posibles impactos del proyecto son:<br>
    <li> El proceso de fortalecimiento del Grupo de investigación que lo presenta.</li>
    <li> Aspectos específicos: disciplina de estudio, productividad y competitividad, sobre las políticas públicas y el desarrollo local y regional, calidad de vida de las comunidades.</li>
    <li> Otros impactos referenciados."</li>

                </td>
                <td>
                   <div class="form-group">
    		<label for="NombreDepartamento">Impacto del Potencial</label>
    		<input type="number" class="form-control suma" name="impacto_potencial" id="impacto_potencial" value="{{$evaluacion_par->impacto_potencial}}" min="0" max="20">
    	</div>

    	
                </td>
                <td>
                    <center>0-7 puntos </center>

                </td>
                <td>
                    <center>7-14 puntos</center>

                </td>
                <td>
                   <center>15-20 puntos</center>

                </td>
                <td>
                <div class="form-group">
    		<label for="NombreDepartamento">Justificación del Impacto Potencial</label>
    		<textarea class="form-control" name="justificacion_impacto_potencial" id="justificacion_impacto_potencial" placeholder="justificacion_impacto_potencial" rows="15">{{$evaluacion_par->justificacion_impacto_potencial}}</textarea>
    	</div>     
                </td>
            </tr>
            <tr>
                <td>
                    4. Capacidad para desarrollo del proyecto

                </td>
                <td>
                    20

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    "El proyecto de investigación cumple con los siguientes aspectos:<br>
    <li> Trayectoria del grupo de investigación (De acuerdo con lo especificado en el GrupLAC del Grupo de investigación, con una ventana de observación de 5 años).</li>
    <li> Calificación académica y producción intelectual del coordinador/coordinadora del Proyecto y demás coinvestigadores. (De acuerdo con la Ficha de Perfil Investigador/Investigadora)</li>
    <li> Vinculación de pares nacionales o internacionales.</li>
    <li> Pertinencia y articulación con la agenda de Investigaciones."</li>

                </td>
                <td>
                <div class="form-group">
    		<label for="NombreDepartamento">Capacidad del desarrollo del proyecto</label>
    		<input type="number" class="form-control suma" name="capacidad_desarrollo_proyecto" id="capacidad_desarrollo_proyecto" value="{{$evaluacion_par->capacidad_desarrollo_proyecto}}" min="0" max="20" >
    	</div>

    	   
     
                </td>
                <td>
                    <center>0-7 puntos </center>


                </td>
                <td>
                    <center>7-14 puntos</center>


                </td>
                <td>
                    <center>15-20 puntos</center>

                </td>
                <td>
                  <div class="form-group">
    		<label for="NombreDepartamento">Justificación de la capacidad de desarrollo del proyecto</label>
    		<textarea class="form-control" name="justificacion_capacidad_desarrollo_proyecto" id="justificacion_capacidad_desarrollo_proyecto" placeholder="Digite un justificacion_presupuesto" rows="15">{{$evaluacion_par->justificacion_capacidad_desarrollo_proyecto}}</textarea>
    	</div>   
                </td>
            </tr>
            <tr>
                <td>
                    5. Presupuesto

                </td>
                <td>
                    10

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    "El proyecto evidencia:
    <li> Alta relación entre el presupuesto detallado, los recursos humanos y materiales para llevar a cabo las actividades requeridas.</li>
    <li> Coherencia entre el presupuesto propuesto, la metodología y el cronograma del proyecto."</li>

                </td>
                <td>
                  <div class="form-group">
    		<label for="NombreDepartamento">Presupuesto</label>
    		<input type="number" class="form-control suma" name="presupuesto" id="presupuesto"  min="0" max="10" value="{{$evaluacion_par->presupuesto}}">
    	</div>

    	  
                </td>
                <td>
                    <center>0-3 puntos</center>

                </td>
                <td>
                    <center>4-6  puntos</center>

                </td>
                <td>
                    <center>7-10 puntos </center>

                </td>
                <td>
                 <div class="form-group">
    		<label for="NombreDepartamento">Justificación de la capacidad de desarrollo del proyecto</label>
    		<textarea class="form-control" name="justificacion_presupuesto" id="justificacion_presupuesto" placeholder="Digite un justificacion_presupuesto" rows="15" >{{$evaluacion_par->justificacion_presupuesto}}</textarea>
    	</div>
                </td>
            </tr>
            <tr>
                <td>
                    6. Trabajo colaborativo

                </td>
                <td>
                    8

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>

             <tr>
                <td>
                   El proyecto evidencia trabajo colaborativo así:

                </td>
                <td>
                <div class="form-group">
    		<label for="NombreDepartamento">Trabajo Colaborativo</label>
    		<input type="number" class="form-control suma" name="trabajo_colaborativo" id="trabajo_colaborativo" value="{{$evaluacion_par->trabajo_colaborativo}}" min="0" max="8">
    	</div>

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


                </td>
                <td colspan="3">
                   "4 puntos: a) Intragrupal
    8 puntos:<br> b) Intergrupal <br>
    <strong>Nota:</strong> para la asignación de este puntaje se debe excluir el trabajo con estudiantes de pregrado."       


                </td>
                
                <td>
                 <div class="form-group">
    		<label for="NombreDepartamento">Justificación del trabajo colaborativo</label>
    		<textarea class="form-control" name="justificacion_trabajo_colaborativo" id="justificacion_trabajo_colaborativo" placeholder="justificacion_trabajo_colaborativo" rows="10">{{$evaluacion_par->justificacion_trabajo_colaborativo}}</textarea>
    	</div>  
                </td>
            </tr>

            <tr>
                <td>
                    7. Formación de Recurso Humano

                </td>
                <td>
                    7

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>

             <tr>
                <td>
                   "El proyecto evidencia:
    Desarrollo de trabajo de grado de estudiantes de Pregrado, Maestría y/o tesis Doctoral en programas ofertados por la Universidad del Atlántico. 
    "


                </td>
                <td>
                 <div class="form-group">
    		<label for="NombreDepartamento">Formación de recurso humano</label>
    		<input type="number" class="form-control suma" name="formacion_recurso_humano" id="formacion_recurso_humano" value="{{$evaluacion_par->formacion_recurso_humano}}" min="0" max="7" >
    	</div>

    	  
                </td>
                <td colspan="3">
                   <li> Doctorado: 7 puntos</li>
    <li> Maestría: 5 puntos</li>
    <li> Pregrado: 3 puntos</li>
    Los trabajos de investigación deben estar articulados al proyecto presentado.
    Nota: Los puntajes no son acumulables. Se debe tomar como medida el mayor nivel de formación académica presentado."     


                </td>
                
                <td>
          <div class="form-group">
    		<label for="NombreDepartamento">Justificación de la formacion del recurso_humano</label>
    		<textarea class="form-control" name="justificacion_formacion_recurso_humano" id="justificacion_formacion_recurso_humano" placeholder="justificacion_formacion_recurso_humano" rows="10" v-model="valor">{{$evaluacion_par->justificacion_formacion_recurso_humano}} ></textarea>
    	</div>          
                </td>
            </tr>

             <tr>
                <td>
                    TOTAL->

                </td>
                <td>
                   <div class="form-group">
    		<label for="NombreDepartamento">Total_evaluacion</label>
    		<input type="text" class="form-control" name="Total_evaluacion" id="Total_evaluacion" placeholder="Total_evaluacion" readonly value="{{$evaluacion_par->Total_evaluacion}}" >
    	</div>

                </td>
                <td colspan="4">
                    
                </td>
                
            </tr>

             <tr>
                <td colspan="6">
             CONCEPTO FINAL

                </td>
                
            </tr>
    		<tr>
                <td colspan="6">
                 <div class="form-group">
    			<label for="NombreDepartamento">Concepto final de la evaluacion del Proyecto</label>
    			<textarea class="ckeditor" name="concepto_final" id="concepto_final" placeholder="concepto_final">{{$evaluacion_par->concepto_final}}</textarea>
    			</div>

                </td>
                </tr>
               

            <tr>
                <td>
                   Recomienda el proyecto<br>
    NOTA: El puntaje mínimo para la aprobación del proyecto será de 70 puntos.

                </td>
                
                <td colspan="5">
                    <div class="form-group">
    		<label for="">recomendacion_proyecto</label>
    		<select name="recomendacion_proyecto" id="recomendacion_proyecto" class="form-control" required="required" >

    		@if($evaluacion_par->Total_evaluacion>=70 || $evaluacion_par->recomendacion_proyecto==1)
    		<option value="1" selected>Si recomiendo el Proyecto y/o Articulo</option>
    		<option value="0">No recomiendo el Proyecto y/o Articulo</option>
    		@else
    		<option value="0" selected>No recomiendo el Proyecto y/o Articulo</option>
    		<option value="1">Si recomiendo el Proyecto y/o Articulo</option>
    		


    		@endif



    	</select>
                </td>
                
                

            </tr>

             
            



        </tbody>
    </table>




    	

    	<center><button type="submit" class="btn btn-primary" >Guardar Borrador
            </button>
            <br><small>Nota->Guarda parcialmente. Si se evaluo todo por favor dar click a Finalizar con el boton de abajo</small>
    	</center><p>

    {!! Form::close() !!}


      </div>
      
    </div>

    <hr>
       
      
    </div>
      
         

    <script >
    var app = new Vue({
      el: '#app',
      data: {
        valor: ""
      }
    })

    </script>  


    @endsection


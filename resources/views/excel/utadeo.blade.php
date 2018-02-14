
<table class="table table-hover" border="1" id="Eventos" border="1">
  <thead>
    <tr >
    <th colspan="13" ></th>
    <th align="center">COHERENCIA</th>
    <th colspan="2" align="center">IMPACTO (Aplicabilidad y visibilidad)</th>
    <th></th>
    <th colspan="2"></th>
    <th colspan="3" align="center">PRODUCTOS</th>
    <th colspan="5"></th>

    </tr>
    <tr>
            <th>No.</th>
            <th>CODIGO</th>
            <th>CARPETA  / ARCHIVO O INFORME</th>
            <th>FACULTAD</th>
            <th>DEPENDENCIA</th>
            <th>DENOMINACIÓN DEL PROYECTO</th>
            <th>CONVOCATORIA</th>
            <th>AÑO</th>
            <th>INVESTIGADOR PRINCIPAL</th>
            <th>OBSERVACIONES INFORME</th>
            <th>Evaluador designado</th>
            <th>Fecha de evaluación</th>
            <th>IMPACTO</th>
            <th>2.1. Coherencia entre lo planeado y lo ejecutado</th>
            <th>2.2. Potencial de aplicabilidad,  impacto y sostenibilidad de la solución por un período de tiempo</th>
            <th>2.3. Visibilidad y estrategia</th>
            <th>TOTAL IMPACTO</th>
            <th>TOTAL COHERENCIA</th>
            <th>TOTAL EVALUACIÓN PARES</th>
            <th>1.1. Generación de Resultados de Nuevo Conocimiento (NNC)*</th>
            <th>1.2. Resultado de Desarrollo Tecnológico (NCT)</th>
            <th>1.3. Apropiación Social del Conocimiento (ASC)</th>
            <th>TOTAL EVALUACIÓN PRODUCTOS</th>
            <th>PUNTUACIÓN DEFINITIVA</th>
            <th>PUNTUACIÓN DEFINITIVA (PROMEDIO DE LOS DOS PARES)</th>
            <th>OBSERVACIONES</th>
            <th>Lo recomienda</th>
 

    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

<td>{{$row->id}}</td>
<td>{{$row->CODIGO}}</td>
<td>{{$row->CARPETA_ARCHIVO_O_INFORME}}</td>
<td>{{$row->Facultad}}</td>
<td>{{$row->DEPENDENCIA}}</td>
<td>{{$row->DescripcionProyecto_Articulo}}</td>
<td>{{$row->CONVOCATORIA}}</td>
<td>{{$row->ANIO}}</td>
<td>{{$row->INVESTIGADOR_PRINCIPAL}}</td>
<td><!--OBSERVACIONES INFORME--></td>
<td>{{$row->evaluadores->NombreEvaluador}}</td>
<td>{{$row->Fecha_Envio_a_Evaluador}}</td>



@php
  $criterios = App\criterios_evaluacion::where('id_proyectos_articulos',$row->id)->get();
  $criterios2 = App\criterios_evaluacion::where('id_proyectos_articulos',$row->id)->first();
@endphp
 
  @foreach ($criterios as $d)
  <td>{{$d->Puntaje_evaluador}}</td>
  @endforeach
    <td><?php echo $criterios2->Total_evaluacion; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

    <td><?php echo $criterios2->concepto_final; ?></td>
  

 <td><?php if ($criterios2->recomendacion_proyecto==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>



@endforeach





 



      </tr> 
  </tbody>




</table>


    
        
     
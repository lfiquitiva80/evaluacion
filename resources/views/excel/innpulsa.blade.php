
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr >
    <th colspan="6"></th>
    <th colspan="8">PARÁMETROS A EVALUAR</th>
    <th colspan="8" ></th>

    </tr>
    <tr>
<th>id</th>
<th>CATEGORÍA</th>
<th>TÍTULO DEL TRABAJO</th>
<th>ÁREA EN LA QUE PARTICIPA</th>
<th>Evaluador designado</th>
<th>Fecha_Envio_a_Evaluador</th>
<th>Originalidad del trabajo</th>
<th>Interés e importancia del tema en el ámbito de la disciplina</th>
<th>Componente teórico conceptual</th>
<th>Componente metodológico (Calidad Científica y Tecnológica)</th>
<th>Análisis crítico de los resultados</th>
<th>Posible impacto y utilidad de los resultados de la investigación.</th>
<th>Coherencia interna del trabajo </th>
<th>Claridad en la presentación del trabajo</th>
<th>PUNTAJE TOTAL</th>
<th>PROMEDIO</th>
<th>CONCEPTO GENERAL SOBRE EL TRABAJO</th>
<th>¿Las características de este trabajo ameritan el otorgamiento del Premio, considerando que el estímulo es de 32 SMLMV para investigador consolidado y de  13 SMLMV para investigador en formación?</th>
<th>Conflicto de interés real:</th>
<th>Conflicto de interés aparente:</th>
<th>Conflicto de interés potencial:</th>
 

    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

<td>{{$row->id}}</td>
<td>{{$row->categoria}}</td>
<td>{{$row->DescripcionProyecto_Articulo}}</td>
<td>{{$row->area}}</td>
<td><?php $comment = App\evaluadores::find($row->id_evaluador); echo $comment->NombreEvaluador?></td>
<td>{{$row->Fecha_Envio_a_Evaluador}}</td>
@php
  $criterios = App\criterios_evaluacion::where('id_proyectos_articulos',$row->id)->get();
  $criterios2 = App\criterios_evaluacion::where('id_proyectos_articulos',$row->id)->first();
@endphp
 
  @foreach ($criterios as $d)
  <td>{{$d->Puntaje_evaluador}}</td>
  @endforeach
    <td><?php echo $criterios2->Total_evaluacion; ?></td>
    <td>promedio</td>
    <td><?php echo $criterios2->concepto_final; ?></td>
  

 <td><?php if ($criterios2->caracteristicas==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

 <td><?php if ($criterios2->conflicto_real==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

<td><?php if ($criterios2->conflicto_aparente==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

 <td><?php if ($criterios2->conflicto_potencial==1) {
    echo "Si";
} else {
    echo "No";
}?></td>



@endforeach




<td></td>
<td></td>
<td></td>
<td></td>
 



      </tr> 
  </tbody>




</table>


    
        
     
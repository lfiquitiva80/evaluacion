
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
<th>id</th>
<th>categoria</th>
<th>DescripcionProyecto_Articulo</th>
<th>area</th>
<th>id_evaluador</th>
<th>Fecha de Evaluación</th>
<th>id_proyectos_articulos</th>
<th>DescripcionEvaluacion</th>
<th>Desc_criterio_eval</th>
<th>Puntaje_Maximo</th>
<th>Puntaje_evaluador</th>
<th>Justificacion_Comentarios</th>
<th>Total_evaluacion</th>
<th>concepto_final</th>
<th>recomendacion_proyecto</th>
<th>caracteristicas</th>
<th>conflicto_real</th>
<th>conflicto_aparente</th>
<th>conflicto_potencial</th>


    
    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

<td>{{$row->id}}</td>
<td><?php if ($row->categoria==1) {
    echo "Investigador Consolidado";
} else {
    echo "Investigador en Formación";
}
  ?></td>


<td>{{$row->DescripcionProyecto_Articulo}}</td>
<td>{{$row->area}}</td>
<td><?php $comment = App\evaluadores::find($row->id_evaluador); echo $comment->NombreEvaluador?></td>

<td>{{$row->Fecha_Devolucion_Evaluador}}</td>
<td>{{$row->id_proyectos_articulos}}</td>
<td>{{$row->DescripcionEvaluacion}}</td>
<td><?php echo $row->Desc_criterio_eval; ?></td>
<td>{{$row->Puntaje_Maximo}}</td>
<td>{{$row->Puntaje_evaluador}}</td>
<td><?php echo $row->Justificacion_Comentarios; ?></td>
<td>{{$row->Total_evaluacion}}</td>
<td><?php echo $row->concepto_final; ?></td>
<td><?php if ($row->recomendacion_proyecto==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

 <td><?php if ($row->caracteristicas==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

 <td><?php if ($row->conflicto_real==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

<td><?php if ($row->conflicto_aparente==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>

 <td><?php if ($row->conflicto_potencial==1) {
    echo "Si";
} else {
    echo "No";
}
 ?></td>









              
 
       

        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>

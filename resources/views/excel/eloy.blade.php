
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
                                <th>id</th>
                                <th>Plantilla</th>
                                <th>categoria</th>
                                <th>DescripcionProyecto_Articulo</th>
                                <th>area</th>
                                <th>id_evaluador</th>
                                <th>prueba</th>
                                <th>Fecha de Evaluación</th>
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
                                      <td>{{$row->plantilla}}</td>
                                      <td>{{$row->categoria}}</td>
                                      <td>{{$row->DescripcionProyecto_Articulo}}</td>
                                      <td>{{$row->area}}</td>
                                      <td><?php $comment = App\evaluadores::find($row->id_evaluador); echo $comment->NombreEvaluador?></td>

                                      <td>{{$productsts->criterios_evaluacion()}}</td>

                                      <td>{{$row->Fecha_Devolucion_Evaluador}}</td>
                                    
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
      @endforeach
  </tbody>




</table>

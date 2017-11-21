
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre_convocatoria</th>
      <th>Codigo_convocatoria</th>
      <th>Presuesto</th>
      <th>Objetivo</th>
      <th>Resumen_Proyecto</th>
      <th>Duracion_proyecto</th>
      <th>Valor_confinaciado_solicitado</th>
      <th>Valor_Contrapartida_Propuesto</th>
      <th>Valor_Total_Poryecto</th>
      <th>Fecha_Envio_a_Evaluador</th>
      <th>Fecha_Aceptacion</th>
      <th>Fecha_Pago_Financiera</th>
      <th>Fecha_inicio</th>
      <th>Fecha_Devolucion_Evaluador</th>
      <th>Observaciones</th>
      <th>Metas_Indicadores_Resultados_esperados</th>
      <th>Pais</th>
      <th>Departamento_Intervencioin</th>
      <th>Municipio_Intervencion</th>
      <th>Sectores_Usuarios_Finales</th>
      <th>Subsectores_Usuarios_Finales</th>
      <th>Num_Usuarios_Finales</th>
      <th>Grupo_Investigacion</th>
      <th>DescripcionProyecto_Articulo</th>
      <th>proyecto_pdf</th>
      <th>calificacion_proyecto</th>
      <th>CoordinadorProyecto_Articulo</th>
      <th>id_evaluador</th>
      <th>correo_invitacion</th>
      <th>Aceptacion</th>
      <th>correo_documentos</th>
      <th>correo_pago</th>
      <th>correo_gestion_pago</th>
      <th>certificadoypago</th>
      <th>correo_norespuesta</th>
      <th>proyecto_completado</th>
      <th>categoria</th>
      <th>area</th>
      <th>img_proyecto</th>
      <th>sepaga</th>
      <th>pago_evaluador</th>
      <th>plantilla</th>
      <th>doc_confidencialidad</th>
      <th>created_at</th>
      <th>updated_at</th>
      <th>_token</th>
      <th>_method</th>




    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

      <td>{{$row->id}}</td>
      <td>{{$row->Nombre_convocatoria}}</td>
      <td>{{$row->Codigo_convocatoria}}</td>
      <td>{{$row->Presuesto}}</td>
      <td>{{$row->Objetivo}}</td>
      <td>{{$row->Resumen_Proyecto}}</td>
      <td>{{$row->Duracion_proyecto}}</td>
      <td>{{$row->Valor_confinaciado_solicitado}}</td>
      <td>{{$row->Valor_Contrapartida_Propuesto}}</td>
      <td>{{$row->Valor_Total_Poryecto}}</td>
      <td>{{$row->Fecha_Envio_a_Evaluador}}</td>
      <td>{{$row->Fecha_Aceptacion}}</td>
      <td>{{$row->Fecha_Pago_Financiera}}</td>
      <td>{{$row->Fecha_inicio}}</td>
      <td>{{$row->Fecha_Devolucion_Evaluador}}</td>
      <td>{{$row->Observaciones}}</td>
      <td>{{$row->Metas_Indicadores_Resultados_esperados}}</td>
      <td>{{$row->Pais}}</td>
      <td>{{$row->Departamento_Intervencioin}}</td>
      <td>{{$row->Municipio_Intervencion}}</td>
      <td>{{$row->Sectores_Usuarios_Finales}}</td>
      <td>{{$row->Subsectores_Usuarios_Finales}}</td>
      <td>{{$row->Num_Usuarios_Finales}}</td>
      <td>{{$row->Grupo_Investigacion}}</td>
      <td>{{$row->DescripcionProyecto_Articulo}}</td>
      <td>{{$row->proyecto_pdf}}</td>
      <td>{{$row->calificacion_proyecto}}</td>
      <td>{{$row->CoordinadorProyecto_Articulo}}</td>
      <td>{{$row->id_evaluador}}</td>
      <td>{{$row->correo_invitacion}}</td>
      <td>{{$row->Aceptacion}}</td>
      <td>{{$row->correo_documentos}}</td>
      <td>{{$row->correo_pago}}</td>
      <td>{{$row->correo_gestion_pago}}</td>
      <td>{{$row->certificadoypago}}</td>
      <td>{{$row->correo_norespuesta}}</td>
      <td>{{$row->proyecto_completado}}</td>
      <td>{{$row->categoria}}</td>
      <td>{{$row->area}}</td>
      <td>{{$row->img_proyecto}}</td>
      <td>{{$row->sepaga}}</td>
      <td>{{$row->pago_evaluador}}</td>
      <td>{{$row->plantilla}}</td>
      <td>{{$row->doc_confidencialidad}}</td>
      <td>{{$row->created_at}}</td>
      <td>{{$row->updated_at}}</td>
      <td>{{$row->_token}}</td>
      <td>{{$row->_method}}</td>







        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>

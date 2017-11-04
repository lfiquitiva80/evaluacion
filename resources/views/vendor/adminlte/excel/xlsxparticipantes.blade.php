
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
      <th>id</th>
      <th>Id_Evento</th>
      <th>Documento de Identidad</th>
      <th>Tipo de Documento</th>
      <th>NombresApellidos</th>
      <th>UnidadAcademica</th>
      <th>Disciplina</th>
      <th>GrupodeInvestigacion</th>
      <th>LineasdeInvestigacions</th>
      <th>TelefonoFijo</th>
      <th>TelefonoMovil</th>
      <th>Correo</th>
      <th>Cargo</th>
      <th>AsistioPrimeraSession</th>
      <th>AsistioSegundaSession</th>
      <th>AsistioTerceraSession</th>
      <th>Fecha_Asistencia</th>
     



    
    </tr>
  </thead>
  <tbody>

  @foreach($products as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td>{{$row->Documento}}</td>
          <td>{{$row->TipoDocumento}}</td>
          <td>{{$row->NombresApellidos}}</td>
          <td>{{$row->UnidadAcademica}}</td>
          <td>{{$row->Disciplina}}</td>
          <td>{{$row->GrupodeInvestigacion}}</td>
          <td>{{$row->LineasdeInvestigacion }}</td>
          <td>{{$row->TelefonoFijo}}</td>
          <td>{{$row->TelefonoMovil}}</td>
          <td>{{$row->Correo}}</td>
          <td>{{$row->Cargo}}</td>
          <td>@if($row->Asistio===1) Si @else No @endif</td>
          <td>@if($row->Asistio2===1) Si @else No @endif</td>
          <td>@if($row->Asistio3===1) Si @else No @endif</td>
          <td>{{$row->Fecha_Asistencia}}</td>         
          
          

              
 
       

        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>

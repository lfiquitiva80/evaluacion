<table>
    <tr>
        <td>id</td>
<td>Tema</td>
<td>NombredelEvento</td>
<td>Lugar</td>
<td>id_ciudad</td>
<td>Ciudad_extranjero</td>
<td>Fecha_inicial</td>
<td>Fecha_Final</td>
<td>Organizador</td>
<td>Pais</td>
<td>id_departamento</td>
<td>Persona_Encargada_difusion</td>
<td>Tipo de Recurso</td>
<td>Nombre del Proyecto</td>
<td>Puntos_claves</td>
<td>id_user</td>
<td>Municipio</td>
<td>Codigo_Departamento</td>
<td>NombreDepartamento</td>
<td>Usuario que registro el evento</td>
<td>email Usuario</td>
<td>cedula</td>
<td>Encargado de la Difusión</td>
<td>Fecha_Nacimiento</td>
<td>Cargo</td>
<td>Nivel</td>
<td>Celular</td>
<td>mail_encargado de la difusión</td>
<td>areatematica</td>
<td>id_evento</td>
<td>nombres_Participante</td>
<td>tipodeParticipacion</td>
<td>Requiere_tiquetes_avion</td>
<td>Requiere_hotel</td>
<td>Pais_Origen</td>
<td>Departamento_Origen</td>
<td>Ciudad_Origen</td>
<td>Ciudad_extranjero</td>
<td>Pais_Destino</td>
<td>Departamento_destino</td>
<td>Ciudad_Destino</td>
<td>Ciudad_extranjero_destino</td>
<td>Fecha Tiquete</td>
<td>Horario_Salida</td>
<td>Participante Tiquete</td>
<td>Fecha de Nacimiento</td>
<td>Cedula Participante</td>



        
    </tr>
    @foreach($products as $row)
        <tr>
<td>{{ $row->id}}</td>
<td>{{ $row->Tema }}</td>
<td>{{ $row->NombredelEvento }}</td>
<td>{{ $row->Lugar }}</td>
<td>{{ $row->id_ciudad }}</td>
<td>{{ $row->Ciudad_extranjero }}</td>
<td>{{ $row->Fecha_inicial }}</td>
<td>{{ $row->Fecha_Final }}</td>
<td>{{ $row->Organizador }}</td>
<td>{{ $row->Pais }}</td>
<td>{{ $row->id_departamento }}</td>
<td>{{ $row->Persona_Encargada_difusion }}</td>
<td>{{ $row->Tipo_Recurso}}</td>
<td>{{ $row->NombreProyecto }}</td>
<td>{{ $row->Puntos_claves }}</td>
<td>{{ $row->id_user }}</td>
<td>{{ $row->Municipio }}</td>
<td>{{ $row->Codigo_Departamento }}</td>
<td>{{ $row->NombreDepartamento }}</td>
<td>{{ $row->name }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->cedula }}</td>
<td>{{ $row->NombresApellidos }}</td>
<td>{{ $row->Fecha_Nacimiento}}</td>
<td>{{ $row->Cargo }}</td>
<td>{{ $row->Nivel }}</td>
<td>{{ $row->Celular }}</td>
<td>{{ $row->mail }}</td>
 <td><?php $comment = App\area_tematica::find($row->id_areatematica); echo $comment->Tematica ?> </td>
<td>{{ $row->id_evento }}</td>
 <td><?php $comment = App\funcionarios::find($row->id_nombres); echo $comment->NombresApellidos; ?> </td>
        <td><?php $comment = App\tipo_participacion::find($row->id_tipodeParticipacion); echo $comment->Tipos; ?></td>
          <td>@if($row->Requiere_tiquetes_avion===1) Si @else No @endif</td>
          
          
          <td>@if($row->Requiere_hotel===1)Si @else No @endif</td>
<td><?php $comment = App\paises::find($row->Pais_Origen); echo $comment->Pais; ?> </td>
   <td><?php $comment = App\departamento::find($row->Departamento_Origen); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Origen); echo $comment->Municipio; ?> </td>
<td>{{ $row->Ciudad_extranjero }}</td>
<td><?php $comment = App\paises::find($row->Pais_Destino); echo $comment->Pais; ?> </td>
  <td><?php $comment = App\departamento::find($row->Departamento_destino); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Destino); echo $comment->Municipio; ?> </td>
<td>{{ $row->Ciudad_extranjero_destino }}</td>
<td>{{ $row->Fecha }}</td>
<td>{{ $row->Horario_Salida }}</td>
<td><?php $func = App\funcionarios::find($row->id_participante); echo $func->NombresApellidos; ?> </td>
<td><?php $func = App\funcionarios::find($row->id_participante); echo $func->Fecha_Nacimiento; ?> </td>
<td><?php $func = App\funcionarios::find($row->id_participante); echo $func->cedula; ?> </td>


            
        </tr>
    @endforeach
</table>
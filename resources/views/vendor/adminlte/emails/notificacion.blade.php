<!DOCTYPE html>
<html>
<head>
	<title>Solicitud Tiquetes para Evento</title>
</head>
<body>




<div class="container"></div>







<div class="container"></div>

    <?php  
        $evento = DB::table('eventos_general')->where('id',$idcorreo)->get();
        ?>

<br>Un cordial saludo
<p>
<b>Mi estimada Angelica.</b>

<p>

<BR>Anexo los siguientes datos, para la solicitud de los tiquetes del evento.





<div class="container">

<h4><b><center>INFORMACION DEL EVENTO</h4></b></center>






<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
<th>Tema</th>
<th>NombredelEvento</th>
<th>Lugar</th>
<th>id_ciudad</th>
<th>Ciudad_extranjero</th>
<th>Fecha_inicial</th>
<th>Fecha_Final</th>
<th>Organizador</th>
<th>Pais</th>
<th>Persona_Encargada_difusion</th>
<th>Usuario</th>
<th>Tipo de Recurso</th>
<th>Nombre del Proyecto</th>
<th>Puntos_claves</th>
<th>Edición</th>



    
    </tr>
  </thead>
  <tbody>

  @foreach($evento as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->Tema}}</td>
          <td>{{$row->NombredelEvento}}</td>
          <td>{{$row->Lugar}}</td>
          <!--<td>{{$row->id_ciudad}}</td>-->
          <td><?php $comment = App\municipios::find($row->id_ciudad); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero}}</td>
          <td>{{$row->Fecha_inicial}}</td>
          <td>{{$row->Fecha_Final}}</td>
          <td>{{$row->Organizador}}</td>
          <!--<td>{{$row->Pais}}</td>-->
<td><?php $comment = App\paises::find($row->Pais); echo $comment->Pais; ?> </td>
          <!--<td>{{$row->Persona_Encargada_difusion}}</td>-->
      
         <td><?php $comment = App\funcionarios::find($row->Persona_Encargada_difusion); echo $comment->NombresApellidos; ?> </td>

          <td>{{$row->id_user}}</td>
          <td>{{$row->Tipo_Recurso}}</td>
          <td>{{$row->NombreProyecto}}</td>
          <td>{{$row->Puntos_claves}}</td>

         
        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>

<div class="container">

<h4><b><center>INFORMACION DE PARTICIPANTES</h4></b>

<center>
<?php  
        $participante= DB::table('participantes')->where('Id_evento',$idcorreo)->get();; 
        ?>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
<th>Id_Evento</th>
<th>Participante</th>
<th>Tipo de Participación</th>
<th>Requiere_ticket?</th>

<!--<th>Fecha_hora==> IDA</th>
<th>Fecha_hora<== VUELTA</th>-->
<th>Requiere Hotel?</th>




    
    </tr>
  </thead>
  <tbody>

  @foreach($participante as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td><?php $comment = App\funcionarios::find($row->id_nombres); echo $comment->NombresApellidos; ?> </td>
        <td><?php $comment = App\tipo_participacion::find($row->id_tipodeParticipacion); echo $comment->Tipos; ?></td>
          <td>@if($row->Requiere_tiquetes_avion===1) Si @else No @endif</td>
          
          
          <td>@if($row->Requiere_hotel===1)Si @else No @endif</td>
          

              
 
     

              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>

</center>

</div>
 

<?php  
        $tiquete= DB::table('tiquetes')->where('Id_evento',$idcorreo)->get();  
        ?>

  </div>
</div>



<div class="container">
<h4><b><center>REGISTROS DE TIQUETES</h4></b></center>
<center>
          
         



<table class="table table-hover" border="1">
  <thead>
    <tr class="Success">
      <th>id</th>
      <th>id_evento</th>
      <th>Fecha</th>
      <th>Participante</th>
      <th>Cedula</th>
      <th>Fecha de Nacimiento</th>
      <th>Horario de Salida</th>
      <th>Pais_Origen</th>
      <th>Departamento Origen</th>
      <th>Ciudad_Origen</th>
      <th>Ciudad_extranjero</th>
      <th>Pais_Destino</th>
      <th>Departamento Destino</th>
      <th>Ciudad_Destino</th>
      <th>Ciudad_extranjero_destino</th>
     
    
      
     <!-- <th>Edición</th>-->
   
    </tr>
  </thead>
  <tbody>

  @foreach($tiquete as $row)
    <tr class="Success">

          <td >{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td>{{$row->Fecha}}</td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->NombresApellidos; ?> </td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->cedula; ?> </td>
  <td><?php $func = App\funcionarios::find($row->id_participante); echo $func->Fecha_Nacimiento; ?> </td>
  
          <td>{{$row->Horario_Salida}}</td>
                  
                    <td><?php $comment = App\paises::find($row->Pais_Origen); echo $comment->Pais; ?> </td>
   <td><?php $comment = App\departamento::find($row->Departamento_Origen); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Origen); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero}}</td>
          <td><?php $comment = App\paises::find($row->Pais_Destino); echo $comment->Pais; ?> </td>
  <td><?php $comment = App\departamento::find($row->Departamento_destino); echo $comment->NombreDepartamento; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Destino); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero_destino}}</td>
          
          
          

          
          

              
 <!--
        <td><a href="{{ $url = route('tiquetes.edit', $row->id) }}" class="glyphicon glyphicon-pencil" aria-hidden="true">Edicion</a></td>-->
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>



<br>Cualquier inquietud no dudar en llamar.
<br>Att,
<p>
<br>{{ Auth::user()->name }} 
<br>{{ Auth::user()->email}}
</body>
</html>
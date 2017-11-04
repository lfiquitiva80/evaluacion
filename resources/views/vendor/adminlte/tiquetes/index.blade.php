@extends('layouts.appdos')

@section('content')
<div class="container">
<h4><b><center>REGISTROS DE TIQUETES</h4></b></center>


<a href="{{ $url = route('tiquetes.create') }}" class="btn btn-primary">Registar Nuevos tiquetes</a>
<p>
<div style="overflow-y: hidden;">
<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>id_evento</th>
      <th>Pais_Origen</th>
      <th>Ciudad_Origen</th>
      <th>Ciudad_extranjero</th>
      <th>Pais_Destino</th>
      <th>Ciudad_Destino</th>
      <th>Ciudad_extranjero_destino</th>
      <th>Fecha</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($tiquete as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->id_evento}}</td>
          <td><?php $comment = App\paises::find($row->Pais_Origen); echo $comment->Pais; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Origen); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero}}</td>
          <td><?php $comment = App\paises::find($row->Pais_Destino); echo $comment->Pais; ?> </td>
          <td><?php $comment = App\municipios::find($row->Ciudad_Destino); echo $comment->Municipio; ?> </td>
          <td>{{$row->Ciudad_extranjero_destino}}</td>
          <td>{{$row->Fecha}}</td>

          
          

              
 
        <td><a href="{{ $url = route('tiquetes.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
</div>



</div>





@endsection


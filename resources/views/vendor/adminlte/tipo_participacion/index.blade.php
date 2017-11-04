@extends('layouts.appdos')

@section('content')
 <div class="panel-body">
  
<div class="container">
<div class="panel panel-default">
<h4><b><center>REGISTROS DE TIPO DE PARTICIPACION</h4></b></center>


<a href="{{ $url = route('tipo_participacion.create') }}" class="btn btn-primary">Registar Nuevo Municipio</a>
<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre Municipio</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($tipo as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->Tipos}}</td>
          
          

              
 
        <td><a href="{{ $url = route('tipo_participacion.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>
</div>
</div>





@endsection


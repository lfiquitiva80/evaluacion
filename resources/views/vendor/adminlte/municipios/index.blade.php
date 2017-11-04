@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
 <div class="panel-body">
  
<div class="container">
<div class="panel panel-default">
<h4><b><center>REGISTROS DE MUNICIPIOS</h4></b></center>


<a href="{{ $url = route('municipios.create') }}" class="btn btn-primary">Registar Nuevo Municipio</a>
<p>

<table class="table table-hover" id="mimunicipio">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre Municipio</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($municipio as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->Municipio}}</td>
          
          

              
 
        <td><a href="{{ $url = route('municipios.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>
</div>
</div>

<center>{{ $municipio->links() }}</center>



@endsection


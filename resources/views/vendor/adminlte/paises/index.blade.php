@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
 <div class="panel-body">
  
<div class="container">
<div class="panel panel-default">
<h4><b><center>REGISTROS DE PAISES</h4></b></center>


<a href="{{ $url = route('paises.create') }}" class="btn btn-primary">Registar Nuevo Pais</a>
<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>Pais</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($pais as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->Pais}}</td>
          
          

              
 
        <td><a href="{{ $url = route('paises.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
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


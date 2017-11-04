@extends('adminlte::layouts.app')
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
 <div class="panel-body">
  
<div class="container">
<div class="panel panel-default">
<h4><b><center>REGISTRO DEPARTAMENTO</h4></b></center>


<a href="{{ $url = route('departamento.create') }}" class="btn btn-primary">Registar Nuevo Departamento</a>
<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>NombreDepartamento</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($departamento as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->NombreDepartamento}}</td>
          
          

              
 
        <td><a href="{{ $url = route('departamento.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>
</div>
</div>

<center>{{ $departamento->links() }}</center>



@endsection


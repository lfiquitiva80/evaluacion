@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">
  
<div class="container">
{!! Form::open(['route' => 'funcionarios.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE FUNCIONARIOS</h4></b></center>


<a href="{{ $url = route('funcionarios.create') }}" class="btn btn-primary">Registar Nuevos funcionarios</a>




<p>

<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>Cedula</th>
      <th>Nombre funcionarios</th>
      <th>Fecha Nacimiento</th>
      <th>Cargo</th>
      <th>Nivel</th>
      <th>Celular</th>
      <th>mail</th>
      <th>Edición</th>
   
    </tr>
  </thead>
  <tbody>

  @foreach($funcionarios as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->cedula}}</td>
          <td>{{$row->NombresApellidos}}</td>
          <td>{{$row->Fecha_Nacimiento}}</td>
          <td>{{$row->Cargo}}</td>
          <td>{{$row->Nivel}}</td>
          <td>{{$row->Celular}}</td>
          <td>{{$row->mail}}</td>

          
          

              
 
        <td><a href="{{ $url = route('funcionarios.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>



</div>

</div>
</div>

<center><h3><?php echo $funcionarios->render(); ?></center></h3>

@endsection


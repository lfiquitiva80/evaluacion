@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


    <div class="panel-body">
    
    <div class="container">
  {!! Form::open(['route' => 'usuarios.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
  <!--<form class="navbar-form navbar-right" role="search">-->
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>


{!! Form::close() !!}


<div class="panel panel-default">

<h4><b><center>REGISTROS DE usuarios</h4></b></center>


<a href="{{ $url = route('usuarios.create') }}" class="btn btn-primary">Registar Nuevos usuarios</a>




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Name</td>
      <td>  email  </td>
      <td>  password</td>
      <td>  TipoUsers  </td>
      <td>  Acción </td>

     
   
    </tr>
  </thead>
  <tbody>

  @foreach($usuarios as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>{{$row->password}}</td>
          <td><?php if ($row->TipoUsers==0) {
            echo "Estándar";
          } else {
           echo "Administrador";
          }
           ?></td>
          

         

          
          

              
 
        <td><a href="{{ $url = route('usuarios.edit', $row->id) }}" class="btn btn-success">Edicion</a></td>
        <!--<td><a href="{{ $url = route('eventos_general.destroy', $row->id) }}" class="btn btn-danger">Eliminar</a></td>-->


              


        </td></td>  
      
    </tr>
  </tbody>

  @endforeach


</table>
</div>
<center>{{ $usuarios->links() }}</center>

</div>

</div>
</div>




@endsection


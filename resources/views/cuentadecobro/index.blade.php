@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'cuentadecobro.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE CUENTAS DE COBRO POR PROYECTO</h4></b></center>


<a href="{{ $url = route('cuentadecobro.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Cuentas de Cobro</a>




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Proyecto</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($cuenta as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td><?php $comment = App\proyectos_articulos::find($row->proyecto_articulo_id); echo $comment->DescripcionProyecto_Articulo ?></td>
          <td><a href="{{ $url = route('cuentadecobro.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('cuentadecobro.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $cuenta->links() }}</center>

</div>

</div>
</div>



@endsection

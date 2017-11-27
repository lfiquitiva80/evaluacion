@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 
{!! Form::open(['route' => 'gestion_pago.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>CONFIRMACION GESTION DE PAGO POR PARTE DE ADMINISTRACION FINANCIERA</h4></b></center>


<!--<a href="{{ $url = route('evaluadores.create') }}" class="btn btn-primary">Registar Nuevos evaluadores</a>-->
 <div class="panel-body">

<div class="container">
<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
        <td>  id  </td>
        <td>  Proyectos Pendientes por Pago</td>
        <td>  id_Evaluador</td>
        <!--<td> Correo Invitación</td>
        <td> Correo Aceptación</td>
        <td> Correo Documentos</td>
        <td> Correo Pago</td>-->
        <td> Correo Gestion de Pago</td>
        <td> Fecha de Confirmación de Pago</td>
        <!--<td> Correo Certificado y pago</td>
        <td> El Evaluador NO acepto</td>
        <td> Proyecto Completo</td>
        <td> Certificado PDF</td>-->


  
    </tr>
  </thead>
  <tbody>

  @foreach($comunicados as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->DescripcionProyecto_Articulo}}</td>
           <td><a href="{{ $url = route('proyectos_articulos.edit', $row->id) }}">
          <?php $comment = App\evaluadores::find($row->id_evaluador); $comment->id_users;
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?>
          </a></td>


         
        
       @if(empty($row->Fecha_Pago_Financiera))
       <td>
        <a href="{{ $url = route('confirmacionpago',$row->id) }}" class="btn btn-success"><i class="fa fa-usd" aria-hidden="true"></i> Confirmar el Pago</a></td>
        @else
        <td>
        <a href="{{ $url = route('confirmacionpago',$row->id) }}" class="btn btn-info"><i class="fa fa-usd" aria-hidden="true"></i> Pago Realizado -Ok</a>
        @endif

        </td>
        
        

        <td>
        {{$row->Fecha_Pago_Financiera}}
        </td>
        </a></td>

  

    </tr>
  </tbody>

  @endforeach


</table>
</div>
<center>{{$comunicados->links()}}</center>

</div>

</div>
</div>



@endsection


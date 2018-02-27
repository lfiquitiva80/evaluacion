@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'comunicados.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}

</div>

<div class="panel panel-default">
<h4><b><center>CORREOS CON LOS SIGUIENTES PROCESOS</h4></b></center>

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
        <td>  id  </td>
        <td>  Descripción Proyecto Articulo</td>
        <td>  id_Evaluador</td>
        <td> Correo Invitación</td>
        <td> Correo Aceptación</td>
        <!--<td> Correo Documentos</td>-->
        <td> Correo Pago</td>
        <td> Correo Gestión Financiera</td>
        <td> Correo Certificado y pago</td>
        <td> Correo (No respuesta)</td>
        <td>Proyecto Completo</td>
        <td> Certificado PDF</td>
        <td> Correo Rectificación</td>


  
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



        <td>
        @if ($row->correo_invitacion!=0)
        <a href="{{ $url = route('invitacion',$row->id) }}" class="glyphicon glyphicon-envelope" aria-hidden="true" style="color:blue;"></a>
        @else
        <a href="{{ $url = route('invitacion',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="color:red;"></span></a>
        @endif
        </td>

         <td>
        @if ($row->Aceptacion!=0)
        <a class="fa fa-check-square-o" aria-hidden="true" style="color:blue;"></a>
        @else
        <a class="btn btn-info"><span class="fa fa-check-square-o" aria-hidden="true" style="color:red;"></span></a>
        @endif
        </td>

      <!--  <td>
       @if ($row->correo_documentos!=0)
        <a href="{{ $url = route('documentos',$row->id) }}" class="glyphicon glyphicon-list-alt" aria-hidden="true" style="color:blue;"></a>
        @else
        <a href="{{ $url = route('documentos',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="color:red;"></span></a>
        @endif


        </td>-->
        <td>
          @if ($row->correo_pago!=0)
        <a href="{{ $url = route('pagos',$row->id) }}" class="glyphicon glyphicon-usd" aria-hidden="true" style="color:blue;">
        @else
        <a href="{{ $url = route('pagos',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color:red;"></span>
        @endif


        </a></td>


         <td>
          @if ($row->correo_gestion_pago!=0)
        <a href="{{ $url = route('gestionpago',$row->id) }}" class="glyphicon glyphicon-usd" aria-hidden="true" style="color:blue;">
        @else
        <a href="{{ $url = route('gestionpago',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color:red;"></span>
        @endif


        </a></td>

         <td>

         @if(!empty($row->Fecha_Pago_Financiera))
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
        @endif
        
        @if ($row->certificadoypago!=0)
        <a href="{{ $url = route('certificadoypago',$row->id) }}" class="glyphicon glyphicon-ok-circle" aria-hidden="true" style="color:blue;">
        @else
        <a href="{{ $url = route('certificadoypago',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true" style="color:red;"></span>
        @endif


        </a></td>

        <td>
         @if ($row->correo_norespuesta!=0)
        <a href="{{ $url = route('norespuesta',$row->id) }}" class="glyphicon glyphicon-alert" aria-hidden="true" style="color:blue;"></a>
        @else
        <a href="{{ $url = route('norespuesta',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-alert" aria-hidden="true" style="color:red;"></span></a>
        @endif

        </td>


         <td>
         @if ($row->proyecto_completado!=0)
        <a href="{{ $url = route('devolver_finalevaluacion',$row->id) }}" class="glyphicon glyphicon-ok" aria-hidden="true" style="color:blue;"></a>
        @else
        <a href="{{ $url = route('finalevaluacion',$row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:red;"></span></a>
        @endif

        </td>

         <td>
        <a href="{{ $url = route('certificadotadeo', $row->id) }}"><i class="fa fa-file-pdf-o" aria-hidden="true" ></i></a>
        </td>
         <td>
        <a href="{{ $url = route('comunicados.edit', $row->id) }}"><span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span></a>
        </td>
        

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
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'evaluadores.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE EVALUADORES</h4></b></center>


<a href="{{ $url = route('evaluadores.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Nuevos evaluadores</a>




<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Nombre Evaluador</td>
      <td>  Correo  </td>
      <td>  Firma Digital</td>
      <td>  Hoja de Vida</td>
      <td>  Documento</td>
      <td>  Cert.Bancario</td>
      <!--<td>  Cuenta de Cobro</td>-->
      <td>  Rut</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($evaluadores as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->NombreEvaluador}}</td>
          <td><?php $comment = App\User::find($row->id_users); echo $comment->email;  ?></td>
          <td><a href="{{$row->FirmaDigital}}">
            @if(!empty($row->FirmaDigital))
              <span class="glyphicon glyphicon-check" aria-hidden="true"></span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-check" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <td>
            <a href="{{$row->HV}}">
            @if(!empty($row->HV))
              <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </td>
           <td>
          <a href="{{$row->Cedula_pdf}}">
             @if(!empty($row->Cedula_pdf))
              <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span></a>
            @else
              <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-modal-window" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <td><a href="{{$row->Certificado_Bancario}}">
             @if(!empty($row->Certificado_Bancario))
              <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true" style="color:red;"></span></a>
            @endif
          </a></td>
          <!--<td><a href="{{$row->cuentacobro}}">
            @if(!empty($row->cuentacobro))
              <span class="glyphicon glyphicon-usd" aria-hidden="true"></span></a>
            @else
               <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </a></td>-->

          <td>
          <a href="{{$row->Rut}}">
            @if(!empty($row->Rut))
              <span class="glyphicon glyphicon-link" aria-hidden="true"></span></a>
            @else
             <a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-link" aria-hidden="true" style="color:red;"></span></a>
            @endif

          </td>


        <td><a href="{{ $url = route('evaluadores.edit', $row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edición</a></td>
        <td>@include('evaluadores.destroy')</td>





        </td></td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $evaluadores->links() }}</center>

</div>

</div>
</div>



@endsection

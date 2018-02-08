@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 @if (Auth::user()->TipoUsers==1)

@endif

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-2">



{!! Form::open(['route' => ['cuentadecobro.update', $cuenta->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

  <legend>EDITAR INFORMACION EVALUADORES</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      
    



  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$cuenta->id}}">
  </div>

  <div class="form-group">
    <label for="Direccion">NUMERO DE CUENTA BANCARIA</label>
    <input type="text" class="form-control" name="numerocuenta" id="numerocuenta" placeholder="Digite el número de cuenta" value="{{$cuenta->numerocuenta}}" >
  </div>

  <div class="form-group">
    <label for="Direccion">NOMBRE DEL BANCO</label>
    <input type="text" class="form-control" name="nombrebanco" id="nombrebanco" placeholder="Digite el nombre del Banco" value="{{$cuenta->nombrebanco}}" >
  </div>
  
  <div class="form-group">
    <label for="Direccion">TIPO DE CUENTA</label>
  <select name="tipo_cuenta" id="tipo_cuenta" class="form-control" value="{{$cuenta->tipo_cuenta}}">

    @if($cuenta->tipo_cuenta=="Ahorros")
    <option value="Ahorros" selected>Ahorros</option>
    <option value="Corriente">Corriente</option>
    @else
    <option value="Ahorros">Ahorros</option>
    <option value="Corriente" selected>Corriente</option>
    @endif

  </select>
</div>

<hr>



  
<?php  $proyectos_articulos = DB::table('proyectos_articulos')->get();?>


  <div class="form-group">
      <label for="">•   PROYECTOS Y/O ARTICULOS</label>
      <select name="proyectos_articulos_id" id="proyectos_articulos_id" class="form-control" required="required" placeholder="id_proyectos_articulos" >

        
        @foreach($proyectos_articulos as $row)
            @if($cuenta->proyecto_articulo_id==$row->id)  
          <option value="{{$row->id}}" selected>{{$row->id}} {{$row->DescripcionProyecto_Articulo}}</option>
            @else
          <option value="{{$row->id}}" >{{$row->id}} {{$row->DescripcionProyecto_Articulo}}</option>
            @endif
        @endforeach
      </select>
  </div>

  
  <div class="form-group">
    <label for="">• NOMBRE DEL BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="nombredelbancobeneficiario" id="nombredelbancobeneficiario" placeholder="NOMBRE DEL BANCO BENEFICIARIO"  value="{{$cuenta->nombredelbancobeneficiario}}">
  </div>

  <div class="form-group">
    <label for="">• NUMERO DE CUENTA DEL BENEFICIARIO</label>
    <input type="text" class="form-control" name="numerodecuentadelbeneficiario" id="numerodecuentadelbeneficiario" placeholder="NUMERO DE CUENTA DEL BENEFICIARIO" value="{{$cuenta->numerodecuentadelbeneficiario}}" >
  </div>

  <div class="form-group">
    <label for="funcionario">•  CIUDAD BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="ciudadbancobeneficiario" id="ciudadbancobeneficiario" placeholder="CIUDAD BANCO BENEFICIARIO" value="{{$cuenta->ciudadbancobeneficiario}}" >
  </div>

  <div class="form-group">
    <label for="funcionario">•  PAIS BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="paisbancobeneficiario" id="paisbancobeneficiario" placeholder="PAIS BANCO BENEFICIARIO" value="{{$cuenta->paisbancobeneficiario}}">
  </div>

  <div class="form-group">
    <label for="funcionario">•  CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="codigoabaibanotro" id="codigoabaibanotro" placeholder="CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO" value="{{$cuenta->codigoabaibanotro}}">
  </div>

  <div class="form-group">
    <label for="funcionario">•CODIGO SWIF DEL BANCO DEL BENEFICIARIO BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="codigoswifdelbancodelbeneficiario" id="codigoswifdelbancodelbeneficiario" placeholder="CODIGO SWIF DEL BANCO DEL BENEFICIARIO BANCO BENEFICIARIO" value="{{$cuenta->codigoswifdelbancodelbeneficiario}}">
  </div>

  <hr>
  <div class="form-group">
    <label for="funcionario">•  NOMBRE DEL BANCO INTERMEDIARIO</label>
    <input type="text" class="form-control" name="nombredelbancointermediario" id="nombredelbancointermediario" placeholder="NOMBRE DEL BANCO INTERMEDIARIO" value="{{$cuenta->nombredelbancointermediario}}">
  </div>

  <div class="form-group">
    <label for="funcionario">•  NUMERO DE CUENTA DEL BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="numerodecuentadelbancobeneficiario" id="numerodecuentadelbancobeneficiario" placeholder="NUMERO DE CUENTA DEL BANCO BENEFICIARIO" value="{{$cuenta->numerodecuentadelbancobeneficiario}}">
  </div>

    <div class="form-group">
    <label for="funcionario">• CIUDAD BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="ciudadbancointermediario" id="ciudadbancointermediario" placeholder="CIUDAD BANCO BENEFICIARIO" value="{{$cuenta->ciudadbancointermediario}}">
  </div>

  <div class="form-group">
    <label for="funcionario">• PAIS BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="paisbancointermediario" id="paisbancointermediario" placeholder="PAIS BANCO BENEFICIARIO" value="{{$cuenta->paisbancointermediario}}">
  </div>

  <div class="form-group">
    <label for="funcionario">•  CODIGO SWIFT DEL BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="codigoswiftdelbanco" id="codigoswiftdelbanco" placeholder="CODIGO SWIFT DEL BANCO BENEFICIARIO"
    value="{{$cuenta->codigoswiftdelbanco}}">
  </div>

  <div class="form-group">
    <label for="funcionario">•  CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO</label>
    <input type="text" class="form-control" name="codigoabaibanotrointermediario" id="codigoabaibanotrointermediario" placeholder="CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO" value="{{$cuenta->codigoabaibanotrointermediario}}">
  </div>





  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
  </center><p>

{!! Form::close() !!}


  </div>
</div>
</div>
</div>
  </div>


@endsection


@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'cuentadecobro.store', 'method'=>'POST']) !!}
	<legend>CREAR CUENTA DE COBRO</legend>

	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="Direccion">NUMERO DE CUENTA BANCARIA</label>
		<input type="text" class="form-control" name="numerocuenta" id="numerocuenta" placeholder="Digite el número de cuenta"  required>
	</div>

	<div class="form-group">
		<label for="Direccion">NOMBRE DEL BANCO</label>
		<input type="text" class="form-control" name="nombrebanco" id="nombrebanco" placeholder="Digite el nombre del Banco"  required>
	</div>
	
	<div class="form-group">
		<label for="Direccion">TIPO DE CUENTA</label>
	<select name="tipo_cuenta" id="tipo_cuenta" class="form-control" required>
		<option value="Ahorros">Ahorros</option>
		<option value="Corriente">Corriente</option>
	</select>
</div>

<hr>



	
<?php  $proyectos_articulos = DB::table('proyectos_articulos')->get();?>


	<div class="form-group">
			<label for="">•		PROYECTOS Y/O ARTICULOS</label>
			<select name="proyectos_articulos_id" id="proyectos_articulos_id" class="form-control" required="required" placeholder="id_proyectos_articulos" >

			  @foreach($proyectos_articulos as $row)
			  		@if ($id==$row->id)
					<option value="{{$row->id}}" selected>{{$row->id}} {{$row->DescripcionProyecto_Articulo}}</option>
					@else
					<option value="{{$row->id}}" >{{$row->id}} {{$row->DescripcionProyecto_Articulo}}</option>
					@endif
				@endforeach
			</select>
	</div>
	
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">DATOS DEL BANCO BENEFICIARIO
</h3>
	</div>
	<div class="panel-body">
		

	
	<div class="form-group">
		<label for="">•	NOMBRE DEL BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="nombredelbancobeneficiario" id="nombredelbancobeneficiario" placeholder="NOMBRE DEL BANCO BENEFICIARIO"  >
	</div>

	<div class="form-group">
		<label for="">•	NUMERO DE CUENTA DEL BENEFICIARIO</label>
		<input type="text" class="form-control" name="numerodecuentadelbeneficiario" id="numerodecuentadelbeneficiario" placeholder="NUMERO DE CUENTA DEL BENEFICIARIO"  >
	</div>

	<div class="form-group">
		<label for="funcionario">•	CIUDAD BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="ciudadbancobeneficiario" id="ciudadbancobeneficiario" placeholder="CIUDAD BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	PAIS BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="paisbancobeneficiario" id="paisbancobeneficiario" placeholder="PAIS BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="codigoabaibanotro" id="codigoabaibanotro" placeholder="CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•CODIGO SWIF DEL BANCO DEL BENEFICIARIO BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="codigoswifdelbancodelbeneficiario" id="codigoswifdelbancodelbeneficiario" placeholder="CODIGO SWIF DEL BANCO DEL BENEFICIARIO BANCO BENEFICIARIO">
	</div>
		</div>
</div>
	<hr>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">DATOS DEL BANCO INTERMEDIARIO (ENTIDAD FINANCIERA DONDE EL BANCO DEL BENEFICIARIO TIENE CUENTA)</h3>
		</div>
		<div class="panel-body">
			
		
	<div class="form-group">
		<label for="funcionario">•	NOMBRE DEL BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="nombredelbancointermediario" id="nombredelbancointermediario" placeholder="NOMBRE DEL BANCO INTERMEDIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	NUMERO DE CUENTA DEL BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="numerodecuentadelbancobeneficiario" id="numerodecuentadelbancobeneficiario" placeholder="NUMERO DE CUENTA DEL BANCO BENEFICIARIO">
	</div>

		<div class="form-group">
		<label for="funcionario">• CIUDAD BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="ciudadbancointermediario" id="ciudadbancointermediario" placeholder="CIUDAD BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">• PAIS BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="paisbancointermediario" id="paisbancointermediario" placeholder="PAIS BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	CODIGO SWIFT DEL BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="codigoswiftdelbanco" id="codigoswiftdelbanco" placeholder="CODIGO SWIFT DEL BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•  CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="codigoabaibanotrointermediario" id="codigoabaibanotrointermediario" placeholder="CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO">
	</div>

	</div>
	</div>


	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection


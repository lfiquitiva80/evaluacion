
<!--@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<section class="content">
      <div class="row">
        <!~~ left column ~~>
        <div class="col-md-6">

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">
  
  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'cuentadecobro.store', 'method'=>'POST']) !!}
	<legend>CREAR CUENTA DE COBRO</legend>

	<label for="">Escoga el Tipo de Banco</label>
	
	<button id="local" class="btn btn-primary">Datos de Cuenta Local en Colombia</button>
	<button id="exterior" class="btn btn-info">Datos Cuenta en el Exterior</button>
	

	<hr>

	<script type="text/javascript">

		$(function() {
			//$('#cuentacolombia').hide();
			//$('#cuentabeneficiario').hide();
			//$('#cuentaintermediario').hide();

			$('#local').click(function(event) {
				event.preventDefault();
				$('#cuentacolombia').show();
				$('#cuentabeneficiario').hide();
				$('#cuentaintermediario').hide();
				});

			$('#exterior').click(function(event) {
				event.preventDefault();
				$('#cuentabeneficiario').show();
				$('#cuentacolombia').hide();
				$('#cuentaintermediario').show();
			});

			
		});

	</script>

	<div class="panel panel-default" id="cuentacolombia">
		<div class="panel-heading">
			<h3 class="panel-title">DATOS CUENTA LOCAL EN COLOMBIA</h3>
		</div>
		<div class="panel-body">
			
		
	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>

	<div class="form-group">
		<label for="Direccion">NUMERO DE CUENTA BANCARIA</label>
		<input type="text" class="form-control" name="numerocuenta" id="numerocuenta" placeholder="Digite el número de cuenta"  >
	</div>

	<div class="form-group">
		<label for="Direccion">NOMBRE DEL BANCO</label>
		<input type="text" class="form-control" name="nombrebanco" id="nombrebanco" placeholder="Digite el nombre del Banco">
	</div>
	
	<div class="form-group">
		<label for="Direccion">TIPO DE CUENTA</label>
	<select name="tipo_cuenta" id="tipo_cuenta" class="form-control" >
		<option value="Ahorros">Ahorros</option>
		<option value="Corriente">Corriente</option>
	</select>
</div>

</div>
	</div>


<hr>



	
<?php  $proyectos_articulos = DB::table('proyectos_articulos')->get();?>


	<div class="form-group" id="proyectos_articulos_id_2">
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

	<script type="text/javascript">
			$(function() {
				$('#proyectos_articulos_id_2').hide();
			});


	</script>


	
<div class="panel panel-default" id="cuentabeneficiario">
	<div class="panel-heading">
		<h3 class="panel-title">DATOS DEL BANCO BENEFICIARIO
</h3>
	</div>
	<div class="panel-body">
	<p><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">En caso de que el dinero se deba consignar en una cuenta bancaria del exterior, certifico que la informaci&oacute;n del banco beneficiario y la del banco intermediario es la que a continuaci&oacute;n se especifica:</span></span></span></p>	

	
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

	<div class="panel panel-default" id="cuentaintermediario">
		<div class="panel-heading">
			<h3 class="panel-title">DATOS DEL BANCO INTERMEDIARIO (ENTIDAD FINANCIERA DONDE EL BANCO DEL BENEFICIARIO TIENE CUENTA)</h3>
		</div>
		<div class="panel-body">
			
		
	<div class="form-group">
		<label for="funcionario">•	NOMBRE DEL BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="nombredelbancointermediario" id="nombredelbancointermediario" placeholder="NOMBRE DEL BANCO INTERMEDIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	NUMERO DE CUENTA DEL BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="numerodecuentadelbancobeneficiario" id="numerodecuentadelbancobeneficiario" placeholder="NUMERO DE CUENTA DEL BANCO INTERMEDIARIO">
	</div>

		<div class="form-group">
		<label for="funcionario">• CIUDAD BANCO BENEFICIARIO</label>
		<input type="text" class="form-control" name="ciudadbancointermediario" id="ciudadbancointermediario" placeholder="CIUDAD BANCO BENEFICIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">• PAIS BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="paisbancointermediario" id="paisbancointermediario" placeholder="PAIS BANCO INTERMEDIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•	CODIGO SWIFT DEL BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="codigoswiftdelbanco" id="codigoswiftdelbanco" placeholder="CODIGO SWIFT DEL BANCO INTERMEDIARIO">
	</div>

	<div class="form-group">
		<label for="funcionario">•  CODIGO ABA/IBAN/OTRO BANCO INTERMEDIARIO</label>
		<input type="text" class="form-control" name="codigoabaibanotrointermediario" id="codigoabaibanotrointermediario" placeholder="CODIGO ABA/IBAN/OTRO BANCO INTERMEDIARIO">
	</div>

	</div>
	</div>
-->
	 @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><em><span style="font-family:&quot;Century Gothic&quot;,sans-serif">Documento soporte a la nota de contabilidad autorizada por el articulo del Decreto reglamentado 380/96 de la ley 223/95 sobre compras a personas que pertenecen al regimen simplificado.</span></em></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">DOCUMENTO EQUIVALENTE &nbsp;N&deg; 001</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Bogot&aacute;, </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif" >YO, <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></b> </span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Con   &nbsp;</span><span style="font-family:&quot;Arial&quot;,sans-serif">N&deg;  </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Manifiesto que</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">EL OBSERVATORIO COLOMBIANO DE CIENCIA Y TECNOLOGIA</span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Con NIT. 830.063.697-4</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">Me debe la suma de: </span></strong><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"></span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Son: </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Por concepto de:</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Prestar mis servicios como evaluador del siguiente trabajo: &ldquo;<strong><em style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></em></strong></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">La suma en menci&oacute;n se debe consignar en la:</span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Cuenta No.:  Tipo de cuenta (ahorros, corriente): del Banco: </span></span></span></p>




<p><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">En caso de que el dinero se deba consignar en una cuenta bancaria del exterior, certifico que la informaci&oacute;n del banco beneficiario y la del banco intermediario es la que a continuaci&oacute;n se especifica:</span></span></span></p>


<table border="1" cellspacing="0" class="Table" style="border-collapse:collapse; border:solid windowtext 1.0pt; width:100.0%">
	<tbody>
		<tr>
			<td colspan="2" style="background-color:#a6a6a6;  width:100.0%">
			<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">DATOS DEL BANCO BENEFICIARIO</span></span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="width:50%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NOMBRE DEL BANCO BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td style="width:50%">
			
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NUMERO DE CUENTA DEL BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td >
				
			
			</td>

		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CIUDAD</span></span></span></li>
			</ul>
			</td>
			<td >
			
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">PAIS</span></span></span></li>
			</ul>
			</td>
			<td >
			
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO ABA/IBAN/OTRO</span></span></span></li>
			</ul>
			</td>
			<td >
				
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO SWIF DEL BANCO DEL BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td >

			
			
			</td>
			
		</tr>
	</tbody>
</table>


<p></p>


<table border="1" cellspacing="0" class="Table" style="border-collapse:collapse; border:solid windowtext 1.0pt; width:100.0%">
	<tbody>
		<tr>
			<td colspan="2" style="background-color:#a6a6a6; width:100.0%">
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">DATOS DEL BANCO INTERMEDIARIO (ENTIDAD FINANCIERA DONDE EL BANCO DEL BENEFICIARIO TIENE CUENTA)</span></strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="width:50%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NOMBRE DEL BANCO INTERMEDIARIO</span></span></span></li>
			</ul>
			</td>
			<td style="width:50%">

			
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NUMERO DE CUENTA DEL BANCO BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
			
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CIUDAD</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
				
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">PAIS</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
				
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO SWIFT DEL BANCO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
				
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO ABA/IBAN/OTRO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
				
			
			</td>
		</tr>
	</tbody>
</table>






<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Declaro voluntariamente y bajo gravedad de juramento que pertenezco al R&eacute;gimen Simplificado de acuerdo al Art. 42 del decreto 3541 de 1983 y al Art. 511 del E.T. y no estoy obligado a expedir factura de venta.</span></span></span></p>


<p></p>
<p></p>
<p></p>
<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">_________________________________________</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">NOMBRE:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> </b></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">FECHA DE NACIMIENTO:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> </b></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span><span style="font-family:&quot;Arial&quot;,sans-serif">N&deg; expedida en /span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">DIRECCION: </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">TELEFONO: </span></span></span></p>


<div id="dialog" title="Información para imprimir el documento">
  <p>Para imprimir la Cuenta de Cobro, con CONTROL +P , lo puede hacer</p>
</div>	
<script>
	
		$(document).ready(function() {
		
		$( function() {
    			$( "#dialog" ).dialog({
    				autoOpen: true,
			      show: {
			        effect: "blind",
			        duration: 1000
			      },
			      hide: {
			        effect: "explode",
			        duration: 1000
      }

    			});
  } );
	});

</script>



@endsection



	>

		<a class="btn btn-primary" data-toggle="modal" href='#modal-{{$id}}'>Confirmar la cuenta de cobro</a>
		<div class="modal fade" id="modal-{{$id}}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Confirmar la cuenta de cobro</h4>
					</div>
					<div class="modal-body">
						<p>Por favor verificar que la cuenta de cobro tengo la información de su cuenta , ya que al aceptar se enviara un correo para el correspondiente pago</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>
				</div>
			</div>
		</div>
	
	


{!! Form::close() !!}


  </div>
</div>


@endsection


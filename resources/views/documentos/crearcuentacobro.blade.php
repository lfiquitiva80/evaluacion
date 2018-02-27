 @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'cuentadecobro.store', 'method'=>'POST','enctype'=>'multipart/form-data','File'=>true]) !!}
<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><em><span style="font-family:&quot;Century Gothic&quot;,sans-serif">Documento soporte a la nota de contabilidad autorizada por el articulo del Decreto reglamentado 380/96 de la ley 223/95 sobre compras a personas que pertenecen al regimen simplificado.</span></em></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">DOCUMENTO EQUIVALENTE &nbsp;N&deg; 001</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Bogot&aacute;, {{$proyectos_articulos->Fecha_Envio_a_Evaluador}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif" >YO, <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->evaluadores->NombreEvaluador}}</b> </span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Con   &nbsp;</span><span style="font-family:&quot;Arial&quot;,sans-serif">N&deg; {{$proyectos_articulos->evaluadores->Cedula}} expedida en  {{$proyectos_articulos->evaluadores->Ciudad_expedicion}} </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Manifiesto que</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">EL OBSERVATORIO COLOMBIANO DE CIENCIA Y TECNOLOGIA</span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Con NIT. 830.063.697-4</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">Me debe la suma de: </span></strong><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">{{$proyectos_articulos->pago_evaluador}}</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Son: {{$proyectos_articulos->precioletras}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Por concepto de:</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Prestar mis servicios como evaluador del siguiente trabajo: &ldquo;<strong><em style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></em></strong></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">La suma en menci&oacute;n se debe consignar en la:</span></strong></span></span></p>

<div id="cuentalocal">
<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Cuenta No.: <input type="text" name="numerocuenta" size="20"> Tipo de cuenta (ahorros, corriente): <select name="tipo_cuenta" id="tipo_cuenta" >

   
    <option value="Ahorros" >Ahorros</option>
    <option value="Corriente">Corriente</option>
  
  </select>

Seleccione el Banco local
<select name="nombrebanco" id="nombrebanco">
	<option value="BANCO DE BOGOTÁ">BANCO DE BOGOTÁ</option>
	<option value="BANCO POPULAR">BANCO POPULAR</option>
	<option value="BANCO CORPBANCA COLOMBIA S.A.">BANCO CORPBANCA COLOMBIA S.A.</option>
	<option value="BANCOLOMBIA S.A.">BANCOLOMBIA S.A.</option>
	<option value="CITIBANK COLOMBIA">CITIBANK COLOMBIA</option>
	<option value="BANCO GNB SUDAMERIS COLOMBIA">BANCO GNB SUDAMERIS COLOMBIA</option>
	<option value="BBVA COLOMBIA">BBVA COLOMBIA</option>
	<option value="RED MULTIBANCA COLPATRIA S.A.">RED MULTIBANCA COLPATRIA S.A.</option>
	<option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE</option>
	<option value="BANCO CAJA SOCIAL - BCSC S.A.">BANCO CAJA SOCIAL - BCSC S.A.</option>
	<option value="BANCO AGRARIO DE COLOMBIA S.A.">BANCO AGRARIO DE COLOMBIA S.A.</option>
	<option value="BANCO DAVIVIENDA S.A.">BANCO DAVIVIENDA S.A.</option>
	<option value="BANCO AV VILLAS">BANCO AV VILLAS</option>
	<option value="BANCO W S.A.">BANCO W S.A.</option>
	<option value="BANCO PROCREDIT">BANCO PROCREDIT</option>
	<option value="BANCAMIA">BANCAMIA</option>
	<option value="BANCO PICHINCHA S.A.">BANCO PICHINCHA S.A.</option>
	<option value="BANCOOMEVA">BANCOOMEVA</option>
	<option value="BANCO FALABELLA S.A.">BANCO FALABELLA S.A.</option>
	<option value="BANCO FINANDINA S.A.">BANCO FINANDINA S.A.</option>
	<option value="BANCO MULTIBANK S.A">BANCO MULTIBANK S.A</option>
	<option value="BANCO SANTANDER DE NEGOCIOS COLOMBIA S.A. - BANCO SANTANDER">BANCO SANTANDER DE NEGOCIOS COLOMBIA S.A. - BANCO SANTANDER</option>
	<option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option>
	<option value="BANCO COMPARTIR S.A">BANCO COMPARTIR S.A</option>

</select>	
</span></span></span></p>
</div>


<div id="cuentaextrajera">

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
				<input type="text" name="nombredelbancobeneficiario" size="80" placeholder="DIGITE NOMBRE DEL BANCO BENEFICIARIO">
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NUMERO DE CUENTA DEL BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td >
			<input type="text" name="numerodecuentadelbeneficiario" size="80" placeholder="DIGITE NUMERO DE CUENTA DEL BENEFICIARIO">	
			
			</td>

		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CIUDAD</span></span></span></li>
			</ul>
			</td>
			<td >
			<input type="text" name="ciudadbancobeneficiario" size="80" placeholder="DIGITE CIUDAD DEL BANCO BENEFICIARIO">
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">PAIS</span></span></span></li>
			</ul>
			</td>
			<td >
			
			<input type="text" name="paisbancobeneficiario" size="80" placeholder="DIGITE PAIS DEL BANCO BENEFICIARIO">

			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO ABA/IBAN/OTRO</span></span></span></li>
			</ul>
			</td>
			<td >
			<input type="text" name="codigoabaibanotro" size="80" placeholder="DIGITE CODIGO ABA/IBAN/OTRO BANCO BENEFICIARIO">	
			
			</td>
			
		</tr>
		<tr>
			<td >
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO SWIF DEL BANCO DEL BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td >
			<input type="text" name="codigoswifdelbancodelbeneficiario" size="80" placeholder="DIGITE CODIGO SWIF DEL BANCO DEL BENEFICIARIO">
			
			
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

			<input type="text" name="nombredelbancointermediario" size="80" placeholder="DIGITE NOMBRE DEL BANCO INTERMEDIARIO">	
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">NUMERO DE CUENTA DEL BANCO BENEFICIARIO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
			<input type="text" name="numerodecuentadelbancobeneficiario" size="80" placeholder="DIGITE NUMERO DE CUENTA DEL BANCO BENEFICIARIO">
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CIUDAD</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
			<input type="hidden" name="proyectos_articulos_id" value="{{$id}}">
			<input type="text" name="ciudadbancointermediario" size="80" placeholder="DIGITE CIUDAD BANCO BENEFICIARIO">		
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">PAIS</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
		<input type="text" name="paisbancointermediario" size="80" placeholder="DIGITE PAIS BANCO BENEFICIARIO">		
			
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO SWIFT DEL BANCO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
			<input type="text" name="codigoswiftdelbanco" size="80" placeholder="CODIGO SWIFT DEL BANCO BENEFICIARIO">	
			</td>
		</tr>
		<tr>
			<td style="width:50.88%">
			<ul>
				<li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">CODIGO ABA/IBAN/OTRO</span></span></span></li>
			</ul>
			</td>
			<td style="width:49.12%">
			<input type="text" name="codigoabaibanotrointermediario" size="80" placeholder="DIGITE CODIGO ABA/IBAN/OTRO DEL BANCO BENEFICIARIO">		
			
			</td>
		</tr>
	</tbody>
</table>

</div>




<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">Declaro voluntariamente y bajo gravedad de juramento que pertenezco al R&eacute;gimen Simplificado de acuerdo al Art. 42 del decreto 3541 de 1983 y al Art. 511 del E.T. y no estoy obligado a expedir factura de venta.</span></span></span></p>


<p></p>
<p></p>
<p></p>
<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">_________________________________________</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif">NOMBRE:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> {{$proyectos_articulos->evaluadores->NombreEvaluador}}</b></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">FECHA DE NACIMIENTO:<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> {{$fecha_nacimiento->toFormattedDateString()}}</b></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">{{$proyectos_articulos->evaluadores->tipodocumento->Descripcion_Corta}}&nbsp;</span><span style="font-family:&quot;Arial&quot;,sans-serif">N&deg; {{$proyectos_articulos->evaluadores->Cedula}} expedida en {{$proyectos_articulos->evaluadores->Ciudad_expedicion}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">DIRECCION: {{$proyectos_articulos->evaluadores->Direccion}}</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif">TELEFONO: {{$proyectos_articulos->evaluadores->Telefono}}</span></span></span></p>



<!--<script>
	
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

</script>-->







	

		<a class="btn btn-primary" data-toggle="modal" href='#modal-{{$id}}'>Confirmar la cuenta de cobro</a>
		<div class="modal fade" id="modal-{{$id}}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Confirmar la cuenta de cobro</h4>
					</div>
					<div class="modal-body">
						<p>Por favor verificar que la cuenta de cobro tenga la información de su cuenta , ya que al aceptar se enviara un correo para el correspondiente pago</p>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>
				</div>
			</div>
		</div>
	
	
<script>
  $( function() {

  	$("#cuentalocal").hide();	
    $("#cuentaextrajera").hide();

    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 500,
      modal: true,
      buttons: {
        "Cuenta Local": function() {
        
       		$("#cuentalocal").show();
       		$( this ).dialog( "close" );	

        },

        "Cuenta Extranjera": function() {
        $("#cuentaextrajera").show();
       		$( this ).dialog( "close" );		
         
        },

        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  } );
  </script>
</head>
<body>
 
<div id="dialog-confirm" title="Qué tipo de cuenta es?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Si su cuenta es de Colombia click en el boton de cuenta Local <br> Si su cuenta es extranjera click en el boton de Cuenta Extranjera </p>
</div>

 




  </div>
</div>

{!! Form::close() !!}

@endsection


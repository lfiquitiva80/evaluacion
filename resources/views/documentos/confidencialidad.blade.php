 @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">ACUERDO DE CONFIDENCIALIDAD</span></span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><br />
<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Yo, <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->evaluadores->NombreEvaluador}}</b> ,&nbsp;mayor de edad&nbsp;y domiciliado(a) en la ciudad de ___________, identificado(a) como aparece al pie de mi firma, he acordado celebrar con el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT), identificado con NIT 830.063.697-4, el presente Acuerdo de Confidencialidad que se regir&aacute; por las siguientes cl&aacute;usulas, previas las siguientes:</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><em><span style="font-size:12.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">CONSIDERACIONES</span></span></span></em></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">1. Act&uacute;o en calidad de jurado evaluador experto del proyecto de investigaci&oacute;n <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->DescripcionProyecto_Articulo}}</b></span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_1" id="_anchor_1" name="_msoanchor_1"></a>&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">2. Debido a la naturaleza del trabajo, se hace necesario que se maneje informaci&oacute;n confidencial y/o informaci&oacute;n sujeta a derechos de propiedad intelectual, antes, durante y en la etapa posterior al desarrollo de las actividades que desempe&ntilde;ar&eacute; como jurado evaluador experto.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><em><span style="font-size:12.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">CL&Aacute;USULAS</span></span></span></em></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">PRIMERA.&nbsp;</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">OBJETO. El objeto del presente acuerdo es fijar los t&eacute;rminos y condiciones bajo los cuales mantendr&eacute; la confidencialidad de los datos e informaci&oacute;n intercambiados con el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a, incluyendo la informaci&oacute;n del proyecto por m&iacute; evaluado, as&iacute; como los documentos y/o productos entregados por el OCyT en virtud de dicha evaluaci&oacute;n.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">SEGUNDA</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">. CONFIDENCIALIDAD. Me comprometo con el OCyT a que cualquier informaci&oacute;n intercambiada, facilitada o creada en el transcurso de la evaluaci&oacute;n del proyecto por m&iacute; valorado, ser&aacute; mantenida en estricta confidencialidad. </span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">TERCERA</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">.<strong>&nbsp;DURACION.</strong>&nbsp;Este acuerdo regir&aacute; durante el tiempo que dure la evaluaci&oacute;n del proyecto hasta un t&eacute;rmino indefinido contado a partir de la fecha.&nbsp;</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">CUARTA</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">.&nbsp;<strong>DERECHOS DE PROPIEDAD.</strong>&nbsp;Toda informaci&oacute;n intercambiada es de propiedad exclusiva de la parte de donde proceda. En consecuencia, ninguna de las partes utilizar&aacute; informaci&oacute;n de la otra para su propio uso.&nbsp;</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">QUINTA</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">.&nbsp;<strong>MODIFICACI&Oacute;N O TERMINACI&Oacute;N</strong>. Este acuerdo solo podr&aacute; ser modificado o darse por terminado con el consentimiento expreso por escrito de ambas partes.&nbsp;</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">SEXTA</span></span></span></strong><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">.&nbsp;<strong>VALIDEZ Y PERFECCIONAMIENTO.</strong>&nbsp;El presente Acuerdo requiere para su validez y perfeccionamiento la firma de quien lo suscribe.<br />
<br />
Para constancia, y en se&ntilde;al de aceptaci&oacute;n, se firma el presente acuerdo en un ejemplar, por la parte que lo suscribe, en la ciudad de Bogot&aacute; D.C. a los ({{$dt->day}}) d&iacute;as del mes de <?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
echo $meses[date($dt->month)-1];
//Salida: Viernes 24 de Febrero del 2012
 
?> del a&ntilde;o {{$dt->year}}.</span></span></span></span></span><br />
&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>	

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<table align="center" cellspacing="0" class="Table" style="border-collapse:collapse; border:undefined; width:92.0%">
	<tbody>
		<tr>
			<td style="width:50.0%">
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60"></span></span></span></span></span></p>
			</td>
			<td style="width:50.0%">
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="height:50.6pt; width:100.0%">
			<!--<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Firma</span></span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">__________________________</span></span></span></span></span></p>-->

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Documento de Identidad No. {{$proyectos_articulos->evaluadores->tipodocumento->Descripcion_Corta}} {{$proyectos_articulos->evaluadores->Cedula}} </span></span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Fecha de Nacimiento: {{$proyectos_articulos->evaluadores->Fecha_Nacimiento}} </span></span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Lugar de expedici&oacute;n: {{$proyectos_articulos->evaluadores->Ciudad_expedicion}}</span></span></span></span></span></p>
			</td>
		</tr>
	</tbody>
</table>

<div>
<div>
<div class="msocomtxt" id="_com_1">&nbsp;</div>
</div>
</div>


<div id="dialog" title="Información para imprimir el documento">
  <p>Para imprimir el documento de confidencialidad , con CONTROL +P , lo puede hacer</p>
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
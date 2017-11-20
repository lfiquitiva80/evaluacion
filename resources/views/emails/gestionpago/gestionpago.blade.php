@component('mail::message')
<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;,</span></span><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;D.C.,&nbsp;</span><?php echo date("d") . " del " . date("M") . " de " . date("Y");?></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><strong><span style="color:#000000; font-family:Arial, sans-serif"><span style="font-size:14.6667px">Area Financiera</span></span></strong></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Recibe un cordial saludo. De manera atenta, agradezco&nbsp; tu ayuda con la gesti&oacute;n del pago del jurado evaluador <strong><em><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?></em></strong>, quien nos apoy&oacute; en el proyecto <em>{{$DescripcionProyecto_Articulo}}</em> que en la actualidad se est&aacute; desarrollando para la <em>{{$Objetivo}}</em>. Una vez realices el pago, te agradecer&iacute;a conf&iacute;rmame para de esta manera informar al jurado y remitir el certificado por los servicios prestados.</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><strong><span style="color:#000000; font-family:Arial, sans-serif"><span style="font-size:14.6667px">Adjunto los Documentos:</span></span></strong></p>

<?php  
$hv = asset($HV);
$Cedula_pdf = asset($Cedula_pdf);
$Certificado_Bancario = asset($Certificado_Bancario);
$cuentacobro = asset($cuentacobro);
$Rut = asset($Rut);

?>
<ul>
	<li style="margin-left: 0cm; margin-right: 0cm; text-align: justify;"><span style="color:#000000; font-family:Arial, sans-serif"><span style="font-size:14.6667px"><a href="<?php echo $hv;?>">Hoja de Vida</a></span></span>.</li>
	<li style="margin-left: 0cm; margin-right: 0cm; text-align: justify;"><a href="<?php echo $Cedula_pdf;?>">Documento de Identidad</a></li>
	<li style="margin-left: 0cm; margin-right: 0cm; text-align: justify;"><a href="<?php echo $Certificado_Bancario;?>">Certificado Bancario</a></li>
	<li style="margin-left: 0cm; margin-right: 0cm; text-align: justify;"><a href="<?php echo $cuentacobro;?>">Cuenta de Cobro</a></li>
	<li style="margin-left: 0cm; margin-right: 0cm; text-align: justify;"><a href="<?php echo $Rut;?>">Rut si es nacionalidad de Colombiana o Pasaporte si es extranjero.</a></li>
</ul>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">CLARA IN&Eacute;S PARDO MART&Iacute;NEZ</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Directora Ejecutiva</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></span></p>

<div>
<div class="msocomtxt" id="_com_1">
<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
</div>
</div>


Gracias,<br>
{{ config('app.name') }}
@endcomponent
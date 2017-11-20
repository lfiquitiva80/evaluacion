@component('mail::message')

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;,</span></span><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;D.C.,&nbsp;</span></span></span></span><?php echo date("d") . " del " . date("M") . " de " . date("Y");?></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:Arial,sans-serif"><span style="color:black"><span style="background-color:white">Respetado <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?> &nbsp;</span></span></span></span></span><b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b>
<p></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo. Agradecemos el servicio prestado. Atentamente me permito solicitar el env&iacute;o de los siguientes documentos para gestionar el pago:</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<ol>
	<li style="text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Hoja de vida.</span></span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Certificaci&oacute;n bancaria en la que se registre la cuenta en la que se le consignar&aacute;.</span></span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:Arial,sans-serif"><span style="color:black"><span style="background-color:white">Cuenta de Cobro por valor de {{$pago_evaluador}}&nbsp;</span></span></span><span style="background-color:white; font-family:Arial,sans-serif"><span style="color:black">con n&uacute;mero de c&eacute;dula (diligenciar <a href="<?php $url = asset('imgplantillas/MODELO.doc'); echo $url; ?>">Carta Modelo</a> y adjuntarlo con su firma).</span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Copia de la c&eacute;dula de ciudadan&iacute;a en formato pdf. </span></span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">RUT actualizado (en caso de que realice actividades econ&oacute;micas en el territorio colombiano) o Copia del pasaporte (en caso de que sea extranjero y no realice actividades econ&oacute;micas en el territorio colombiano).</span></span></span></span></span></li>
</ol>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Una vez los documentos sean remitidos se gestionar&aacute; el pago y se le enviar&aacute; el certificado en el que constan los servicios prestados.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Finalmente, es importante mencionar que en caso de que no remita la informaci&oacute;n antes de 15 d&iacute;as el OCyT considerar&aacute; que no se encuentra interesado en recibir el pago. Le agradecernos ser muy oportuno en el env&iacute;o de la informaci&oacute;n solicitada para las gestiones correspondientes.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">CLARA IN&Eacute;S PARDO MART&Iacute;NEZ</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Directora Ejecutiva</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></span></p>





@endcomponent

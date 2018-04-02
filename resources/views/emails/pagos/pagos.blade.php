@component('mail::message')

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;,</span></span><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;D.C.,&nbsp;</span><?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
?></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:Arial,sans-serif"><span style="color:black"><span style="background-color:white"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->respectado;
          ?>  <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?> &nbsp;</span></span></span></span></span><b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b>
<p></p>


<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo. Agradecemos el servicio prestado. Atentamente me permito solicitar la carga de los documentos especificados m&aacute;s adelante para gestionar el pago. S&iacute; usted ya efectu&oacute; el cargue correspondiente, por favor omita la presente solicitud. </span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<ol>
     <li style="text-align:justify"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif">Hoja de vida.</span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif">Certificaci&oacute;n bancaria en la que se registre el número de cuenta en el que se depositará el pago.</span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Cuenta de Cobro se hace en linea, por la plataforma de evaluadores</li>
     <li style="text-align:justify"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif">Copia del documento de identidad en formato pdf. </span></span></span></span></span></li>
     <li style="text-align:justify"><span style="font-size:11pt"><span style="color:black"><span style="font-family:Calibri,sans-serif"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif">RUT actualizado (en caso de que realice actividades econ&oacute;micas en el territorio colombiano) o Copia del pasaporte (en caso de que sea extranjero y no realice actividades econ&oacute;micas en el territorio colombiano).</span></span></span></span></span></li>
</ol>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Una vez los documentos sean remitidos se gestionar&aacute; el pago y se le enviar&aacute; el certificado en el que constan los servicios prestados.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Finalmente, es importante mencionar que en caso de que no remita la informaci&oacute;n antes de 15 d&iacute;as el OCyT considerar&aacute; que no se encuentra interesado en recibir el pago. Le agradecernos ser muy oportuno en el env&iacute;o de la informaci&oacute;n solicitada para las gestiones correspondientes.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">CLARA IN&Eacute;S PARDO MART&Iacute;NEZ</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Directora Ejecutiva</span></span></span></span></p>

<p><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></p>






@endcomponent

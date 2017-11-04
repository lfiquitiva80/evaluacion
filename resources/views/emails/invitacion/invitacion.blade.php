	@component('mail::message')


<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;, D.C., <?php echo date("d") . " del " . date("M") . " de " . date("Y");?></span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Respetado Dr.<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo. De la manera m&aacute;s atenta solicitamos su colaboraci&oacute;n como evaluador del proyecto &ldquo;<em>{{$DescripcionProyecto_Articulo}}</em>&rdquo;</span> y que est&aacute; en proceso de evaluaci&oacute;n por parte de la Universidad Industrial de Santander</span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_1" id="_anchor_1" name="_msoanchor_1" style="color:blue; text-decoration:underline"></a>&nbsp;</span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">. La evaluaci&oacute;n de estos proyectos se gestiona por parte del Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT) en virtud de un contrato cuyo prop&oacute;sito es valorar las propuestas de investigaci&oacute;n presentadas {{$DescripcionProyecto_Articulo}}</span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_2" id="_anchor_2" name="_msoanchor_2" style="color:blue; text-decoration:underline"></a>&nbsp;</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">El Observatorio Colombiano de Ciencia y Tecnolog&iacute;a ha sido la entidad elegida para realizar el proceso de gesti&oacute;n de evaluaci&oacute;n de estos proyectos de investigaci&oacute;n.</span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Tomando en consideraci&oacute;n lo anterior, le agradecemos una respuesta sobre su posibilidad de prestar el servicio de evaluador acad&eacute;mico a m&aacute;s tardar el pr&oacute;ximo <strong><u><?php $dt_2DiasDespues = date('Y-M-d', strtotime('+2 day')); echo $dt_2DiasDespues; ?> a medio d&iacute;a</u></strong></span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_3" id="_anchor_3" name="_msoanchor_3" style="color:blue; text-decoration:underline"></a>&nbsp;</span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">. Si su respuesta es positiva, le agradecemos confirmarnos por este medio y enviar un resumen de su hoja de vida. En este caso, el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a enviar&aacute; los documentos y las pautas de evaluaci&oacute;n. Como expresi&oacute;n de agradecimiento por su colaboraci&oacute;n el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a entregar&aacute; a sus evaluadores un pago de $200.000 por trabajo evaluado y un certificado en el que consta su participaci&oacute;n como evaluador.</span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">De otra parte, si no tiene disponibilidad para aceptar esta invitaci&oacute;n, le agradecemos nos pueda referenciar a un colega que pueda ayudarnos con el tema para enviarle esta invitaci&oacute;n. Para tales efectos, le agradecer&iacute;a remitirnos su correo electr&oacute;nico de contacto.</span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Cabe advertir, que<strong><em> </em></strong>e</span></span></span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">l <strong><em>Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT)</em></strong> fue constituido el 13 de agosto de 1999, como una <em>&ldquo;asociaci&oacute;n civil de participaci&oacute;n mixta y de car&aacute;cter privado, sin &aacute;nimo de lucro, con patrimonio propio, organizada bajo las leyes colombianas, dentro del marco de la Constituci&oacute;n Pol&iacute;tica y las normas de Ciencia y Tecnolog&iacute;a e innovaci&oacute;n&rdquo;.</em></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Nuestro objetivo es lograr el fortalecimiento de la capacidad nacional para generar y usar indicadores de ciencia, tecnolog&iacute;a e innovaci&oacute;n, que sirvan para orientar y evaluar las pol&iacute;ticas nacionales, regionales e internacionales, as&iacute; como la acci&oacute;n de diversos actores de los polos cient&iacute;ficos y tecnol&oacute;gicos. </span></span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Nuestra p&aacute;gina Web: (</span></span></span><a href="http://ocyt.org.co/es-es/" style="color:blue; text-decoration:underline"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">http://ocyt.org.co</span></span></a><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">). &nbsp;</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<?php $url = route('aceptacion',$id) ?>
<?php $url2 = route('norespuesta',$id) ?>

@component('mail::button', ['url' => $url,'color' => 'green'])
Acepto evaluar el proyecto y/o Articulo
@endcomponent
<P><br>
@component('mail::button', ['url' => $url2,'color' => 'red'])
NO Acepto evaluar el proyecto y/o Articulo
@endcomponent

<br>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Clara Inés Pardo Martínez<br></span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Directora Ejecutiva</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">{{ config('app.name') }}</span></span></strong></span></span></p>

<div>
<div>
<div class="msocomtxt" id="_com_1">
<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
</div>
</div>
</div>


@endcomponent

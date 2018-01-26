	@component('mail::message')


<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;, D.C., <?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
?></span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->respectado;
          ?>  <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?> <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo. De la manera m&aacute;s atenta solicitamos su colaboraci&oacute;n como evaluador del proyecto &ldquo;<b>{{$DescripcionProyecto_Articulo}}</b>&rdquo;</span><span style="color:black"> y que est&aacute; en proceso de evaluaci&oacute;n por parte de la {{$proponente}}</span></span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_1" id="_anchor_1" name="_msoanchor_1" style="color:blue; text-decoration:underline"></a>&nbsp;</span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">. La evaluaci&oacute;n de estos proyectos se gestiona por parte del Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT) en virtud de un contrato cuyo prop&oacute;sito es valorar las propuestas de investigaci&oacute;n presentadas por la {{$proponente}}</span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_2" id="_anchor_2" name="_msoanchor_2" style="color:blue; text-decoration:underline"></a>&nbsp;</span></span></span></span></p>



<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">El Observatorio Colombiano de Ciencia y Tecnolog&iacute;a ha sido la entidad elegida para realizar el proceso de gesti&oacute;n de evaluaci&oacute;n de estos proyectos de investigaci&oacute;n.</span></span></span></span></span></span></p>



<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Tomando en consideraci&oacute;n lo anterior, le agradecemos una respuesta sobre su posibilidad de prestar el servicio de evaluador acad&eacute;mico a m&aacute;s tardar el pr&oacute;ximo <strong><u><?php echo date('d', strtotime('+2 day'))." de ".$meses[date('n')-1]. " del ".date('Y') ;?> a medio d&iacute;a</u></strong></span></span></span><span style="font-size:8.0pt"><a class="msocomanchor" href="#_msocom_3" id="_anchor_3" name="_msoanchor_3" style="color:blue; text-decoration:underline"></a>&nbsp;</span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="font-size:11.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">, Si su respuesta es positiva, por favor acepte realizar la evaluaci&oacute;n. En un pr&oacute;ximo correo electr&oacute;nico recibir&aacute; las instrucciones para la gesti&oacute;n del formato de evaluaci&oacute;n, el acuerdo de confidencialidad y el env&iacute;o de los documentos. <span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">@if(!empty($precio))Como expresi&oacute;n de agradecimiento por su colaboraci&oacute;n el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a entregar&aacute; a sus evaluadores un pago de {{$precio}} por trabajo evaluado y un certificado en el que consta su participaci&oacute;n como evaluador.@else Como expresi&oacute;n de agradecimiento por su colaboraci&oacute;n el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a entregar&aacute; a sus evaluadores un certificado en el que consta su participaci&oacute;n como evaluador. @endif</span></span></span></span></span></span></p></span></span></span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Cabe advertir, que<strong><em> </em></strong>e</span></span></span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">l </span></span><strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT)</span></span></span></strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"> fue constituido el 13 de agosto de 1999, como una &ldquo;asociaci&oacute;n civil de participaci&oacute;n mixta y de car&aacute;cter privado, sin &aacute;nimo de lucro, con patrimonio propio, organizada bajo las leyes colombianas, dentro del marco de la Constituci&oacute;n Pol&iacute;tica y las normas de Ciencia y Tecnolog&iacute;a e innovaci&oacute;n&rdquo;.</span></span></span></span></span>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Nuestro objetivo es lograr el fortalecimiento de la capacidad nacional para generar y usar indicadores de ciencia, tecnolog&iacute;a e innovaci&oacute;n, que sirvan para orientar y evaluar las pol&iacute;ticas nacionales, regionales e internacionales, as&iacute; como la acci&oacute;n de diversos actores de los polos cient&iacute;ficos y tecnol&oacute;gicos. Nuestra p&aacute;gina Web: (<a href="http://ocyt.org.co/" style="color:#0563c1; text-decoration:underline">http://ocyt.org.co</a>).&nbsp; </span></span></span></p>


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

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Clara Inés Pardo Martínez<br></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Directora Ejecutiva</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">{{ config('app.name') }}</span></span></span></span></p>

<div>
<div>
<div class="msocomtxt" id="_com_1">
<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
</div>
</div>
</div>


@endcomponent

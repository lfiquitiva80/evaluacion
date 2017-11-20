@component('mail::message')


<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Bogot&aacute;, D.C., <?php echo date("d") . " del " . date("M") . " de " . date("Y");
?></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Apreciado (a) Investigador (a),</span></span></span></span></span></span></p> <br>
<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?> <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Reciba un cordial saludo. Agradecemos su amable colaboraci&oacute;n y participaci&oacute;n como evaluador de los proyectos de investigaci&oacute;n de la {{$proponente}}</span></span></span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">. Para los fines pertinentes, adjunto remito los siguientes documentos:</span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<ol>
	<li style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Documentos del proyecto a evaluar.</span></span></span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Formulario de evaluaci&oacute;n: el cual podr&aacute; desarrollar mediante el aplicativo en l&iacute;nea, el cual le agradecemos firmar para que tenga validez ante la entidad contratante.</span></span></span></span></span></span></li>
	<li style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Acuerdo de confidencialidad: documento en el que usted se compromete a guardar reserva sobre el proyecto evaluado, as&iacute; como los documentos y contenidos del mismo. Este formato, deber&aacute; ser diligenciado y firmado.</span></span></span></span></span></span></li>
	<li style="text-align:justify">&nbsp;</li>
</ol>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">De otra parte, le agradezco gestionar los documentos mencionados en los numerales 1 a 3 a m&aacute;s tardar el pr&oacute;ximo <strong><u><?php  $dt_2SemanasDespues = date('Y-M-d', strtotime('+2 week')); echo $dt_2SemanasDespues;?></u></strong></span></span></span><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">, fecha en la cual se le indicar&aacute; el procedimiento para pago y entrega del certificado en el que consta su participaci&oacute;n como evaluador.</span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Agradecemos desde ya su participaci&oacute;n y quedamos muy atentos a la gesti&oacute;n de la evaluaci&oacute;n y los formatos electr&oacute;nicos. Cualquier inconveniente que se presente podr&aacute; consultarlo en las siguientes cuentas de email: </span></span></span><a href="mailto:sfletscher@ocyt.org.co" style="color:blue; text-decoration:underline"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">sfletscher@ocyt.org.co</span></span></a><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black"> y </span></span></span><a href="mailto:cpardo@ocyt.org.co" style="color:blue; text-decoration:underline"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">cpardo@ocyt.org.co</span></span></a> </span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:black">Cualquier inquietud con gusto estaremos atentos por correo electr&oacute;nico o al tel&eacute;fono 3235059 exts.110 y 116.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Sin otro particular, cordialmente,</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>


<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Clara In&eacute;s Pardo Mart&iacute;nez</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Directora Ejecutiva</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><a href="http://ocyt.org.co" style="color:blue; text-decoration:underline">http://ocyt.org.co</a></span></span></span></span></p>

<div>
<div>
<div class="msocomtxt" id="_com_2">
<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
</div>
</div>
</div>





@endcomponent

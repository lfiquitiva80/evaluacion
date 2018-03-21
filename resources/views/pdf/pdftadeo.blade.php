<!DOCTYPE html>
<html>
<head>
	<title>Certificado</title>
</head>
<body background="/documentos/documentos/fondoeloycertificado.png" style="background-size: cover; max-width: 100%;
    height: auto;
      ">




<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>
<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:13.0pt"><span style="color:#231f20">El Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:13.0pt"><span style="color:#231f20">Otorga el presente <strong>CERTIFICADO </strong><?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->id_tratamiento;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Pdf_certificacion." ".$comment3->Titulo;
          ?>:</span></span></span></span></p>



<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:24.0pt"><span style="color:#231f20"><?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?></span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:12pt"><span style="font-family:Calibri,sans-serif"><span style="color:#231f20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php $comment = App\TipoDocumento::find($evaluadores->TipoDocumento); $comment->Descripcion_Corta; ?> Documento de Identidad No. {{$evaluadores->Cedula}} de {{$evaluadores->Ciudad_expedicion}}</span></span></span></p>



<p style="margin-left:1cm; margin-right:1cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">&nbsp;&nbsp;&nbsp;&nbsp;  Por su participaci&oacute;n como&nbsp;</span></span></span></span><strong><span style="font-size:12.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121"><?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->id_tratamiento;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->tipo_evaluador;
          ?>&nbsp;</span></span></span></strong><span style="font-size:12.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">de la propuesta</span></span></span></span><em>&nbsp;</em><span style="font-size:12.0pt"><span style="background-color:white"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">de investigaci&oacute;n presentada a la Convocatoria Interna de Investigaci&oacute;n: </span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>



<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><em><span style="font-size:12.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">La propuesta evaluada por <?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->id_tratamiento;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Certificado2;
          ?> <?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->id_tratamiento;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Abreviacion;
          ?><?php $comment = App\evaluadores::find($proyectos_articulos->id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> se titula:</span></span></span></em></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>

<p style="margin-left:2cm; margin-right:2cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">{{$proyectos_articulos->DescripcionProyecto_Articulo}}</span></span></p>

<!--<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>-->

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="color:#231f20">Bogot&aacute;, <?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
?></span></strong></span></span></p>



<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="color:#231f20"><img src="documentos/documentos/8cbLjO0gcXESw53pnFrkzzOcwfH7j2f6oWnvH50h.jpeg" width="20%" height="20%"></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="color:#231f20">______________________________________</span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">Clara In&eacute;s Pardo Mart&iacute;nez</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:#212121">Directora Ejecutiva - Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center">&nbsp;</p>

</body>
</html>
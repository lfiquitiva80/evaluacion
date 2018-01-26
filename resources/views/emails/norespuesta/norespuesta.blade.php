@component('mail::message')

Bogotá, D.C., <?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 
?>
<br><p align="justify">

Respetado <?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); $comment2->name;
          $comment3 = App\tratamiento_carta::find($comment2->id_tratamiento); echo $comment3->Titulo;
          ?>  
<b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><?php $comment = App\evaluadores::find($id_evaluador); $comment->id_users; 
          $comment2 = App\User::find($comment->id_users); echo $comment2->name;
          ?> ,</b>


<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#74787e">Agradecemos su respuesta y esperamos contar con su apoyo en otros procesos de evaluaci&oacute;n gestionados por el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a.</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#74787e">Sin otro particular, cordialmente,</span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#74787e">CLARA IN&Eacute;S PARDO MART&Iacute;NEZ </span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#74787e">Directora Ejecutiva </span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#74787e">Observatorio Colombiano de Ciencia y Tecnolog&iacute;a</span></span></span></span></span></p>



@endcomponent

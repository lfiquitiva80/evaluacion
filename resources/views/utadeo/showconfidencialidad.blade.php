 @extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">ACUERDO DE CONFIDENCIALIDAD Y DECLARACI&Oacute;N DE CONFLICTO DE INTERESES</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:11.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Yo, <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->evaluadores->NombreEvaluador}}</b>,&nbsp;mayor de edad&nbsp;<!--y domiciliado(a) en la ciudad de {{$confidencialidad->ciudaddomiciliario}},--> {{$proyectos_articulos->evaluadores->users->tratamiento_carta->identificado}} como aparece al pie de mi firma, he acordado celebrar con el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a (OCyT), identificado con NIT 830.063.697-4, el presente Acuerdo de Confidencialidad y Declaraci&oacute;n de Conflicto de Intereses que se regir&aacute; por las siguientes cl&aacute;usulas, previas las siguientes:</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">CONSIDERACIONES</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">1. Act&uacute;o en calidad de jurado evaluador experto del documento <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->DescripcionProyecto_Articulo}}</b></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">2. Debido a la naturaleza del trabajo, se hace necesario que se maneje informaci&oacute;n confidencial y/o informaci&oacute;n sujeta a derechos de propiedad intelectual, antes, durante y en la etapa posterior al desarrollo de las actividades que desempe&ntilde;ar&eacute; como jurado evaluador experto.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">CL&Aacute;USULAS</span></span></strong></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">PRIMERA.&nbsp;</span></span></strong><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">OBJETO.</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"> El objeto del presente acuerdo es fijar los t&eacute;rminos y condiciones bajo los cuales mantendr&eacute; la confidencialidad de los datos e informaci&oacute;n intercambiados con el Observatorio Colombiano de Ciencia y Tecnolog&iacute;a, incluyendo la informaci&oacute;n del proyecto por m&iacute; evaluado, as&iacute; como los documentos y/o productos entregados por el OCyT en virtud de dicha evaluaci&oacute;n.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">SEGUNDA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">. <strong>CONFIDENCIALIDAD.</strong> Me comprometo con el OCyT a que cualquier informaci&oacute;n intercambiada, facilitada o creada en el transcurso de la evaluaci&oacute;n del proyecto por m&iacute; valorado, ser&aacute; mantenida en estricta confidencialidad. </span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">TERCERA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">.<strong>&nbsp;DURACION.</strong>&nbsp;Este acuerdo regir&aacute; durante el tiempo que dure la evaluaci&oacute;n del documento referido en las consideraciones, numeral 1 hasta un t&eacute;rmino indefinido contado a partir de la fecha.&nbsp;</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">CUARTA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">.&nbsp;<strong>DERECHOS DE PROPIEDAD.</strong>&nbsp;Toda informaci&oacute;n intercambiada es de propiedad exclusiva de la parte de donde proceda. En consecuencia, ninguna de las partes utilizar&aacute; informaci&oacute;n de la otra para su propio uso.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">QUINTA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">.&nbsp;<strong>DECLARACI&Oacute;N CONFLICTO DE INTERESES.</strong> </span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n el ejercicio de sus funciones como par evaluador se le solicitar&aacute; la evaluaci&oacute;n de documentos de publicaci&oacute;n, proyectos u otro tipo de requerimientos que se presenten a consideraci&oacute;n del Observatorio Colombiano de Ciencia y Tecnolog&iacute;a, con el fin de sustentar la recomendaci&oacute;n que ser&aacute; la base para la toma de decisiones.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">A</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">t</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s de iniciar el proceso de evaluaci&oacute;n, usted deber&aacute; LEER cuidadosamente los siguientes ejemplos de potenciales situaciones que conllevan a la generaci&oacute;n de conflicto de inter&eacute;s (toda situaci&oacute;n de orden moral en la que los intereses personales o profesionales directos o indirectos de un evaluador, interfieren o impiden el actuar de manera objetiva en el proceso de evaluaci&oacute;n), y de esta forma dar cabal cumplimiento a la declaraci&oacute;n que se encuentra en este documento.</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>

<table align="center" border="1" cellspacing="0" class="MsoTableGrid" style="border:undefined; width:100%; " border="1">
	<thead>
		<tr>
			<td style="width:182.65pt">
			<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Su afiliaci&oacute;n con la Universidad de Bogot&aacute; Jorge Tadeo Lozano </span></span></strong></span></span></p>
			</td>
			<td style="width:160.25pt">
			<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Su relaci&oacute;n con una persona que tenga un inter&eacute;s personal en la propuesta o solicitud</span></span></strong></span></span></p>
			</td>
			<td style="width:135.9pt">
			<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Otros tipos </span></span></strong><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">d</span></span></strong><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e afiliaciones o relaciones indirectas</span></span></strong></span></span></p>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="vertical-align:top; width:182.65pt">
			<ul>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s empleado actual de la instituci&oacute;n como contratista, empleado o una posici&oacute;n similar. </span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Man</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">t</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">i</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e otros empleos actuales en la instituci&oacute;n, tales como consultor&iacute;as o acuerdos de asesor&iacute;a.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">T</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">u</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">v</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">o empleo previo en la instituci&oacute;n dentro de los &uacute;ltimos 12 meses.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s sujeto de consideraci&oacute;n actual para empleo en la instituci&oacute;n.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">T</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">i</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e acuerdo de reempleo formal o informal con la instituci&oacute;n.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">T</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">i</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e propiedades de valores de firmas involucradas en la propuesta o solicitud.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s miembro actual de un comit&eacute; de visitantes o un cuerpo similar en la instituci&oacute;n. (Este se considera conflicto solo en el caso de propuestas o aplicaciones que se originan en el departamento, escuela o laboratorio que el comit&eacute; de visitantes o su equivalente asesora).</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Me</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">m</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">b</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">r</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">e</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&iacute;a de un consejo de direcci&oacute;n de cualquier oficina o comit&eacute; de la instituci&oacute;n (La membres&iacute;a ordinaria en una sociedad o asociaci&oacute;n no es considerada como de oficina).</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">In</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">s</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">cr</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">ipci&oacute;n actual como pasante. (Solo se considera conflicto en el caso de propuestas o solicitudes que se originaron en el departamento o &aacute;rea en la cual se encuentra el pasante).</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Si ha recibido y mantenido honorarios o apoyo financiero de la instituci&oacute;n dentro de los &uacute;ltimos 12 meses.</span></span></span></span></li>
			</ul>
			</td>
			<td style="vertical-align:top; width:160.25pt">
			<ul>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">R</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">elaci&oacute;n de familia conocida como esposo(a), hijo, hermano o padre.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Re</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">laci&oacute;n de negocios o profesional.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">R</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">elaci&oacute;n pasada o presente como asesor de tesis o estudiante de tesis.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">C</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">olaboraci&oacute;n en un proyecto o en un libro, art&iacute;culo, reporte o documento dentro de los &uacute;ltimos 48 meses.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">C</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">o-edici&oacute;n de una revista, compendio o memorias de conferencia dentro de los &uacute;ltimos 24 meses</span></span></span></span></li>
			</ul>
			</td>
			<td style="vertical-align:top; width:135.9pt">
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">l inter&eacute;s de las siguientes personas ser&aacute; considerado como si fuera suyo: </span></span></span></span></p>

			<ul>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">C</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">u</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">a</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">l</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">q</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">ui</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">er afiliaci&oacute;n o relaci&oacute;n de su esposa, de su hijo menor de edad, de un pariente que viva en su propio hogar u otra persona que usted sepa que es legalmente su socio, que pudiera estar cubierto por cualquiera de los art&iacute;culos que aparecen en los numerales anteriores en letra it&aacute;lica.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">O</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">t</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">r</span></span><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">a relaci&oacute;n, tal como amistad personal cercana o enemistad, que afecte su juicio o que pueda ser vista como tal por una persona razonable, familiarizada con la relaci&oacute;n.</span></span></span></span></li>
			</ul>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>


<table style="border:undefined; width:100%; " border="1">
	<tbody>
		<tr>
			<td>
			<div>
			<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">DECLARACI&Oacute;N</span></strong></span></span></p>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div>
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Yo <b style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">{{$proyectos_articulos->evaluadores->NombreEvaluador}}</b>, identificado con el documento de identidad n&uacute;mero {{$proyectos_articulos->evaluadores->tipodocumento->Descripcion_Corta}} {{$proyectos_articulos->evaluadores->Cedula}} de {{$proyectos_articulos->evaluadores->Ciudad_expedicion}} </span></span><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">declaro que he le&iacute;do y entiendo las posibles situaciones causales de conflicto de inter&eacute;s y doy fe de que 
	
				@if($confidencialidad->doyfe==0)
			 <input type="radio" name="doyfe" value="0" checked> No <input type="radio" name="doyfe" value="1"> Si
				@else
				<input type="radio" name="doyfe" value="0" > No <input type="radio" name="doyfe" value="1" checked> Si
				@endif

			 <br>
					
						

			 Es posible que tenga afiliaci&oacute;n o relaci&oacute;n causal de conflicto de inter&eacute;s que pueda impedirme llevar a cabo mi tarea como evaluador (en el caso de presentar alguna potencial situaci&oacute;n de conflicto de inter&eacute;s, por favor dar los detalles en la tabla que se encuentra al final de esta declaraci&oacute;n). </span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">E</span></span><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">n</span></span><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">tiendo que debo contactar a la persona del Observatorio Colombiano de Ciencia que me solicit&oacute; llevar a cabo la evaluaci&oacute;n, si surge un conflicto de intereses durante mi desempe&ntilde;o como evaluador. </span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Igualmente, entiendo que tendr&eacute; acceso a informaci&oacute;n confidencial, por lo cual <u>NO</u> podr&eacute;:</span></span></span></span></p>

			<ul>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Copiar, citar, usar o divulgar los contenidos de las propuestas.</span></span></span></span></li>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Divulgar el nombre de los otros evaluadores que participar&aacute;n en el proceso de evaluaci&oacute;n ni los conceptos &nbsp;&nbsp;</span></span></span></span></li>
			</ul>

			<p style="margin-left:36pt; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; que emitan.</span></span></span></span></p>

			<ul>
				<li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Hacer uso de la informaci&oacute;n a la que tenga acceso (como divulgaci&oacute;n de resultados previo a su publicaci&oacute;n, divulgaci&oacute;n del nombre de los participantes del panel de evaluaci&oacute;n o de los conceptos elaborados y puntajes asignados a las propuestas) para beneficio personal, darla a conocer o ponerla en disposici&oacute;n del beneficio de cualquier otra persona y organizaci&oacute;n.</span></span></span></span></li>
			</ul>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">De esta manera, conozco que el incumplimiento de lo anteriormente mencionado </span></span><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">podr&aacute; ser motivo de mi retiro del banco de evaluadores </span></span><span style="font-size:10.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">del Observatorio Colombiano de Ciencia y Tecnolog&iacute;a.</span></span></span></span></p>

			
			<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>

			<table border="1" cellspacing="0" class="MsoTableGrid" style="border-collapse:collapse; border:solid windowtext 1.0pt; margin-left:10.25pt">
				<tbody>
					<tr>
						<td style="height:49.1pt; vertical-align:top; width:419.05pt">
						<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">Tipo de inter&eacute;s:</span></span></span></span></p>
						{{$confidencialidad->tipointeres}}
						</td>
					</tr>
				</tbody>
			</table>

			<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>

			<p style="margin-left:0cm; margin-right:0cm">&nbsp;</p>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">SEXTA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">.&nbsp;<strong>MODIFICACI&Oacute;N O TERMINACI&Oacute;N</strong>. Este acuerdo y declaraci&oacute;n solo podr&aacute;n ser modificadas o darse por terminadas con el consentimiento expreso por escrito de ambas partes.&nbsp;</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">S&Eacute;PTIMA</span></span></strong><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">.&nbsp;<strong>VALIDEZ Y PERFECCIONAMIENTO.</strong>&nbsp;El presente Acuerdo y Declaraci&oacute;n requieren para su validez y perfeccionamiento la firma de quien los suscribe.<br />
<br />
Para constancia, y en se&ntilde;al de aceptaci&oacute;n, se firma el presente acuerdo en un ejemplar, por la parte que lo suscribe, en la ciudad de Bogot&aacute; D.C. a los ({{$dt->day}}) d&iacute;as del mes de <?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
 
echo $meses[date($dt->month)-1];
//Salida: Viernes 24 de Febrero del 2012
 
?> del a&ntilde;o {{$dt->year}}.</span></span></span></span></span><br />
&nbsp;</p></p>

<table align="center" cellspacing="0" class="Table" style="border-collapse:collapse; border:undefined; width:92.0%">
	<tbody>
		<td colspan="2" style="height:50.6pt; width:100.0%">

			@if ($proyectos_articulos->aceptoterminos==1)
                Si, Acepto terminos de la confidencialidad
                @else
                Si, Acepto terminos de la confidencialidad                
                @endif
                <hr> 
		<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Firma</span></span></span></span></span>

			<!--<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">__________________________</span></span></span></span></span></p>-->

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Nombre: {{$confidencialidad->nombre_evaluador}}  </span></span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Documento de Identidad No. {{$confidencialidad->Tipo_documento}} {{$confidencialidad->documento}} </span></span></span></span></span></p>

			<!--<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Fecha de Nacimiento: {{$fecha_nacimiento->toFormattedDateString()}} </span></span></span></span></span></p>

			<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif"><span style="color:#003c60">Lugar de expedici&oacute;n: {{$proyectos_articulos->evaluadores->Ciudad_expedicion}}</span></span></span></span></span></p>-->
			</td>
		
		</tr>
	</tbody>
</table>
	<input type="hidden" name="proyectos_articulos_id" id="proyectos_articulos_id" value="{{$confidencialidad->proyectos_articulos_id}}">

	<div id="dialog" title="Información para imprimir el documento">
  <p>Para imprimir con CONTROL +P , lo puede hacer</p>
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
			        effect: "blind",
			        duration: 1000
      }

    			});
  } );
	});

</script>




{!! Form::close() !!}




@endsection
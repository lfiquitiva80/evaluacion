<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>	</title>

					<!-- Latest compiled and minified CSS & JS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
					<script src="//code.jquery.com/jquery.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
				</head>
				<body id="registro_home">
					
				</body>
				</html>

				 <script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#registro_inicio").modal("show");
  });
  </script>				



		<!--<a class="btn btn-primary" data-toggle="modal" href='#registro_inicio' >Trigger modal</a>-->
		
<div class="modal fade" id="registro_inicio">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar información del Evaluador</h4>
			</div>
			<div class="modal-body">
				
			



{!! Form::open(['route' => ['evaluadores.update', $evaluadores2->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

	<!--<legend>ACTUALIZAR INFORMACION</legend>-->

<!--	 @if (Auth::user()->TipoUsers==0)
	
	<a href="{{ $url = route('homedos')}}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@else
	<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
	@endif-->
	




	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			
		



	<div class="form-group">
		<label for="id">id</label>
		<input type="hidden" class="form-control" name="id"  id="id" placeholder="Id"  value="{{$evaluadores2->id}}" readonly="readonly">
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Nombre Evaluador</label>
		<input type="text" class="form-control" name="NombreEvaluador" id="NombreEvaluador" placeholder="Digite el Nombre del evaluador" value=" {{$evaluadores2->NombreEvaluador}}" readonly="readonly">
	</div>

<!--<div class="form-group">
		<label for="NombreDepartamento">Fecha de Nacimiento <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento"  value=" {{$evaluadores2->Fecha_Nacimiento}}" required>
	</div>
<script type="text/javascript">
$( function() {
    	$( "#Fecha_Nacimiento" ).datepicker();
    	//$( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    	$( "#Fecha_Nacimiento" ).on( "mousedown", function() {
      $( "#Fecha_Nacimiento" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    });
  } );
  </script>-->
	

	<div class="form-group">
		<!--<label for="email">email (*) Campo Obligatorio</label>-->
		<input type="hidden" class="form-control" name="email" id="email" placeholder="Digite una email"  value="{{$evaluadores2->email}}">
	</div>



	
	<?php  $Usuarios= DB::table('users')->get();?>

	<div class="form-group">
			

			
			
		<input type="hidden" class="form-control" name="id_users" id="id_users" placeholder="Digite el Nombre del evaluador" value="{{$evaluadores2->id_users}}" readonly="readonly">
		

			



	</div>

<div class="form-group ">
		<label for="">Tipo de Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
			<select name="TipoDocumento" id="TipoDocumento" class="form-control" required>
				@foreach($Tipo as $row)

				@if ($evaluadores2->TipoDocumento==$row->id)
				<option value="{{$row->id}}" selected>{{$row->Descripcion_Documento}}</option>
				@else
				<option value="{{$row->id}}" >{{$row->Descripcion_Documento}}</option>
				@endif

				@endforeach
			</select>
	</div>


	<div class="form-group">
		<label for="NombreDepartamento">Documentos de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label required>
		<input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Digite una Cedula" value="{{$evaluadores2->Cedula}}" required>
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Ciudad de Expedición del Documento de Identidad <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Ciudad_expedicion" id="Ciudad_expedicion" placeholder="Digite su Ciudad de Expedición del Documento de Identidad" value="{{$evaluadores2->Ciudad_expedicion}}" required>
	</div>

	<div class="form-group">
		<label for="NombreDepartamento">Indicativo <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		
		<select name="indicativo" id="indicativo" class="form-control" required="required">
		<option value="Afghanistan (+93)">Afghanistan (+93)</option>
		<option value="Albania (+355)">Albania (+355)</option>
		<option value="Algeria (+213)">Algeria (+213)</option>
		<option value="American Samoa (+1 684)">American Samoa (+1 684)</option>
		<option value="Andorra (+376)">Andorra (+376)</option>
		<option value="Angola (+244)">Angola (+244)</option>
		<option value="Anguilla (+1 264)">Anguilla (+1 264)</option>
		<option value="Antarctica (+672)">Antarctica (+672)</option>
		<option value="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
		<option value="Argentina (+54)">Argentina (+54)</option>
		<option value="Armenia (+374)">Armenia (+374)</option>
		<option value="Aruba (+297)">Aruba (+297)</option>
		<option value="AscensiÃ³n y TristÃ¡n de AcuÃ±a (+290)">AscensiÃ³n y TristÃ¡n de AcuÃ±a (+290)</option>
		<option value="Australia (+61)">Australia (+61)</option>
		<option value="Austria (+43)">Austria (+43)</option>
		<option value="Azerbaijan (+994)">Azerbaijan (+994)</option>
		<option value="Bahamas (+1 242)">Bahamas (+1 242)</option>
		<option value="Bahrain (+973)">Bahrain (+973)</option>
		<option value="Bangladesh (+880)">Bangladesh (+880)</option>
		<option value="Barbados (+1 246)">Barbados (+1 246)</option>
		<option value="Belarus (+375)">Belarus (+375)</option>
		<option value="Belgium (+32)">Belgium (+32)</option>
		<option value="Belize (+501)">Belize (+501)</option>
		<option value="Benin (+229)">Benin (+229)</option>
		<option value="Bermuda Islands (+1 441)">Bermuda Islands (+1 441)</option>
		<option value="Bhutan (+975)">Bhutan (+975)</option>
		<option value="Bolivia (+591)">Bolivia (+591)</option>
		<option value="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
		<option value="Botswana (+267)">Botswana (+267)</option>
		<option value="Bouvet Island (+)">Bouvet Island (+)</option>
		<option value="Brazil (+55)">Brazil (+55)</option>
		<option value="British Indian Ocean Territory (+)">British Indian Ocean Territory (+)</option>
		<option value="Brunei (+673)">Brunei (+673)</option>
		<option value="Bulgaria (+359)">Bulgaria (+359)</option>
		<option value="Burkina Faso (+226)">Burkina Faso (+226)</option>
		<option value="Burundi (+257)">Burundi (+257)</option>
		<option value="Cambodia (+855)">Cambodia (+855)</option>
		<option value="Cameroon (+237)">Cameroon (+237)</option>
		<option value="Canada (+1)">Canada (+1)</option>
		<option value="Cape Verde (+238)">Cape Verde (+238)</option>
		<option value="Cayman Islands (+1 345)">Cayman Islands (+1 345)</option>
		<option value="Central African Republic (+236)">Central African Republic (+236)</option>
		<option value="Chad (+235)">Chad (+235)</option>
		<option value="Chile (+56)">Chile (+56)</option>
		<option value="China (+86)">China (+86)</option>
		<option value="Christmas Island (+61)">Christmas Island (+61)</option>
		<option value="Cocos (Keeling) Islands (+61)">Cocos (Keeling) Islands (+61)</option>
		<option value="Colombia (+57)" selected>Colombia (+57)</option>
		<option value="Comoros (+269)">Comoros (+269)</option>
		<option value="Congo (+242)">Congo (+242)</option>
		<option value="Congo (+243)">Congo (+243)</option>
		<option value="Cook Islands (+682)">Cook Islands (+682)</option>
		<option value="Costa Rica (+506)">Costa Rica (+506)</option>
		<option value="Croatia (+385)">Croatia (+385)</option>
		<option value="Cuba (+53)">Cuba (+53)</option>
		<option value="Cyprus (+357)">Cyprus (+357)</option>
		<option value="Czech Republic (+420)">Czech Republic (+420)</option>
		<option value="Denmark (+45)">Denmark (+45)</option>
		<option value="Djibouti (+253)">Djibouti (+253)</option>
		<option value="Dominica (+1 767)">Dominica (+1 767)</option>
		<option value="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
		<option value="East Timor (+670)">East Timor (+670)</option>
		<option value="Ecuador (+593)">Ecuador (+593)</option>
		<option value="Egypt (+20)">Egypt (+20)</option>
		<option value="El Salvador (+503)">El Salvador (+503)</option>
		<option value="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
		<option value="Eritrea (+291)">Eritrea (+291)</option>
		<option value="Estados Federados de (+691)">Estados Federados de (+691)</option>
		<option value="Estonia (+372)">Estonia (+372)</option>
		<option value="Ethiopia (+251)">Ethiopia (+251)</option>
		<option value="Falkland Islands (Malvinas) (+500)">Falkland Islands (Malvinas) (+500)</option>
		<option value="Faroe Islands (+298)">Faroe Islands (+298)</option>
		<option value="Fiji (+679)">Fiji (+679)</option>
		<option value="Finland (+358)">Finland (+358)</option>
		<option value="France (+33)">France (+33)</option>
		<option value="French Guiana (+)">French Guiana (+)</option>
		<option value="French Polynesia (+689)">French Polynesia (+689)</option>
		<option value="French Southern Territories (+)">French Southern Territories (+)</option>
		<option value="Gabon (+241)">Gabon (+241)</option>
		<option value="Gambia (+220)">Gambia (+220)</option>
		<option value="Georgia (+995)">Georgia (+995)</option>
		<option value="Germany (+49)">Germany (+49)</option>
		<option value="Ghana (+233)">Ghana (+233)</option>
		<option value="Gibraltar (+350)">Gibraltar (+350)</option>
		<option value="Greece (+30)">Greece (+30)</option>
		<option value="Greenland (+299)">Greenland (+299)</option>
		<option value="Grenada (+1 473)">Grenada (+1 473)</option>
		<option value="Guadeloupe (+)">Guadeloupe (+)</option>
		<option value="Guam (+1 671)">Guam (+1 671)</option>
		<option value="Guatemala (+502)">Guatemala (+502)</option>
		<option value="Guernsey (+)">Guernsey (+)</option>
		<option value="Guinea (+224)">Guinea (+224)</option>
		<option value="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
		<option value="Guyana (+592)">Guyana (+592)</option>
		<option value="Haiti (+509)">Haiti (+509)</option>
		<option value="Heard Island and McDonald Islands (+)">Heard Island and McDonald Islands (+)</option>
		<option value="Honduras (+504)">Honduras (+504)</option>
		<option value="Hong Kong (+852)">Hong Kong (+852)</option>
		<option value="Hungary (+36)">Hungary (+36)</option>
		<option value="Iceland (+354)">Iceland (+354)</option>
		<option value="India (+91)">India (+91)</option>
		<option value="Indonesia (+62)">Indonesia (+62)</option>
		<option value="Iran (+98)">Iran (+98)</option>
		<option value="Iraq (+964)">Iraq (+964)</option>
		<option value="Ireland (+353)">Ireland (+353)</option>
		<option value="Isle of Man (+44)">Isle of Man (+44)</option>
		<option value="Israel (+972)">Israel (+972)</option>
		<option value="Italy (+39)">Italy (+39)</option>
		<option value="Ivory Coast (+225)">Ivory Coast (+225)</option>
		<option value="Jamaica (+1 876)">Jamaica (+1 876)</option>
		<option value="Japan (+81)">Japan (+81)</option>
		<option value="Jersey (+)">Jersey (+)</option>
		<option value="Jordan (+962)">Jordan (+962)</option>
		<option value="Kazakhstan (+7)">Kazakhstan (+7)</option>
		<option value="Kenya (+254)">Kenya (+254)</option>
		<option value="Kiribati (+686)">Kiribati (+686)</option>
		<option value="Kuwait (+965)">Kuwait (+965)</option>
		<option value="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
		<option value="Laos (+856)">Laos (+856)</option>
		<option value="Latvia (+371)">Latvia (+371)</option>
		<option value="Lebanon (+961)">Lebanon (+961)</option>
		<option value="Lesotho (+266)">Lesotho (+266)</option>
		<option value="Liberia (+231)">Liberia (+231)</option>
		<option value="Libya (+218)">Libya (+218)</option>
		<option value="Liechtenstein (+423)">Liechtenstein (+423)</option>
		<option value="Lithuania (+370)">Lithuania (+370)</option>
		<option value="Luxembourg (+352)">Luxembourg (+352)</option>
		<option value="Macao (+853)">Macao (+853)</option>
		<option value="Macedonia (+389)">Macedonia (+389)</option>
		<option value="Madagascar (+261)">Madagascar (+261)</option>
		<option value="Malawi (+265)">Malawi (+265)</option>
		<option value="Malaysia (+60)">Malaysia (+60)</option>
		<option value="Maldives (+960)">Maldives (+960)</option>
		<option value="Mali (+223)">Mali (+223)</option>
		<option value="Malta (+356)">Malta (+356)</option>
		<option value="Marshall Islands (+692)">Marshall Islands (+692)</option>
		<option value="Martinique (+)">Martinique (+)</option>
		<option value="Mauritania (+222)">Mauritania (+222)</option>
		<option value="Mauritius (+230)">Mauritius (+230)</option>
		<option value="Mayotte (+262)">Mayotte (+262)</option>
		<option value="Mexico (+52)">Mexico (+52)</option>
		<option value="Moldova (+373)">Moldova (+373)</option>
		<option value="Monaco (+377)">Monaco (+377)</option>
		<option value="Mongolia (+976)">Mongolia (+976)</option>
		<option value="Montenegro (+382)">Montenegro (+382)</option>
		<option value="Montserrat (+1 664)">Montserrat (+1 664)</option>
		<option value="Morocco (+212)">Morocco (+212)</option>
		<option value="Mozambique (+258)">Mozambique (+258)</option>
		<option value="Myanmar (+95)">Myanmar (+95)</option>
		<option value="Namibia (+264)">Namibia (+264)</option>
		<option value="Nauru (+674)">Nauru (+674)</option>
		<option value="Nepal (+977)">Nepal (+977)</option>
		<option value="Netherlands (+31)">Netherlands (+31)</option>
		<option value="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
		<option value="New Caledonia (+687)">New Caledonia (+687)</option>
		<option value="New Zealand (+64)">New Zealand (+64)</option>
		<option value="Nicaragua (+505)">Nicaragua (+505)</option>
		<option value="Niger (+227)">Niger (+227)</option>
		<option value="Nigeria (+234)">Nigeria (+234)</option>
		<option value="Niue (+683)">Niue (+683)</option>
		<option value="Norfolk Island (+)">Norfolk Island (+)</option>
		<option value="North Korea (+850)">North Korea (+850)</option>
		<option value="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
		<option value="Norway (+47)">Norway (+47)</option>
		<option value="Oman (+968)">Oman (+968)</option>
		<option value="Pakistan (+92)">Pakistan (+92)</option>
		<option value="Palau (+680)">Palau (+680)</option>
		<option value="Palestine (+)">Palestine (+)</option>
		<option value="Panama (+507)">Panama (+507)</option>
		<option value="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
		<option value="Paraguay (+595)">Paraguay (+595)</option>
		<option value="Peru (+51)">Peru (+51)</option>
		<option value="Philippines (+63)">Philippines (+63)</option>
		<option value="Pitcairn Islands (+870)">Pitcairn Islands (+870)</option>
		<option value="Poland (+48)">Poland (+48)</option>
		<option value="Portugal (+351)">Portugal (+351)</option>
		<option value="Puerto Rico (+1)">Puerto Rico (+1)</option>
		<option value="Qatar (+974)">Qatar (+974)</option>
		<option value="RÃ©union (+)">RÃ©union (+)</option>
		<option value="Romania (+40)">Romania (+40)</option>
		<option value="Russia (+7)">Russia (+7)</option>
		<option value="Rwanda (+250)">Rwanda (+250)</option>
		<option value="Saint BarthÃ©lemy (+590)">Saint BarthÃ©lemy (+590)</option>
		<option value="Saint Kitts and Nevis (+1 869)">Saint Kitts and Nevis (+1 869)</option>
		<option value="Saint Lucia (+1 758)">Saint Lucia (+1 758)</option>
		<option value="Saint Martin (French part) (+1 599)">Saint Martin (French part) (+1 599)</option>
		<option value="Saint Pierre and Miquelon (+508)">Saint Pierre and Miquelon (+508)</option>
		<option value="Saint Vincent and the Grenadines (+1 784)">Saint Vincent and the Grenadines (+1 784)</option>
		<option value="Samoa (+685)">Samoa (+685)</option>
		<option value="San Marino (+378)">San Marino (+378)</option>
		<option value="Sao Tome and Principe (+239)">Sao Tome and Principe (+239)</option>
		<option value="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
		<option value="Senegal (+221)">Senegal (+221)</option>
		<option value="Serbia (+381)">Serbia (+381)</option>
		<option value="Seychelles (+248)">Seychelles (+248)</option>
		<option value="Sierra Leone (+232)">Sierra Leone (+232)</option>
		<option value="Singapore (+65)">Singapore (+65)</option>
		<option value="Slovakia (+421)">Slovakia (+421)</option>
		<option value="Slovenia (+386)">Slovenia (+386)</option>
		<option value="Solomon Islands (+677)">Solomon Islands (+677)</option>
		<option value="Somalia (+252)">Somalia (+252)</option>
		<option value="South Africa (+27)">South Africa (+27)</option>
		<option value="South Georgia and the South Sandwich Islands (+)">South Georgia and the South Sandwich Islands (+)</option>
		<option value="South Korea (+82)">South Korea (+82)</option>
		<option value="Spain (+34)">Spain (+34)</option>
		<option value="Sri Lanka (+94)">Sri Lanka (+94)</option>
		<option value="Sudan (+249)">Sudan (+249)</option>
		<option value="Suriname (+597)">Suriname (+597)</option>
		<option value="Svalbard and Jan Mayen (+)">Svalbard and Jan Mayen (+)</option>
		<option value="Swaziland (+268)">Swaziland (+268)</option>
		<option value="Sweden (+46)">Sweden (+46)</option>
		<option value="Switzerland (+41)">Switzerland (+41)</option>
		<option value="Syria (+963)">Syria (+963)</option>
		<option value="Taiwan (+886)">Taiwan (+886)</option>
		<option value="Tajikistan (+992)">Tajikistan (+992)</option>
		<option value="Tanzania (+255)">Tanzania (+255)</option>
		<option value="Thailand (+66)">Thailand (+66)</option>
		<option value="Togo (+228)">Togo (+228)</option>
		<option value="Tokelau (+690)">Tokelau (+690)</option>
		<option value="Tonga (+676)">Tonga (+676)</option>
		<option value="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
		<option value="Tunisia (+216)">Tunisia (+216)</option>
		<option value="Turkey (+90)">Turkey (+90)</option>
		<option value="Turkmenistan (+993)">Turkmenistan (+993)</option>
		<option value="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
		<option value="Tuvalu (+688)">Tuvalu (+688)</option>
		<option value="Uganda (+256)">Uganda (+256)</option>
		<option value="Ukraine (+380)">Ukraine (+380)</option>
		<option value="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
		<option value="United Kingdom (+44)">United Kingdom (+44)</option>
		<option value="United States Minor Outlying Islands (+)">United States Minor Outlying Islands (+)</option>
		<option value="United States of America (+1)">United States of America (+1)</option>
		<option value="United States Virgin Islands (+1 340)">United States Virgin Islands (+1 340)</option>
		<option value="Uruguay (+598)">Uruguay (+598)</option>
		<option value="Uzbekistan (+998)">Uzbekistan (+998)</option>
		<option value="Vanuatu (+678)">Vanuatu (+678)</option>
		<option value="Vatican City State (+39)">Vatican City State (+39)</option>
		<option value="Venezuela (+58)">Venezuela (+58)</option>
		<option value="Vietnam (+84)">Vietnam (+84)</option>
		<option value="Virgin Islands (+1 284)">Virgin Islands (+1 284)</option>
		<option value="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
		<option value="Western Sahara (+)">Western Sahara (+)</option>
		<option value="Yemen (+967)">Yemen (+967)</option>
		<option value="Zambia (+260)">Zambia (+260)</option>
		<option value="Zimbabwe (+263)">Zimbabwe (+263)</option>
	
		</select>


	</div>




	<div class="form-group">
		<label for="Telefono">Teléfono <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="tel" class="form-control" name="Telefono" id="Telefono" placeholder="(+indicativo)(xxxxxxxxxx)"  value="{{$evaluadores2->Telefono}}" required>
	</div>


	

	<div class="form-group">
		<label for="Direccion">Dirección <span style="color:#c0392b">(*) Campo Obligatorio</span></label>
		<input type="text" class="form-control" name="Direccion" id="TelefDireccionono" placeholder="Digite una Direccion" value="{{$evaluadores2->Direccion}}" required>
	</div>
		<!--
	<div class="form-group">
		<label for="Codigo_postal">Código_postal</label>
		<input type="text" class="form-control" name="Codigo_postal" id="Codigo_postal" placeholder="Digite un Codigo_postal" value="{{$evaluadores2->Codigo_postal}}" >
	</div>




	</div>-->

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="NombreDepartamento">Hoja de Vida <span style="color:#c0392b">(*) Campo Obligatorio </span></label>
		<input type="file" class="form-control" name="HV" id="HV" placeholder="Suba la hoja de Vida"  value="{{$evaluadores2->HV}}" onchange="nombrefileHV()"> 
		@if(!empty($evaluadores2->HV))
		<i class="fa fa-check-square" aria-hidden="true" > Ya tiene una Hoja de Vida en el Sistema ¿desea modificarlo? </i>

		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b">Falta por Subir la Hoja de Vida</span></i>
		@endif

		<p id="hojavida"></p>

	</div>
	</div>
<!--
	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Subir el Documento de Identidad </label>
		<input type="file" class="form-control" name="Cedula_pdf" id="Cedula_pdf" placeholder="Digite el cargo" value="{{$evaluadores2->Cedula_pdf}}" onchange="nombrefilecedula()">
		@if(!empty($evaluadores2->Cedula_pdf))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene un Documento de identificación en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b">Falta por Subir la Cédula</span></i>
		@endif

		<p id="ceduladoc"></p>

	</div>
	</div>

	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Certificado_Bancario </label>
		<input type="file" class="form-control" name="Certificado_Bancario" id="Certificado_Bancario" placeholder="Digite Certificado_Bancario" onchange="nombrefilebancario()">
		@if(!empty($evaluadores2->Certificado_Bancario))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene un Certificado Bancario en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b"> Falta por subir el Certificado Bancario</span></i>
		@endif

		<p id="bancariodoc"></p>

	</div>
	</div>

		
	<div class="form-group">
		<div class="btn btn-default btn-file">
			<i class="fa fa-paperclip"></i> Attachment
		<label for="funcionario">Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</label>
		
		<input type="file" class="form-control" name="Rut" id="Rut" placeholder="Rut" value="{{$evaluadores2->Rut}}" onchange="nombrefilerut()">
		@if(!empty($evaluadores2->Rut))
		<i class="fa fa-check-square" aria-hidden="true"> Ya tiene Documento en el Sistema ¿desea modificarlo?</i>
		@else
		<i class="fa fa-times-circle" aria-hidden="true"> <span style="color:#c0392b"> Falta el Rut si es nacionalidad Colombiana o Pasaporte si es extranjero</span></i>
		@endif
		
		<p id="Rutdoc"></p>

		
	</div>
	</div>-->



	
	
</div>
			<div class="modal-footer">
				<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

				<button type="submit" class="btn btn-info pull-center" id="informacion">Actualizar para Continuar</button>
			</div>



			{!! Form::close() !!}
		</div>
	
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<script type="text/javascript">
				$(function() {
					$('#informacion').click(function(event) {
						//alert("message?: DOMString");
						swal("Información actualizada!","Seguir con el boton de aceptar confidencialidad","success");	
					});
				});


			</script>

			
	</div>
</div>


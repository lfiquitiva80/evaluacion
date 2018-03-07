
               $(document).ready(function() 
               {
                    $('.sumados').bind('keyup keypress',function(event) 
                    {
                        var total = 0;
                        $('.sumados').each(function(i)
                        {
                            if ( !$(this).val() ) 
                            {
                                total = 0;
                                
                            }
                            else
                            {
                                total = parseInt( total ) + parseInt( $(this).val() );    
                            }                       
                        });

                        $('#Total_evaluacion').val( total );

                            

                          if (total>=70) {
                              $('#nosirecomiento').hide();    
                              $('#recomendacion').attr('value', '1');;
                             $('#respuesta').html("Si recomiendo el Proyecto y/o Artículo");
                          }else {
                              $('#nosirecomiento').hide();    
                              $('#recomendacion').attr('value', '0');
                              $('#respuesta').html("No recomiendo el Proyecto y/o Artículo");
                          }
                        
                    });
                });



               $(document).ready(function(){
                    $('#mimunicipio').DataTable();
                });
          



       

          $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});



//Pasar a Mayúsculas
     function Mayusculas() {
              var x =document.getElementById("DescripcionProyecto_Articulo");
              x.value =x.value.toUpperCase();
          }     


   //Colocar un reloj en la parte principal del la página del HOME  con el id <p id="reloj"></p>
/*function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("reloj").innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(function(){ startTime() }, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}*/

//funciones con jquery iu
  $( function() {
    $( document ).tooltip();
  } );


 
       
$(document).ready(function() {
            $('#preguntarguardar').click(function(event) {

                var txt;
var r = confirm("Verificar si guardo antes de Salir \n Aceptar para Regresar \n Cancelar para Guardar");
if (r == true) {
    txt = "You pressed OK!";
} else {
    event.preventDefault();
}
              });
        });




$(function() {
    
$('#spinner').hide();

  $('#cargarall').load(function() {
       
      
      $('#spinner').show();

            


  });

});


//verificacion de los datos de mi archivo file para la hoja de vida


function nombrefileHV(){
    var x = document.getElementById("HV");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". Se va actualizar el siguiente nombre del archivo.  : </strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "Nombre: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "Tamaño: " + file.size + " bytes <br>";

                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Seleccionar un archivo";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("hojavida").innerHTML = txt;
}

//verificacion de los datos de mi archivo file para el Documento de identidad


function nombrefilecedula(){
    var x = document.getElementById("Cedula_pdf");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". Se va actualizar el siguiente nombre del archivo.  : </strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "Nombre: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "Tamaño: " + file.size + " bytes <br>";

                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Seleccionar un archivo";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("ceduladoc").innerHTML = txt;
}



function nombrefilebancario(){
    var x = document.getElementById("Certificado_Bancario");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". Se va actualizar el siguiente nombre del archivo.  : </strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "Nombre: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "Tamaño: " + file.size + " bytes <br>";

                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Seleccionar un archivo";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("bancariodoc").innerHTML = txt;
}


function nombrefilerut(){
    var x = document.getElementById("Rut");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". Se va actualizar el siguiente nombre del archivo.  : </strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "Nombre: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "Tamaño: " + file.size + " bytes <br>";

                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Seleccionar un archivo";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("Rutdoc").innerHTML = txt;
}


 $( function() {
    var availableTags = [
"Afghanistan (+93)",
"Albania (+355)",
"Algeria (+213)",
"American Samoa (+1 684)",
"Andorra (+376)",
"Angola (+244)",
"Anguilla (+1 264)",
"Antarctica (+672)",
"Antigua and Barbuda (+1 268)",
"Argentina (+54)",
"Armenia (+374)",
"Aruba (+297)",
"AscensiÃ³n y TristÃ¡n de AcuÃ±a (+290)",
"Australia (+61)",
"Austria (+43)",
"Azerbaijan (+994)",
"Bahamas (+1 242)",
"Bahrain (+973)",
"Bangladesh (+880)",
"Barbados (+1 246)",
"Belarus (+375)",
"Belgium (+32)",
"Belize (+501)",
"Benin (+229)",
"Bermuda Islands (+1 441)",
"Bhutan (+975)",
"Bolivia (+591)",
"Bosnia and Herzegovina (+387)",
"Botswana (+267)",
"Bouvet Island (+)",
"Brazil (+55)",
"British Indian Ocean Territory (+)",
"Brunei (+673)",
"Bulgaria (+359)",
"Burkina Faso (+226)",
"Burundi (+257)",
"Cambodia (+855)",
"Cameroon (+237)",
"Canada (+1)",
"Cape Verde (+238)",
"Cayman Islands (+1 345)",
"Central African Republic (+236)",
"Chad (+235)",
"Chile (+56)",
"China (+86)",
"Christmas Island (+61)",
"Cocos (Keeling) Islands (+61)",
"Colombia (+57)",
"Comoros (+269)",
"Congo (+242)",
"Congo (+243)",
"Cook Islands (+682)",
"Costa Rica (+506)",
"Croatia (+385)",
"Cuba (+53)",
"Cyprus (+357)",
"Czech Republic (+420)",
"Denmark (+45)",
"Djibouti (+253)",
"Dominica (+1 767)",
"Dominican Republic (+1 809)",
"East Timor (+670)",
"Ecuador (+593)",
"Egypt (+20)",
"El Salvador (+503)",
"Equatorial Guinea (+240)",
"Eritrea (+291)",
"Estados Federados de (+691)",
"Estonia (+372)",
"Ethiopia (+251)",
"Falkland Islands (Malvinas) (+500)",
"Faroe Islands (+298)",
"Fiji (+679)",
"Finland (+358)",
"France (+33)",
"French Guiana (+)",
"French Polynesia (+689)",
"French Southern Territories (+)",
"Gabon (+241)",
"Gambia (+220)",
"Georgia (+995)",
"Germany (+49)",
"Ghana (+233)",
"Gibraltar (+350)",
"Greece (+30)",
"Greenland (+299)",
"Grenada (+1 473)",
"Guadeloupe (+)",
"Guam (+1 671)",
"Guatemala (+502)",
"Guernsey (+)",
"Guinea (+224)",
"Guinea-Bissau (+245)",
"Guyana (+592)",
"Haiti (+509)",
"Heard Island and McDonald Islands (+)",
"Honduras (+504)",
"Hong Kong (+852)",
"Hungary (+36)",
"Iceland (+354)",
"India (+91)",
"Indonesia (+62)",
"Iran (+98)",
"Iraq (+964)",
"Ireland (+353)",
"Isle of Man (+44)",
"Israel (+972)",
"Italy (+39)",
"Ivory Coast (+225)",
"Jamaica (+1 876)",
"Japan (+81)",
"Jersey (+)",
"Jordan (+962)",
"Kazakhstan (+7)",
"Kenya (+254)",
"Kiribati (+686)",
"Kuwait (+965)",
"Kyrgyzstan (+996)",
"Laos (+856)",
"Latvia (+371)",
"Lebanon (+961)",
"Lesotho (+266)",
"Liberia (+231)",
"Libya (+218)",
"Liechtenstein (+423)",
"Lithuania (+370)",
"Luxembourg (+352)",
"Macao (+853)",
"Macedonia (+389)",
"Madagascar (+261)",
"Malawi (+265)",
"Malaysia (+60)",
"Maldives (+960)",
"Mali (+223)",
"Malta (+356)",
"Marshall Islands (+692)",
"Martinique (+)",
"Mauritania (+222)",
"Mauritius (+230)",
"Mayotte (+262)",
"Mexico (+52)",
"Moldova (+373)",
"Monaco (+377)",
"Mongolia (+976)",
"Montenegro (+382)",
"Montserrat (+1 664)",
"Morocco (+212)",
"Mozambique (+258)",
"Myanmar (+95)",
"Namibia (+264)",
"Nauru (+674)",
"Nepal (+977)",
"Netherlands (+31)",
"Netherlands Antilles (+599)",
"New Caledonia (+687)",
"New Zealand (+64)",
"Nicaragua (+505)",
"Niger (+227)",
"Nigeria (+234)",
"Niue (+683)",
"Norfolk Island (+)",
"North Korea (+850)",
"Northern Mariana Islands (+1 670)",
"Norway (+47)",
"Oman (+968)",
"Pakistan (+92)",
"Palau (+680)",
"Palestine (+)",
"Panama (+507)",
"Papua New Guinea (+675)",
"Paraguay (+595)",
"Peru (+51)",
"Philippines (+63)",
"Pitcairn Islands (+870)",
"Poland (+48)",
"Portugal (+351)",
"Puerto Rico (+1)",
"Qatar (+974)",
"RÃ©union (+)",
"Romania (+40)",
"Russia (+7)",
"Rwanda (+250)",
"Saint BarthÃ©lemy (+590)",
"Saint Kitts and Nevis (+1 869)",
"Saint Lucia (+1 758)",
"Saint Martin (French part) (+1 599)",
"Saint Pierre and Miquelon (+508)",
"Saint Vincent and the Grenadines (+1 784)",
"Samoa (+685)",
"San Marino (+378)",
"Sao Tome and Principe (+239)",
"Saudi Arabia (+966)",
"Senegal (+221)",
"Serbia (+381)",
"Seychelles (+248)",
"Sierra Leone (+232)",
"Singapore (+65)",
"Slovakia (+421)",
"Slovenia (+386)",
"Solomon Islands (+677)",
"Somalia (+252)",
"South Africa (+27)",
"South Georgia and the South Sandwich Islands (+)",
"South Korea (+82)",
"Spain (+34)",
"Sri Lanka (+94)",
"Sudan (+249)",
"Suriname (+597)",
"Svalbard and Jan Mayen (+)",
"Swaziland (+268)",
"Sweden (+46)",
"Switzerland (+41)",
"Syria (+963)",
"Taiwan (+886)",
"Tajikistan (+992)",
"Tanzania (+255)",
"Thailand (+66)",
"Togo (+228)",
"Tokelau (+690)",
"Tonga (+676)",
"Trinidad and Tobago (+1 868)",
"Tunisia (+216)",
"Turkey (+90)",
"Turkmenistan (+993)",
"Turks and Caicos Islands (+1 649)",
"Tuvalu (+688)",
"Uganda (+256)",
"Ukraine (+380)",
"United Arab Emirates (+971)",
"United Kingdom (+44)",
"United States Minor Outlying Islands (+)",
"United States of America (+1)",
"United States Virgin Islands (+1 340)",
"Uruguay (+598)",
"Uzbekistan (+998)",
"Vanuatu (+678)",
"Vatican City State (+39)",
"Venezuela (+58)",
"Vietnam (+84)",
"Virgin Islands (+1 284)",
"Wallis and Futuna (+681)",
"Western Sahara (+)",
"Yemen (+967)",
"Zambia (+260)",
"Zimbabwe (+263)"


    ];
    $( "#indicativo" ).autocomplete({
      source: availableTags
    });
  } );




 $(document).ready(function() {

  $("#cerrar").click(function(event) {
      alert('message?: DOMString');

  });
   
 });





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
     "BANCO DE LA REPÚBLICA",
      "BANCO DE BOGOTÁ",
      "BANCO POPULAR",
      "BANCO CORPBANCA COLOMBIA S.A.",
      "BANCOLOMBIA S.A.",
      "CITIBANK COLOMBIA",
      "BANCO GNB SUDAMERIS COLOMBIA",
      "BBVA COLOMBIA",
      "RED MULTIBANCA COLPATRIA S.A.",
      "BANCO DE OCCIDENTE",
      "BANCO CAJA SOCIAL - BCSC S.A.",
      "BANCO AGRARIO DE COLOMBIA S.A.",
      "BANCO DAVIVIENDA S.A.",
      "BANCO AV VILLAS",
      "BANCO W S.A.",
      "BANCO PROCREDIT",
      "BANCAMIA",
      "BANCO PICHINCHA S.A.",
      "BANCOOMEVA",
      "BANCO FALABELLA S.A.",
      "BANCO FINANDINA S.A.",
      "BANCO MULTIBANK S.A",
      "BANCO SANTANDER DE NEGOCIOS COLOMBIA S.A. - BANCO SANTANDER",
      "BANCO COOPERATIVO COOPCENTRAL",
      "BANCO COMPARTIR S.A"

    ];
    $( "#nombrebanco" ).autocomplete({
      source: availableTags
    });
  } );

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

                          if (total>=75) {
                              $('#Total_evaluacion').val( total );
                              $('#aprobo').html( "SI APROBÓ" );    
                          }else {
                              $('#Total_evaluacion').val( total );
                              $('#aprobo').html( "NO APROBÓ" );   
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
function startTime() {
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
}

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

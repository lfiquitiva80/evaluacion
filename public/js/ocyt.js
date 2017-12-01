
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


    

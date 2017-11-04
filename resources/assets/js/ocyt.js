
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
          



          var app6 = new Vue({
              el: '#app-6',
              data: {
                message: 'Hello Vue!'
              }
            })
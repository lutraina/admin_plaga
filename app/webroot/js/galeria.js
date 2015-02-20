/**
 * @author Alisson Barbosa Ferreira
 */

$(function() {
    $( "#ordenarFotos" ).sortable({
        update: function(event, ui) {
            var newOrder = $(this).sortable('toArray');
            //alert(newOrder);
                        
            $.ajax({
			    url:'/status/salvar/'+newOrder,
			    type:'POST',
    			beforeSend: function(){
					$('#loading').show();
				},				  
				success: function(txt) {
				  	$('#loading').hide();
				},
				error: function(txt) {
				 	// Erros aqui
				}		   
			});
			
			    		           
        }    	
    	
    });
    $( "#ordenarFotos" ).disableSelection();
});


/* Ordena as fotos depois do upload */
function ordenar() {
    $( "#ordenarFotos" ).sortable({
        update: function(event, ui) {
            var newOrder = $(this).sortable('toArray');
            //alert(newOrder);
                        
            $.ajax({
			    url:'/status/salvar/'+newOrder,
			    type:'POST',
    			beforeSend: function(){
					$('#loading').show();
				},				  
				success: function(txt) {
				  	$('#loading').hide();
				},
				error: function(txt) {
				 	// Erros aqui
				}		   
			});						    		          
        }    	    	
    });
    $( "#ordenarFotos" ).disableSelection();
    
	$('.inputNameImagem').click(function(){
		$(this).removeClass('desable');
		
		
		$('.btnDesable').html('.')
	})
	$('.inputNameImagem').blur(function(){
		$(this).addClass(' desable');
	
			$.ajax({
			    url:'/files/saveImageName/'+$(this).attr('alt'),
			    type:'POST',
			    data:'titulo='+$(this).val(),
				  beforeSend: function(){

				   },
				  success: function(content) {
								
							
					
				  },
				  error: function(content) {

				  }		   
	
			});
		
	})
	$(".inputNameImagem").keypress(function(event) {
	
		if (event.which == 13 ) {
	  		$(this).addClass(' desable');
		    $.ajax({
				    url:'/files/saveImageName/'+$(this).attr('alt'),
				    type:'POST',
				    data:'titulo='+$(this).val(),
					  beforeSend: function(){

					   },
					  success: function(content) {
								
								$('.btnDesable').focus();
								$('.btnDesable').html('');
								
					  },
					  error: function(content) {

					  }		   
		
				});
		  	}
		})    
    
};
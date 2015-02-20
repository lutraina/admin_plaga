/**
 * @author Luciana Hembert
 */


/**
 * links and adds the businesses informations in the form
 */
		$(document).ready(function(){
							    	
			$('.businesses_id').change(function(){
				var valor = $(this).val();
				
					$.ajax({
				        url: '/schedules/getBusinesses/'+valor,
				    	beforeSend:function(){
				    		$('.retorno').html('Agurade...');
				    	},
				        success: function(data) {
							$('.retorno').html(data);
				        },
				        error: function(){     
				           }
					})
			})
		});
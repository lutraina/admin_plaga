<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Galeria multimidia
			<small>
				<i class="icon-double-angle-right"></i>
				Galeria de fotos
			</small>

		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('conteudo'); ?>
		<br class="cl" />
		<div class="hr hr32 hr-dotted"></div>


		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->

		<script src="/js/jquery.form.min.js"></script>
        <script>
				$(document).ready(function(){
								   
				 $('#upl').change(function(){
					 	if($('#galerias_id').val() != ''){
					 		
					 		uploadForm($('#galerias_id').val())
					 		
					 	}else{				    
							$.ajax({
								url:'/galerias/add/',
								type:'POST',
								success:function(data){
										$('#galerias_id').val(data);
											uploadForm(data)
											
										}
											
											
								});
							}
						})
								/*	comentadoo metodo q eue salva o titulo da imagem ao sair do botão  
								 */
								/*					$('.inputNameImagem').blur(function(){
							var input = $(this);
						
								$.ajax({
								    url:'/files/saveImageName/'+input.attr('alt'),
								    type:'POST',
								    data:'titulo='+input.val(),
									  beforeSend: function(){
						
									   },
									  success: function(content) {
													
												input.blur();
										
									  },
									  error: function(content) {
						
									  }		   
						
								});
							
						})				*/		
					});
				function uploadForm(galeria_id){
						$("#form-galeria").ajaxForm({
				            url: '/files/index',
			            	beforeSend:function(){
			            		$('.area-upload').hide();
			            		$('.preloader').show();

			            	},
				            success: function(data) {
				            	$('.preloader').hide('slow',function(){
				            		$('.upfotoshidden').show('fast',function(){
				            			
				            			$('.upfoto').load('/galerias/up/'+galeria_id);
				            		})
				            		
				            	});
				            },
				            error: function(){
				                mensagem.html('Erro com o arquivo');
				            }
				 
				        }).submit()
				       
				      }
	function delteImage(id){
	
		if(confirm("Deseja realmente excluir esta imagem?")){
			//$("#uploadResponse1").fadeIn();
			$.ajax({
			    url:'/files/delete/'+id,
			    type:'POST',
				  beforeSend: function(){
				  	
						$('.foto-'+id).html('aguarde...');
				   },
				  success: function(txt) {
					
					$('.foto-'+id).fadeOut(1000);
					//$("#responseAll").fadeOut(2000);
				  },
				  error: function(txt) {
				 	// em caso de erro você pode dar um alert('erro');
				  }		   
	
			});
		}
	}
	
	function deleteGaleria(id){
		if(confirm("Deseja realmente excluir esta galeria?")){
			location.href="/galerias/delete/"+id;
		}
	} 



	$(".inputNameImagem").keypress(function(event) {
	
		if (event.which == 13 ) {
	  		var input = $(this);
		    $.ajax({
				    url:'/files/saveImageName/'+input.attr('alt'),
				    type:'POST',
				    data:'titulo='+input.val(),
					  beforeSend: function(){

					   },
					  success: function(content) {
								
								input.blur();
								
								
					  },
					  error: function(content) {

					  }		   
		
				});
		  	}
		})
</script>



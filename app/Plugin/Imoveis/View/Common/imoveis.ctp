<?php $_URL = isset($_URL) ? $_URL : '/';?> 
<?php $_URL_FILE = isset($_URL_FILE) ? $_URL_FILE : '/';?>
<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			<a href="/imoveis">Classificados</a>
			<small>
				<i class="icon-double-angle-right"></i>
				Classificados de imoveis
			</small>
			<span class="pull-right">
				<a href="<?= $_URL ?>imoveis/add" class="btn btn-success btn-mini" >Adicionar um novo imóvel</a>
			</span>
		</h1>
	</div>
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('Common_Content'); ?>

		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->
<script src="/js/jquery.form.min.js"></script>
        <script>
				$(document).ready(function(){
								   
				 $('#upl').change(function(){
					 	if($('#imoveis_id').val() != ''){
					 		
					 		uploadForm($('#imoveis_id').val())
					 		
					 	}else{				    
							$.ajax({
								url:'/imoveis/add/',
								type:'POST',
								success:function(data){
										$('#imoveis_id').val(data);
											uploadForm(data)
											
										}
											
											
								});
							}
						})
					});
				function uploadForm(galeria_id){
						$("#form-galeria").ajaxForm({
				            url: '/imoveis/up_fotos',
			            	beforeSend:function(){
			            		$('.area-upload').hide();
			            		$('.preloader').show();

			            	},
				            success: function(data) {
				            	$('.preloader').hide('slow',function(){
				            		$('.upfotoshidden').show('fast',function(){
				            			
				            			$('.upfoto').load('/imoveis/up/'+galeria_id);
				            		})
				            		
				            	});
				            },
				            error: function(){
				                mensagem.html('Erro com o arquivo');
				            }
				 
				        }).submit()
				       
				      }
	function delteImage(id,element){
	
		if(confirm("Deseja realmente excluir esta imagem?")){
			//$("#uploadResponse1").fadeIn();
			$.ajax({
			    url:'/files/delete/'+id,
			    type:'POST',
				  beforeSend: function(){
						$('#'+element).html('<img src="/assets/img/loading.gif" align="absmiddle">');
				   },
				  success: function(txt) {
					$('#'+element).fadeOut(1000);
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
			location.href="/imoveis/delete/"+id;
		}
} 


$('.inputNameImagem').blur(function(){
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
		
	})
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
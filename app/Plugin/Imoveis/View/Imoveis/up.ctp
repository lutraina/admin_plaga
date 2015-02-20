<div class="foto_min">
					 	
	<div class="row-fluid">
		<?php $flag = 0; ?>

		<?php foreach($files as $img): ?>
			<?php if($flag==6): ?>
				</div>
				<div class="clearfix space10"></div>
				<hr class="clearfix" />
				<div class="row-fluid">	
			<?php $flag = 0; ?>
			
			<?php endif; ?>
			
			<div class="span2" id="element<?= $img['File']['id']?>">

				<div class="thumbnail">
					<div class="item">
						
							<div class="zoom">
								<img src="<?= $_URL_FILE; ?>imoveis/fotos/B-<?= $img['File']['name'] ?>"/>
								<div class="zoom-icon"></div>
							</div>
						
						<div class="details">
							<a href="#?" class="icon" onclick="delteImage('<?= $img['File']['id']?>','element<?= $img['File']['id']?>')"><i class="icon-remove"></i>
								
							</a>		
						</div>
					</div>
				</div>
				<div class="row-fluid">
				<!--	<input type="text" name='tituloImagem' placeholder="Escreva alguma coisa..." alt="<?= $img['File']['id']?>" value="<?php echo $img['File']['titulo']?>" class="span12 desable inputNameImagem" />-->
				</div>
			</div>

			<?php $flag++ ?>
		<?php endforeach; ?>
	</div>
	
</div>
<script>

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
	
	
	
	$('.btn-cancelar-up').click(function(){
			
			$.ajax({
					url:'/imoveis/confirmar_arquivos/'+$("#imoveis_id").val()+'/2',
					type:'POST',
					beforeSend: function(){
						$('.btn-cancelar-up').html('Aguarde...');
					},
					success: function(content) {
						
						
						$('.upfotoshidden').hide('fast',function(){
							$('.upfoto').html(' ');
						});
						$('.btn-cancelar-up').html('Cancelar');
						$('.area-upload').show();
						
					},
					error: function(content) {
						
					}		   
				});
			
		});
		
					
		$('.btn-salvar-up').click(function(){
			
			$.ajax({
					url:'/imoveis/confirmar_arquivos/'+$("#imoveis_id").val()+'/1',
					type:'POST',
					beforeSend: function(){
						$('.btn-salvar-up').html('Aguarde...');
					},
					success: function(content) {
						
						window.location.href="/imoveis/view/"+content;
						
						
					},
					error: function(content) {
						
					}		   
				});
			
		});		
</script>
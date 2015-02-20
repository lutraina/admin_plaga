<?php $this->extend('Common/post'); ?>	 	 

<?php echo $this->start('conteudo'); ?>
<div class="row-fluid">	
			<div class="widget-box transparent">
				<div class="widget-header widget-header-flat">
					<h4 class="lighter">
						
						<i class="icon-picture orange"></i>
						Altere seu album de fotos
						
					</h4>
					<div class="widget-toolbar">
							<a class="btn btn-mini" href="/posts"> Sair (Voltar para a listagem) </a>
							
					</div>
					<div class="widget-toolbar">
							<a class="btn btn-mini btn-info" href="/posts/edit/<?= $post['Post']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
							<a href="/status/excluir/Post/<?= $post['Post']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir este post?&#039;);"> <i class="icon-trash bigger-125"></i> </a>
					</div>


				</div>   
		</div>   			         
            <table class="table table-bordered table-invoice">
                <tr>
                    <td class="width30">Titulo</td>
                    <td class="width70"><strong><?= $post['Post']['titulo']?></strong></td>
                </tr>
                <tr>
                    <td class="width30">Categoria</td>
                    <td class="width70"><?= $post['Categoria']['titulo']?></td>
                </tr>                  
                <tr>
                    <td class="width30">Url</td>
                    <td class="width70">blog/<?= $post['Post']['url']?></td>
                </tr>                                
																		               
	                <tr >
	                		
	                	<td style="width: 200px;">
	                		<?php if($post['Post']['img']){ ?>
	                			<img src="<?= $_URL_FILE ?>A-<?= $post['Post']['img'] ?>" alt="imagem" style="width: 200px;"/>
	                		
	                		 <?php } ?> 
	                	</td>
	                	<td><?= $post['Post']['texto']; ?></td>
	                </tr>
                              
            </table>           
        

    	

</div><!--row-fluid-->



<?php echo $this->end(); ?>


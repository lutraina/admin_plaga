<?php $this->extend('Common/parceiro'); ?>	 	 

<?php echo $this->start('conteudo'); ?>
<div class="row-fluid">	
			<div class="widget-box transparent">
				<div class="widget-header widget-header-flat">
					<h4 class="lighter">
						
						<i class="icon-flag orange"></i>
						Parceiros
						
					</h4>
					<div class="widget-toolbar">
							<a class="btn btn-mini" href="/parceiros"> Sair (Voltar para a listagem) </a>
							
					</div>
					<div class="widget-toolbar">
							<a class="btn btn-mini btn-info" href="/parceiros/edit/<?= $parceiro['Parceiro']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
							<a href="/status/excluir/Parceiro/<?= $parceiro['Parceiro']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir este post?&#039;);"> <i class="icon-trash bigger-125"></i> </a>
					</div>


				</div>   
		</div>   			         
            <table class="table table-bordered table-invoice">
                <tr>
                    <td class="width30">Nome do parceiro</td>
                    <td class="width70"><strong><?= $parceiro['Parceiro']['titulo']?></strong></td>
                </tr>
                <tr>
                    <td class="width30">Link</td>
                    <td class="width70"><?= $parceiro['Parceiro']['link']?></td>
                </tr>                  
                         
																		               
	                <tr >
	                		
	                	<td style="width: 200px;">
	                		<?php if($parceiro['Parceiro']['img']){ ?>
	                			<img src="<?= $_URL_FILE ?>A-<?= $parceiro['Parceiro']['img'] ?>" alt="imagem" style="width: 200px;"/>
	                		
	                		 <?php } ?> 
	                	</td>
	                	<td><?= $parceiro['Parceiro']['texto']; ?></td>
	                </tr>
                              
            </table>           
        

    	

</div><!--row-fluid-->



<?php echo $this->end(); ?>


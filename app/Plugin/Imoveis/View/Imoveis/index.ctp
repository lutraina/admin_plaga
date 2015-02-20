<?php $this->extend('/Common/imoveis'); ?>
<?= $this->start('Common_Content') ?>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center"></th>
	        	<th>Tipo</th>
	            <th>Situação</th>
	            <th>Endereço</th>
	            <th>Vendedor</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <tbody>
		    <?php foreach($imoveis as $imovel): ?>
				
			    	<tr>
			    		<td style="width:70px; text-align: center">
			    			<?php if(isset($imovel['File'][0]['name'])): ?>
								<a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"><img src="<?= $_URL_FILE.'imoveis/fotos/B-'.$imovel['File'][0]['name']; ?>"/>	</a>
							<?php else: ?>
								<a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>">No-Image	</a>
			    			<?php endif;?>
			    		</td>
			    		<td><a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"><?= $imovel['Imovei']['tipo']; ?></a></td>
			    		<td><a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"><?= $imovel['Imovei']['situacao']; ?></a></td>	
			    		<td><a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"><?= $imovel['Imovei']['endereco']; ?></a></td>
			    		<td><a href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"><?= $imovel['Imovei']['vendedor']; ?></a></td>            	            	            		           
						<td class="center acao">
							<div class="btn-group">
								<a class="btn btn-mini btn-info" href="/imoveis/edit/<?= $imovel['Imovei']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
								<a href="/imoveis/delete/<?= $imovel['Imovei']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir este automovel? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								<a class="btn btn-mini btn-yellow" href="/imoveis/view/<?= $imovel['Imovei']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
							</div>	
						</td>
					</tr> 
			    
		    <?php endforeach; ?>
	    </tbody>
	</table>
<?= $this->end() ?>
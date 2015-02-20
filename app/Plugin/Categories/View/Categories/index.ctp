<?php $this->extend('/Common/categories'); ?>
<?= $this->start('Common_Content') ?>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center">ID</th>
	        	<th>Titulo</th>
	            <th>Url</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <tbody>
		    <?php foreach($categories as $category): ?>
			    
			    	<tr>
			    		<td style="width:70px; text-align: center"><?= $category['Category']['id']; ?></td>
			    		<td><a href="/categories/edit/<?= $category['Category']['id']; ?>"><?= $category['Category']['name']; ?></a></td>	
			    		<td><a href="/categories/edit/<?= $category['Category']['id']; ?>"><?= $category['Category']['url']; ?></a></td>	     	                 	            	            		           
						<td class="center acao">
							<div class="btn-group">
								<a class="btn btn-mini btn-info" href="/categories/edit/<?= $category['Category']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
								<a href="/categories/delete/<?= $category['Category']['id']; ?>/<?= $type ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir uma categoria, você excluirá de forma definitiva e irreversível todas as postagens/eventos relacionados a essa categoria? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								<a class="btn btn-mini btn-yellow" href="/categories/edit/<?= $category['Category']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
							</div>	
						</td>
					</tr> 
		   
		    <?php endforeach; ?>
	     </tbody>
	</table>
<?= $this->end() ?>
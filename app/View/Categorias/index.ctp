<?php $this->extend('Common/categoria');?>
<?php echo $this->start('conteudo'); ?>


<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center">ID</th>
        	<th>Titulo</th>
            <th>Url</th>
            
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>	   
	<?php foreach($categorias as $categoria): ?>
		<tbody>
	    	<tr>
	    		<td><?= $categoria['Categoria']['id']; ?></td>	 
	    		<td><?= $categoria['Categoria']['titulo']; ?></td>	            
	    		<td>blog/<?= $categoria['Categoria']['url']; ?></td>
				            	            	            		            
				<td class="center acao">
					<div class="btn-group">					 		
						<a class="btn btn-mini btn-info" href="/categorias/edit/<?= $categoria['Categoria']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
						<a href="/status/excluir/Categoria/<?= $categoria['Categoria']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir esta categoria?&#039;);"> <i class="icon-trash bigger-125"></i> </a>
					</div>								
				</td>
			</tr> 
		</tbody>
	<?php endforeach; ?>
</table>



<?php echo $this->end('conteudo'); ?>

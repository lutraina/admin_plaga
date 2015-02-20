<?php 
	$this->extend('Common/post');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center">ID</th>
        	<th>Titulo</th>
            <th>Url</th>
            <th>Views</th>
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>
    <?php foreach($posts as $post): ?>
	    <tbody>
	    	<tr>
	    		<td style="width:70px; text-align: center"><?= $post['Post']['id']; ?></td>
	    		<td><a href="/Posts/view/<?= $post['Post']['id']; ?>"><?= $post['Post']['titulo']; ?></a></td>	
	    		<td><a href="/Posts/view/<?= $post['Post']['id']; ?>"><?= $post['Post']['url']; ?></a></td>	     
	    		<td><a href="/Posts/view/<?= $post['Post']['id']; ?>"><?= $post['Post']['view']; ?></a></td>	                 	            	            		           
				<td class="center acao">
					
						
				
						<div class="btn-group">
							<a class="btn btn-mini btn-info" href="/posts/edit/<?= $post['Post']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
							<a href="/status/excluir/Post/<?= $post['Post']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir este post?&#039;);"> <i class="icon-trash bigger-125"></i> </a>

							<a class="btn btn-mini btn-yellow" href="/posts/view/<?= $post['Post']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>

						</div>
								
								
				</td>
			</tr> 
			
    </tbody>
    <?php endforeach; ?>
</table>

<?php echo $this->end(); ?>

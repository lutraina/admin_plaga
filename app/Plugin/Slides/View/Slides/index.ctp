<?php $this->extend('/Common/slides'); ?>
<?= $this->start('Common_Content') ?>
	<table class="table table-bordered table-hover" id="tab_list2"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center">ID</th>
	        	<th>Titulo</th>
	        	<th>Ordem</th>
	        	<th>Clicks</th>
	            <th>Link</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <tbody>
	    <?php foreach($slides as $slides): ?>
			
			    	<tr>
			    		<td style="width:70px; text-align: center"><?= $slides['Slide']['id']; ?></td>
			    		<td><a href="/slides/view/<?= $slides['Slide']['id']; ?>"><?= $slides['Slide']['title']; ?></a></td>
			    		<td><a href="/slides/view/<?= $slides['Slide']['id']; ?>"><?= $slides['Slide']['ordem']; ?></a></td>
			    		<td><a href="/slides/view/<?= $slides['Slide']['id']; ?>"><?= $slides['Slide']['clicks']; ?></a></td>	
			    		<td><a href="/slides/view/<?= $slides['Slide']['id']; ?>"><?= $slides['Slide']['link']; ?></a></td>	     	                 	            	            		           
						<td class="center acao">
							<div class="btn-group">
								<a class="btn btn-mini btn-info" href="/slides/edit/<?= $slides['Slide']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
								<a href="/slides/delete/<?= $slides['Slide']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta postagem? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								<a class="btn btn-mini btn-yellow" href="/slides/view/<?= $slides['Slide']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
							</div>	
						</td>
					</tr> 
		    
	    <?php endforeach; ?>
	    </tbody>
	</table>

<?= $this->end() ?>
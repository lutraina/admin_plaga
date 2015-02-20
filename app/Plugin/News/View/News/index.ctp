<?php $this->extend('/Common/news'); ?>
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
		    <?php foreach($news as $news): ?>
				
				    	<tr>
				    		<td style="width:70px; text-align: center"><?= $news['News']['id']; ?></td>
				    		<td><a href="/news/view/<?= $news['News']['id']; ?>"><?= $news['News']['title']; ?></a></td>	
				    		<td><a href="/news/view/<?= $news['News']['id']; ?>"><?= $news['News']['url']; ?></a></td>	     	                 	            	            		           
							<td class="center acao">
								<div class="btn-group">
									<a class="btn btn-mini btn-info" href="/news/edit/<?= $news['News']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
									<a href="/news/delete/<?= $news['News']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta postagem? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
									<a class="btn btn-mini btn-yellow" href="/news/view/<?= $news['News']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
								</div>	
							</td>
						</tr> 
			    
		    <?php endforeach; ?>
	    </tbody>
	</table>

<?= $this->end() ?>
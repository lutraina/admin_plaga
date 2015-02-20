<?php $this->extend('/Common/networks'); ?>
<?= $this->start('Common_Content') ?>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center"></th>
	        	
	            <th>Link</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <?php foreach($networks as $network): ?>
			<tbody>
			    	<tr>
			    		<td style="width:70px; text-align: center">
			    			<?php if(!empty($network['Network']['image'])): ?>
								<a href="/networks/edit/<?= $network['Network']['id']; ?>"><img src="<?= $_URL_FILE.'networks/fotos/'.$network['Network']['image']; ?>"/>	</a>
							<?php else: ?>
								<a href="/networks/edit/<?= $network['Network']['id']; ?>">No-Image	</a>
			    			<?php endif;?>
			    		</td>
			    			
			    		<td><a href="/networks/edit/<?= $network['Network']['id']; ?>"><?= $network['Network']['link']; ?></a></td>	     	                 	            	            		           
						<td class="center acao">
							<div class="btn-group">
								<a class="btn btn-mini btn-info" href="/networks/edit/<?= $network['Network']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
								<a href="/networks/delete/<?= $network['Network']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta postagem? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								
							</div>	
						</td>
					</tr> 
		    </tbody>
	    <?php endforeach; ?>
	</table>

<?= $this->end() ?>
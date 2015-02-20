<?php $this->extend('/Common/banners'); ?>
	<?= $this->start('Common_Content') ?>
		<table class="table table-bordered table-hover" style="margin-top:10px;" id="tab_list"><!-- block table => table-infinite -->
		    <thead>
		        <tr>
		        	<th style="width:70px; text-align: center"></th>
		        	<th style="width:40px;">Posição</th>
		        	<th style="width:120px;">Nome</th>
		            <th style="width:120px;">Categoria</th>
		            <th style="width:40px;">Clicks</th>
		            <th style="width:40px;">Ativo?</th>
		            <th style="width:40px;">Ação</th>
		        </tr>
		    </thead>
		    <tbody>
			    <?php foreach($banners as $banner): ?>
					
				    	<tr>
				    		<td style="width:70px; text-align: center">
				    			<?php if(!empty($banner['Banner']['image'])): ?>
									<a href="/banners/view/<?= $banner['Banner']['id']; ?>"><img src="<?= $_URL_FILE.'banners/fotos/'.$banner['Banner']['image']; ?>" width="60"/>	</a>
								<?php else: ?>
									<a href="/banners/view/<?= $banner['Banner']['id']; ?>">No-Image	</a>
				    			<?php endif;?>
				    		</td>
				    		<td><a href="/banners/view/<?= $banner['Banner']['id']; ?>"><?= $banner['Banner']['local']; ?></a></td>	
				    		<td><a href="/banners/view/<?= $banner['Banner']['id']; ?>"><?= $banner['Banner']['nome']; ?></a></td>	
				    		<td><a href="/banners/view/<?= $banner['Banner']['id']; ?>"><?= $banner['Banner']['categories']; ?></a></td>
				    		<td><?= count($banner['Click']); ?></td>
				    		<td><?= $banner['Banner']['status']; ?></td>	     	                 	            	            		           
							<td class="center acao">
								<div class="btn-group">
									<a class="btn btn-mini btn-info" href="/banners/edit/<?= $banner['Banner']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
									<a href="/banners/delete/<?= $banner['Banner']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta postagem? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
									<a class="btn btn-mini btn-yellow" href="/banners/view/<?= $banner['Banner']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
								</div>	
							</td>
						</tr> 
				    
			    <?php endforeach; ?>
		    </tbody>
		</table>
	<?= $this->end() ?>
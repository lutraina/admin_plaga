<?php $this->extend('Common/banners'); ?>
	<?= $this->start('Common_Content') ?>
		<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
		    <thead>
		        <tr>
		        	<th style="width:70px; text-align: center"></th>
		        	<th>Posição / referência</th>
		            <th>Categoria</th>
		            <th>Clicks</th>
		            
		            <th>Status ativo?</th>

		        </tr>
		    </thead>

		    <?php foreach($banners as $banner): ?>
				<tbody>
			    	<tr>
			    		<td style="width:70px; text-align: center">
			    			<?php if(!empty($banner['Banner']['image'])): ?>
								<a href="#?"><img src="<?= $_URL_FILE.'banners/fotos/'.$banner['Banner']['image']; ?>" width="60"/>	</a>
							<?php else: ?>
								<a href="#?">No-Image	</a>
			    			<?php endif;?>
			    		</td>
			    		<td><a href="#?"><?= $banner['Banner']['local']; ?></a></td>	
			    		<td><a href="#?"><?= $banner['Banner']['categories']; ?></a></td>
			    		<td><?= $banner['Click']; ?></td>
			    		<td><?= $banner['Banner']['status']; ?></td>	     	                 	            	            		           
						
					</tr> 
			    </tbody>
		    <?php endforeach; ?>
		</table>
	<?= $this->end() ?>
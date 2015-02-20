<?php $this->extend('/Common/schedule'); ?>
	<?= $this->start('Common_Content') ?>
		<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
		    <thead>
		        <tr>
		        	<th style="width:70px; text-align: center"></th>
		        	
		            <th>Titulo</th>
		            <th>Categoria</th>
		            <th>Data(s)</th>
		            <th style="width:120px;">Ação</th>
		        </tr>
		    </thead>
		    
		    <tbody>
			    <?php foreach($schedules as $schedule): ?>
					
				    	<tr>
				    		<td style="width:70px; text-align: center">
				    			<?php if(!empty($schedule['Schedule']['image'])): ?>
									<a href="/schedules/view/<?= $schedule['Schedule']['id']; ?>"><img src="<?= $_URL_FILE.'schedules/fotos/318x177-'.$schedule['Schedule']['image']; ?>" width="60"/>	</a>
								<?php else: ?>
									<a href="/schedules/view/<?= $schedule['Schedule']['id']; ?>">No-Image	</a>
				    			<?php endif;?>
				    		</td>
				    		<td><a href="/schedules/view/<?= $schedule['Schedule']['id']; ?>"><?= $schedule['Schedule']['title']; ?></a></td>	
				    		<td><a href="/schedules/view/<?= $schedule['Schedule']['id']; ?>"><?= $schedule['Category']['name']; ?></a></td>
				    		
				    		<td><?= $schedule['Schedule']['date_of_event']; ?></td>	     	                 	            	            		           
							<td class="center acao">
								<div class="btn-group">
									<a href="/schedules/delete/<?= $schedule['Schedule']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir este evento? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
									<a class="btn btn-mini btn-info" href="/schedules/edit/<?= $schedule['Schedule']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
									<a class="btn btn-mini btn-yellow" href="/schedules/view/<?= $schedule['Schedule']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
								</div>	
							</td>
						</tr> 
				    
			    <?php endforeach; ?>
		    </tbody>
		</table>
	<?= $this->end() ?>
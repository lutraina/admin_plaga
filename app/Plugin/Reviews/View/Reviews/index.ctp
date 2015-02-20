<?php $this->extend('/Common/reviews'); ?>
<?= $this->start('Common_Content') ?>
	<h3>Filtrando por: <?= $status ?></h3>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center">Data</th>
	        	<th>Empresa</th>
	            <th>Avaliações</th>
	            <th>Melhor para?</th>
	            <th>Comentário</th>
	          	<th>Status</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <?php foreach($reviews as $review): ?>
			<tbody>
			    	<tr>
			    		<td style="text-align: center"><?= date('d/m/Y H:i', strtotime($review['Review']['created'])); ?></td>
			    		<td><?= $review['Business']['name']; ?></td>	
			    		<td style="width:120px;">
			    			<b>Servico: 	</b> <?= $review['Review']['servico']; ?> <br />
			    			<b>Atendimento: </b> <?= $review['Review']['atendimento']; ?> <br />
			    			<b>Ambiente: 	</b> <?= $review['Review']['ambiente']; ?> <br />
			    		</td>
			    		<td><?= $review['Review']['melhor']; ?></td>
			    		<td><?= $review['Review']['comentario']; ?></td>
			    		<td><?= $review['Review']['status']; ?></td>		     	                 	            	            		           
						<td class="center acao" style="text-align: left;">
							<div class="btn-group">
								
								<a class="btn btn-mini btn-info" href="/reviews/edit/<?= $review['Review']['id']; ?>/<?= $review['Review']['status'] =='bloqueado' ? 'desbloqueado' : 'bloqueado' ; ?>"><?= $review['Review']['status'] =='bloqueado' ? '<i class="icon-thumbs-up bigger-125"></i>' : '<i class="icon-thumbs-down bigger-125"></i>' ; ?>  </a>
								<a href="/reviews/delete/<?= $review['Review']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta avaliação? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								
							</div>	
						</td>
					</tr> 
		    </tbody>
	    <?php endforeach; ?>
	</table>

<?= $this->end() ?>
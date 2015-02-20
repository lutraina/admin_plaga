<?php $this->extend('/Common/advantages'); ?>
<?= $this->start('Common_Content') ?>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center">Id</th>
	        	<th>Cupom</th>
	        	<th style="width:75px; text-align: center">Data Inicial</th>
	        	<th style="width:75px; text-align: center">Data Final</th>
	            <th style="width:120px;">Ação</th>
	        </tr>
	    </thead>
	    <tbody>
		    <?php foreach($advantages as $business): ?>
				
			    	<tr>
			    		<td style="width:70px; text-align: center">
							<?= $business['Advantage']['id']; ?>
			    		</td>
			    		<td><a href="/advantages/view/<?= $business['Advantage']['id']; ?>"><?= $business['Advantage']['title']; ?></a></td>	
			    		<td style="width:70px; text-align: center">
							<?= date("d/m/Y H:i:s", strtotime($business['Advantage']['date_start'])); ?>
			    		</td>
			    		<td style="width:70px; text-align: center">
							<?= date("d/m/Y H:i:s", strtotime($business['Advantage']['date_end'])); ?>
			    		</td>
						<td class="center acao">
							<div class="btn-group">
								<a class="btn btn-mini btn-info" href="/advantages/edit/<?= $business['Advantage']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
								<a href="/advantages/delete/<?= $business['Advantage']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir este cupom? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
								<a class="btn btn-mini btn-yellow" href="/advantages/view/<?= $business['Advantage']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
							</div>	
						</td>
					</tr> 
			   
		    <?php endforeach; ?>
	     </tbody>
	</table>

<?= $this->end() ?>
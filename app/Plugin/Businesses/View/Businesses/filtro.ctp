		<script>
			
				$(document).ready(function() {
					    $('.businessTable').dataTable();
					   
					} );
			
		</script>
<table class="table table-bordered table-hover businessTable" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center"></th>
        	<th>Nome</th>
        	<th>Gratuito</th>
        	<th>SubCategoria</th>
        	<th>Views</th>
            
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>
    <tbody>
	    <?php foreach($businesses as $business): ?>
			
		    	<tr>
		    		<td style="width:70px; text-align: center">
		    			<?php if(!empty($business['Business']['image'])): ?>
							<a href="/businesses/view/<?= $business['Business']['id']; ?>"><img src="<?= $_URL_FILE.'businesses/fotos/318x177-'.$business['Business']['image']; ?>" width="60"/>	</a>
						<?php else: ?>
							<a href="/businesses/view/<?= $business['Business']['id']; ?>">No-Image	</a>
		    			<?php endif;?>
		    		</td>
		    		<td><a href="/businesses/view/<?= $business['Business']['id']; ?>"><?= $business['Business']['name']; ?></a></td>	
		    		<td><a href="/businesses/view/<?= $business['Business']['id']; ?>"><?= $business['Business']['gratuito']; ?></a></td>
		    		<td><a href="/businesses/view/<?= $business['Business']['id']; ?>"><?= $business['Category']['name']; ?></a></td>
		    		<td><a href="/businesses/view/<?= $business['Business']['id']; ?>"><?= $business['Business']['view']; ?></a></td>	     	                 	            	            		           
					<td class="center acao">
						<div class="btn-group">
							<a class="btn btn-mini btn-info" href="/businesses/edit/<?= $business['Business']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
							<a href="/businesses/delete/<?= $business['Business']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta postagem? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
							<a class="btn btn-mini btn-yellow" href="/businesses/view/<?= $business['Business']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
						</div>	
					</td>
				</tr> 
		    
	    <?php endforeach; ?>
    </tbody>
</table>
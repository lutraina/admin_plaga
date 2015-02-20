<?php $this->extend('/Common/autos'); ?>
<?= $this->start('Common_Content') ?>
<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center"></th>
        	<th>Marca</th>
            <th>Modelo</th>
            <th>Versao</th>
            <th>Tipo do anuncio</th>
            <th>Proprietário</th>
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>
    <tbody>
	    <?php foreach($autos as $auto): ?>
			
		    	<tr>
		    		<td style="width:70px; text-align: center">
		    			<?php if(isset($auto['File'][0]['name']) && !empty($auto['File'][0]['name']) ) {?>
		    				<a href="/autos/view/<?= $auto['Auto']['id']; ?>"><img src="<?= $_URL_FILE.'autos/fotos/B-'.$auto['File'][0]['name']; ?>" width="60"/>	</a>
		    			<?php } else { ?>
							<a href="/autos/view/<?= $auto['Auto']['id']; ?>"><img src="<?= $_URL_FILE.'autos/n_disponivel.jpg'; ?>" width="60"/>	</a>
		    			<?php } ?>
		    		</td>
		    		<td><a href="/autos/view/<?= $auto['Auto']['id']; ?>"><?= $auto['Auto']['marca']; ?></a></td>
		    		<td><a href="/autos/view/<?= $auto['Auto']['id']; ?>"><?= $auto['Auto']['modelo']; ?></a></td>	
		    		<td><a href="/autos/view/<?= $auto['Auto']['id']; ?>"><?= $auto['Auto']['versao']; ?></a></td>	     	     
		    		<td><a href="/autos/view/<?= $auto['Auto']['id']; ?>"><?= $auto['Auto']['tipo']; ?></a></td>   
		    		<td><a href="/autos/view/<?= $auto['Auto']['id']; ?>"><?= $auto['Auto']['nome']; ?></a></td>            	            	            		           
					<td class="center acao">
						<div class="btn-group">
							<a class="btn btn-mini btn-info" href="/autos/edit/<?= $auto['Auto']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
							<a href="/autos/delete/<?= $auto['Auto']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir este automovel? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
							<a class="btn btn-mini btn-yellow" href="/autos/view/<?= $auto['Auto']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
						</div>	
					</td>
				</tr> 
		    
	    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->end() ?>
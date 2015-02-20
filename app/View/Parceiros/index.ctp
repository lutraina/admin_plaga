<?php 
	$this->extend('Common/parceiro');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center">ID</th>
        	<th>Nome do parceiro</th>
            <th>link</th>
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>
    <?php foreach($parceiros as $parceiro): ?>
	    <tbody>
	    	<tr>
	    		<td style="width:70px; text-align: center"><?= $parceiro['Parceiro']['id']; ?></td>
	    		<td><a href="/parceiros/view/<?= $parceiro['Parceiro']['id']; ?>"><?= $parceiro['Parceiro']['titulo']; ?></a></td>	
	    		<td><a href="/parceiros/view/<?= $parceiro['Parceiro']['id']; ?>"><?= $parceiro['Parceiro']['link']; ?></a></td>	     
				<td class="center acao">
					<div class="btn-group">
						<a class="btn btn-mini btn-info" href="/parceiros/edit/<?= $parceiro['Parceiro']['id']; ?>"> <i class="icon-edit bigger-125"></i> </a>
						<a href="/status/excluir/Parceiro/<?= $parceiro['Parceiro']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir este parceiro?&#039;);"> <i class="icon-trash bigger-125"></i> </a>

						<a class="btn btn-mini btn-yellow" href="/parceiros/view/<?= $parceiro['Parceiro']['id']; ?>"> <i class="icon-eye-open bigger-125"></i></a>
					</div>
				</td>
			</tr> 
			
    </tbody>
    <?php endforeach; ?>
</table>

<?php echo $this->end(); ?>

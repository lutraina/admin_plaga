
<?php $this->extend('Common/mensagem');?>
<?php echo $this->start('conteudo'); ?>

<table class="table table-bordered " id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
			<th style="width:8px"><input type="checkbox" class="group-checkable" data-set=".checkboxes" /></th>
			<th>Enviado por</th>										
			<th>E-mail</th>					
			<th>Data</th>
			<th>Ações</th>
        </tr>
    </thead>
	<?php foreach($contatos as $contato): ?>
		<tbody>
			<tr class="odd gradeX">
				<td><input type="checkbox" class="checkboxes" value="1" /></td>
				<td><a href="/mensagems/view/<?= $contato['Mensagem']['id']; ?>">
					<?= $contato['Mensagem']['nome']; ?>
				</a></td>
				<td><?= $contato['Mensagem']['email']; ?></td>																	
				<td><?= date("d/m/Y - H:i", strtotime($contato['Mensagem']['created']))?></td>
				<td class="center">			
					<a href="/mensagems/view/<?= $contato['Mensagem']['id']; ?>" class="btn btn-mini"><i class="icon-zoom-in"></i></a>&nbsp;																			
					<a href="/mensagems/delete/<?= $contato['Mensagem']['id']; ?>" class="btn btn-mini btn-danger" onclick="return confirm(&#039;Deseja mesmo excluir esta mensagem?&#039;);"><i class="icon-remove"></i></a>&nbsp;									
				</td>
			</tr>
		</tbody>
	<?php endforeach; ?>
</table>




<?php echo $this->end('conteudo'); ?>

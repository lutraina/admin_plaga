<?php 
	$this->extend('Common/mensagem');
?>	            
            
<?php echo $this->start('conteudo'); ?>
	<div class="widget-body">
		<div class="well">			
			<table class="table table-striped table-hover">
				<thead>
					<tr>						
						<th>Enviado por:</th>						
						<th>E-mail</th>
						<th>Assunto</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $contato['Mensagem']['nome']?></td>					
						<td><?= $contato['Mensagem']['email']?></td>
						<td><?= $contato['Mensagem']['assunto']?></td>
					</tr>					
				</tbody>
			</table>								
		</div>
		<div class="well">
			<h4>Mensagem</h4>
			<?php echo  $contato['Mensagem']['texto']?>
		</div>
	</div>
<?php echo $this->end(); ?>
<?php 
	$this->extend('Common/mensagem');
?>	            
            
<?php echo $this->start('conteudo'); ?>
	<div class="">
		<div class="">			
			<table class="table">
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
	<h5>Voltar </h5>
<?php echo $this->end(); ?>
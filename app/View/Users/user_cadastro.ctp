<?php 
	$this->extend('Common/user');

?>	            
            
<?php echo $this->start('conteudo'); ?>

		<form action="/status/delete_all" method="post">

			<br class="cl" /><br class="cl" />
			<table class="table table-striped table-bordered" id="tab_list">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Usuário</th>										
						<th class="center" style="width:100px;">Perfil</th>
						<!-- <th class="center" style="width:70px;">Status</th>
						<th class="center" style="width:200px;">Ações</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($usuarios as $usuario): ?>
						<tr class="odd gradeX">
							<td><?= $usuario['User']['id']; ?></td>
							<td><?= $usuario['User']['name']; ?></td>												
							<td><?= $usuario['User']['username']; ?></td>
							<td class="center"><?= $usuario['User']['profile']; ?></td>
							<!--<td class="center">
								<?= $this->Status->_getConvert($usuario['User']['status'])?>
							</td>																												
							 <td class="center">
								<a href="/users/editar/<?= $usuario['User']['id']; ?>" class="btn btn-mini btn-primary" title="Editar">
									<i class="icon-pencil"></i>
								</a>&nbsp;							
								<a href="/status/excluir/User/<?= $usuario['User']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir esta noticia?&#039;);">
									<i class="icon-remove"></i>
								</a>&nbsp;								
								<?php if($usuario['User']['status'] == 0){ ?>
									<a href="/status/alterar/User/<?=$usuario['User']['id']; ?>/1/index" class="btn btn-mini btn-warning" title="Bloquear" onclick="return confirm(&#039;Deseja mesmo ativar este usuario?&#039;);">
										<i class="icon-remove"></i> Ativar
									</a>&nbsp;
								<?php }else{ ?>
									<a href="/status/alterar/User/<?=$usuario['User']['id']; ?>/0/index" class="btn btn-mini btn-success" title="Bloquear" onclick="return confirm(&#039;Deseja mesmo ativar este usuario?&#039;);">
										<i class="icon-ok"></i> Desativar
									</a>&nbsp;
								<?php } ?>								
																
							</td> -->
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</form>		

<?php echo $this->end(); ?>

<?php 
	$this->extend('Common/newsletters');

	$this->assign('titulo', $title_for_layout);
	$this->assign('titulo_guia', $title_for_layout);
	$this->assign('subtitulo', 'Lista de assinantes');	
?>	            
            
<?php echo $this->start('conteudo'); ?>
	
		<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
			<thead>
				<tr>
					<th style="width:150px; text-align: center;">Data</th>							
					<th>E-mail</th>					
				</tr>
			</thead>
			<tbody>
				<?php foreach($assinantes as $perfil): ?>
					<tr class="odd gradeX">
						<td style="width:150px; text-align: center;"><?= date('d/m/Y', strtotime($perfil['Newsletter']['created'])); ?></td>															
						<td><?= $perfil['Newsletter']['email']; ?></td>																																									
					</tr>
				<?php endforeach; ?>		
			</tbody>	
		</table>
	
<?php echo $this->end(); ?> 


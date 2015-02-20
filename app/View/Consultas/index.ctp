<?php $this->extend('Common/consulta');?>
<?php echo $this->start('conteudo'); ?>

<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
    <thead>
        <tr>
        	<th style="width:70px; text-align: center">ID</th>
        	<th>Nome</th>
            <th>Email</th>
            <th>Data do contato</th>
            <th style="width:120px;">Ação</th>
        </tr>
    </thead>
    <?php foreach($consultas as $key => $consulta): ?>
	    <tbody>
	    	<tr>
	    		<td style="width:70px; text-align: center"><?= $consulta['Consulta']['id']; ?></td>
	    		<td><a href="/consultas/view/<?= $consulta['Consulta']['id']; ?>"><?= $consulta['Consulta']['nome']; ?></a></td>	
	    		<td><a href="/consultas/view/<?= $consulta['Consulta']['id']; ?>"><?= $consulta['Consulta']['email']; ?></a></td>	     
	    		<td><a href="/consultas/view/<?= $consulta['Consulta']['id']; ?>"><?= $consulta['Consulta']['created']; ?></a></td>	                 	            	            		           
				<td class="center acao">
					<div class="btn-group">
												<a class="btn btn-mini btn-yellow"  href="/consultas/view/<?= $consulta['Consulta']['id']; ?>">
							<i class="icon-eye-open bigger-125"></i>
						</a>
						<a href="/status/excluir/Consulta/<?= $consulta['Consulta']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Deseja mesmo excluir esta consulta?&#039;);"> <i class="icon-trash bigger-125"></i> </a>

	

					</div>
							
								
				</td>
			</tr> 
			
    </tbody>
    <?php endforeach; ?>
</table>




<?php echo $this->end('conteudo'); ?>

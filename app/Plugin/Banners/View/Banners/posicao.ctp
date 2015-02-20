<?php $this->extend('/Common/banners'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Local_banner', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
					<p>
		                <label>Categoria</label>
		                	<span class="field field-tipo">
		            		<?= $this->Form->input('categories',
		            			array('class'=>'type','options'=>array(
		            				'geral'=>'Geral',
		            				'topo'=>'Topo',
		            				'home'=>'Home page',
		            				'diversao'=>'Diversão',
		            				'gastronomia'=>'Gastronomia',
		            				'servicos'=>'Serviços',
		            				'moda-e-estilo'=>'Moda',
		            				'bem-estar'=>'Bem Estar',
		            				'educacao'=>'Educação',
		            				'pet-e-agro'=>'Pet',
		            				'autos'=>'Autos',
		            				'imoveis'=>'Imoveis',
		            				'casa'=>'Casa',
		            				'vantagens'=>'Vantagens',
		            				'noticias'=>'Notícias',
		            				'agenda'=>'Agenda',
		            				'galerias'=>'Galerias',
		            				'resultados'=>'Resultados',
									)))?>                
		                </span>
		            </p>	
					
					<p>
						<label>Nome</label>
						 <span class="field">
							<?= $this->Form->input('nome',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>				
							
					<p>
						<label>Referência da posição</label>
						 <span class="field">
							<?= $this->Form->input('referencia',array('class'=>'span2','type'=>'text'))?>	
						</span>
					</p>				
								
					<hr />
					<br /> 																									
			        <p class="stdformbutton">
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/news" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
		<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
		    <thead>
		        <tr>
	
		        	<th>Nome</th>
		            <th>Categoria</th>
		            <th>Referencia da posição</th>
		            <th style="width:50px;">Ação</th>
		        </tr>
		    </thead>
		    <tbody>
			    <?php foreach($posicaos as $posicao): ?>
					
				    	<tr>
				    		<td><?= $posicao['Local_banner']['nome']; ?></td>	
				    		<td><?= $posicao['Local_banner']['categories']; ?></td>	   
				    		<td><?= $posicao['Local_banner']['referencia']; ?></td>	     	                 	            	            		           
							<td class="center acao">
					
									
									<a href="/banners/delete_posicao/<?= $posicao['Local_banner']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta referência? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
									
							
							</td>
						</tr> 
				    
			    <?php endforeach; ?>
		    </tbody>
		</table>	
	
<?php echo $this->end(); ?>

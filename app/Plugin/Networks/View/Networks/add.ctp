<?php $this->extend('/Common/networks'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Network', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
		
					<p>
						<label>Link</label>
						 <span class="field">
							<?= $this->Form->input('link',array('class'=>'span8'))?>
						</span>
					</p>

	
						
					<p>
						<label>Imagem <b>[tamanho recomendado 635x360]</b></label>
						 <span class="field">
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
						
				    <p>
		                <label>Abrir em nova aba</label>
		                <span class="field">
		            		<?= $this->Form->input('target',array('options'=>array('_blank'=>'Sim','_self'=>'Não'),'data-placeholder'=>'Escolha uma classe'))?>                
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
<?php echo $this->end(); ?>

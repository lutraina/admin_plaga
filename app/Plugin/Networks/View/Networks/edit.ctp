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
						<?php if(!empty($this->data['Network']['image'])): ?>
							<img src="<?= $_URL_FILE.'networks/fotos/'.$this->data['Network']['image']; ?>"/>	
						<?php endif;?>
						<label>Imagem <b></b> (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Network']['image']))?>
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
			        	<?= $this->Form->input('id',array('type'=>'hidden'))?>
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/news" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

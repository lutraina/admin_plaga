<?php $this->extend('/Common/slides'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Slide', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
					<p>
						<label>Título</label>
						 <span class="field">
							<?= $this->Form->input('title',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
						<p>
						<label>SubTítulo</label>
						 <span class="field">
							<?= $this->Form->input('subtitle',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>				
		
					<p>
						<label>Link</label>
						 <span class="field">
							<?= $this->Form->input('link',array('class'=>'span8'))?>
						</span>
					</p>

					<p>
						<label>Ordenação</label>
						 <span class="field">
							<?= $this->Form->input('ordem',array('class'=>'span8','type'=>'text', 'placeholder'=>'Ex. 1'))?>	
						</span>
					</p>	
							
						
					<p>
						<?php if(!empty($this->data['Slide']['image'])): ?>
							<img src="<?= $_URL_FILE.'slides/fotos/318x177-'.$this->data['Slide']['image']; ?>"/>	
						<?php endif;?>
						<label>Imagem <b>[tamanho recomendado 635x250]</b> (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Slide']['image']))?>
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
						
				    <p>
		                <label>Abrir em nova aba</label>
		                <span class="field">
		            		<?= $this->Form->input('target',array('options'=>array('_blank'=>'Sim','_self'=>'Não'),'data-placeholder'=>'Escolha uma classe'))?>                
		                </span>
		            </p>	
				    <p>
		                <label></label>
		                <span class="field">
		            		Status ativo? <?= $this->Form->input('status',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>                
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

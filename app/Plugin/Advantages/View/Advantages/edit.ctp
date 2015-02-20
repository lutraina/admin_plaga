<?php $this->extend('/Common/advantages'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Advantage', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				         'legend' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
					<p>
						<label>Titulo</label>
						 <span class="field">
							<?= $this->Form->input('title',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
					
		
					<p>
						<label>Preço </label>
						 <span class="field">
							 de R$ <?= $this->Form->input('price',array('class'=>'span2','placeholder'=>'Ex: 23,90'))?>
						</span>
						<span class="field">
							 por R$ <?= $this->Form->input('price_to',array('class'=>'span2','placeholder'=>'Ex: 23,90'))?>
						</span>
					</p>

					<p>
						<?php if(!empty($this->data['Advantage']['image'])): ?>
							<img src="<?= $_URL_FILE.'advantages/fotos/226x263-'.$this->data['Advantage']['image']; ?>"/>	
						<?php endif;?>
						<label>Imagem <b>[tamanho recomendado 410x480]</b>(<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Advantage']['image']))?>
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
					
										
					<p>
						<label>Data de início (início da validade do cupom)</label>
						 <span class="field">
							<?= $this->Form->input('date_start',array('class'=>'span2 datepicker','type'=>'text'))?>	
						</span>
					</p>	
					<p>
						<label>Data de validade (Prazo final para a validade do cupom)</label>
						 <span class="field">
							<?= $this->Form->input('date_end',array('class'=>'span2 datepicker','type'=>'text'))?>	
						</span>
					</p>					
					<p>
						<label>Total de cupons válidos <small>(Nº de cupons que podem ser retirados pelo site)</small></label>
						 <span class="field">
							<?= $this->Form->input('max',array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 100'))?>	
						</span>
					</p>								
					<p>
						<label>Descrição (regulamento, validade etc)</label>
						 <span class="field">
							<?= $this->Form->input('regulation',array('class'=>'span8 editor','type'=>'textarea'))?>	
						</span>
					</p>		
				
					<p>
						<label>URL </label>
						 <span class="field">
							modulo/vantagens/<?= $this->Form->input('url',array('class'=>'span6'))?>
							
						</span>
					</p>	
				    <p>
		                <label></label>
		                <span class="field">
		            		Status ativo? <?= $this->Form->input('status',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>                
		                </span>
		            </p>	
		            <p>
		               <span class="field">
		            		 Enviar newsletter? <?= $this->Form->input('newsletter',array('class'=>'span1','options'=>array('nao'=>'Não','sim'=>'Sim')))?>                
		                </span>
		            </p>																							
			        <p class="stdformbutton">
			        	<?= $this->Form->input('id',array('type'=>'hidden'))?>
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/advantages" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

<?php $this->extend('/Common/news'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('News', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
				    <p>
		                <label>Categorias</label>
		                <span class="field">
		            		<?= $this->Form->input('categories_id',array('options'=>$categories,'data-placeholder'=>'Escolha uma classe'))?>                
		                </span>
		            </p>
		
					<p>
						<label>Título</label>
						 <span class="field">
							<?= $this->Form->input('title',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
					
		
					<p>
						<label>Subtitulo <small>(Breve descrição)</small></label>
						 <span class="field">
							<?= $this->Form->input('subtitle',array('class'=>'span8 subtitulo','type'=>'text'))?>
						</span>
					</p>

	
						
					<p>
						<?php if(!empty($this->data['News']['image'])): ?>
							<img src="<?= $_URL_FILE.'news/fotos/318x177-'.$this->data['News']['image']; ?>"/>	
						<?php endif;?>
						<label>Imagem <b>[tamanho recomendado 635x250]</b> (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['News']['image']))?>
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
						
					<p>
						<label>Texto</label>
						 <span class="field">
							<?= $this->Form->input('text',array('class'=>'span8 editor','type'=>'textarea'))?>	
						</span>
					</p>		
					<p>
						<label>Palavras chaves </label>
						 <span class="field">
							<?= $this->Form->input('palavra_chave',array('class'=>'span8','placeholder'=>'Ex: Mundo, Política, Brasil'))?>
							
						</span>
					</p>			
					<p>
						<label>Autor <small>(créditos do post)</small></label>
						 <span class="field">
							<?= $this->Form->input('author',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
					<div class="row-fluid">
						
							<legend>Destaques >> <small>Configue aqui o tipo de destaque e este estabelecimento deve ter</small></legend>
							Aparecer na home? <?= $this->Form->input('home',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
							Destaque interno? <?= $this->Form->input('featured',array('class'=>'span3','options'=>array(1=>'Destaque principal',2=>'Destaque secundário',0=>'Nenhum')))?>
							Aparecer no menu? <?= $this->Form->input('menu',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
							
					</div>		
		            <p>
		               <span class="field">
		            		  Enviar newsletter? <?= $this->Form->input('newsletter',array('class'=>'span1','options'=>array('nao'=>'Não','sim'=>'Sim')))?>              
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

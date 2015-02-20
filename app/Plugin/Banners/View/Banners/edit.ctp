<?php $this->extend('/Common/banners'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Banner', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
					<script>
						$(document).ready(function(){
							    	
							$('.type').change(function(){
								var valor = $(this).val();
								$.ajax({
							        url: '/banners/getCategory/'+valor,
							    	beforeSend:function(){
							    		$('.select-categoria').html('Agurade...');
							    	},
							        success: function(data) {
										$('.select-categoria').html(data);
							        },
							        error: function(){
							           
							           }
								})
							})
						});
					</script>				
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
		            				'moda-e-estilo'=>'Moda & Estilo',
		            				'bem-estar'=>'Bem Estar',
		            				'educacao'=>'Educação',
		            				'pet-e-agro'=>'Pet & Agro',
		            				'autos'=>'Autos',
		            				'imoveis'=>'Imoveis',
		            				'vantagens'=>'Vantagens',
		            				'noticias'=>'Notícias',
		            				'agenda'=>'Agenda',
		            				'galerias'=>'Galerias',
		            				'resultados'=>'Resultados',
									)))?>                
		                </span>
		            </p>	
				    <p>
		                <label>Posição / Referência</label>
		                <span class="field select-categoria">
		            		<?= $this->Form->input('local', array('type'=>'text', 'style' => 'border:none;', 'readonly' => 'readonly', 'value' => $this->data['Banner']['local']))?>                
		                </span>
		            </p>			
					<p>
						<?php if(!empty($this->data['Banner']['image'])): ?>
							<img src="<?= $_URL_FILE.'banners/fotos/'.$this->data['Banner']['image']; ?>" class='span2'/>	<br class="cl" />
						<?php endif;?>
						<label>Imagem <b>[tamanho recomendado na referência]</b> (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Banner']['image']))?>
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>						            								
					<p>
						<label>Link</label>
						 <span class="field">
							<?= $this->Form->input('link',array('class'=>'span8'))?>
						</span>
					</p>

						<p>
			                <label>Nome</label>
			                <span class="field">
			            		<?= $this->Form->input('nome', array('type'=>'text', 'value'=>$this->data['Banner']['nome'], 'class'=>'span3'))?>
			                </span>
			            </p>					

						<p>
			                <label>Texto da passagem do mouse</label>
			                <span class="field">
			            		<?= $this->Form->input('text_hover', array('type'=>'text', 'value'=>$this->data['Banner']['text_hover'], 'class'=>'span3'))?>
			                </span>
			            </p>
			            <p>
			                <label>Data e hora de inicio</label>
			                <span class="field">
			            		<?= $this->Form->input('data_start',array('type'=>'DATE','class'=>'span3'))?>
			            		<?= $this->Form->input('hora_start',array('type'=>'TIME','class'=>'span2'))?>                
			                </span>
			            </p>					
						<p>
			                <label>Data e hora do fim</label>
			                <span class="field">
			            		<?= $this->Form->input('data_end',array('type'=>'DATE','class'=>'span3'))?>
			            		<?= $this->Form->input('hora_end',array('type'=>'Time','class'=>'span2'))?>             
			                </span>
			            </p>						
				    <p>
		                
		                <span class="field">
		            		Abrir em nova aba? <?= $this->Form->input('target',array('class'=>'span1','options'=>array('_blank'=>'Sim','_self'=>'Não'),'data-placeholder'=>'Escolha uma classe'))?>                
		                </span>
		            </p>
				    <p>
		                
		                <span class="field">
		            		Status ativo? <?= $this->Form->input('status',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>                
		                </span>
		            </p>		            
					
					<hr />
					<br /> 																									
			        <p class="stdformbutton">
			        	<?= $this->Form->input('id',array('type'=>'hidden'))?>
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/banners" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

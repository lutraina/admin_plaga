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
							var categorias = 'add_page';
						//	$('.select-categoria').load('/banners/getCategory/'+$('.categories').val());    	
							$('.select-categoria').load('/banners/getCategory/' + categorias);    	
							$('.type_categories').change(function(){
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
						
						
						
						
						/*
						 * Tipo de banner, google banner ou banner imagem
						 * */
						$(document).ready(function(){
							$('.tipo_banner').change(function(){
								/*$('.google_banner').toggle('fast', function(){
									$('.banner_imagem').toggle('fast');
								});
								*/
								$('.google_banner').show('');
								$('.banner_imagem').toggle('fast');
							})
						});
					</script>				
					<p>
		                <label>Categoria</label>
		                	<span class="field field-tipo">
		            		<?= $this->Form->input('categories',
		            			array('class'=>'type_categories','options'=>array(
		            				''=>'Escolha uma categoria',
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
		                <label>Posição</label>
		                <span class="field select-categoria">
		            		<?= $this->Form->input('local',array('options'=>array('Selecione um tipo'),'data-placeholder'=>'Escolha uma categoria'))?>                
		                </span>
		            </p>			
					<p>
		                <label>Tipo</label>
		                <span class="field">
		            		<?= $this->Form->input('tipo',array('class'=>'tipo_banner','options'=>array('image'=>'Banner Imagem','google'=>'Google Banner')))?>                
		                </span>
		            </p>
					
					<div class="google_banner"  style="display:none">
						<p>
			                <label>Código(script) do gloogle</label>
			                <span class="field">
			            		<?= $this->Form->input('cod',array('type'=>'textarea','class'=>'span8'))?>                
			                </span>
			            </p>					
						
					</div>
					
						<p>
			                <label>Nome</label>
			                <span class="field">
			            		<?= $this->Form->input('nome', array('type'=>'text', 'class'=>'span3'))?>
			                </span>
			            </p>					

						<p>
			                <label>Texto da passagem do mouse</label>
			                <span class="field">
			            		<?= $this->Form->input('text_hover', array('type'=>'text', 'class'=>'span3'))?>
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
									
					<div class="banner_imagem">
						<p>
							<label>Imagem <b>A imagem não será redimencionada, portanto subir no formato e tamanho certo.</b></label>
							 <span class="field">
								<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
							</span>
						</p>		            								
						
						<p>
							<label>Link</label>
							 <span class="field">
								<?= $this->Form->input('link',array('class'=>'span8'))?>
							</span>
						</p>
					</div>
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
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/news" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

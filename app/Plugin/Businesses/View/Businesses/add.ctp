<?php var_dump($regioes); $this->extend('/Common/businesses'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Business', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				        'legend' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
				
					<script>
						$(document).ready(function(){
							
							
							$('.select-categoria').load('/businesses/getCategory/'+$('.type').val());    	
							
							$('.type').change(function(){
								var valor = $(this).val();
						
								$.ajax({
									
							        url: '/businesses/getCategory/'+valor,
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
						})
						
					</script>				
				    <p>
		                <label>Tipo</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('type',
		            			array('class'=>'type','options'=>array(
		            				'diversao'=>'Diversão',
		            				'gastronomia'=>'Gastronomia',
		            				'servicos'=>'Serviços',
		            				'moda-e-estilo'=>'Moda',
		            				'bem-estar'=>'Bem Estar',
		            				'educacao'=>'Educação',
		            				'pet-e-agro'=>'Pet',
		            				'casa'=>'Casa',
		            				'autos'=>'Autos',
		            				'imoveis'=>'Imoveis',
									)))?>                
		                </span>
		            </p>				
				    <p>
		                <label>Categorias</label>
		                <span class="field select-categoria">
		            		<?= $this->Form->input('categories_id',array('options'=>array('Selecione um tipo'),'data-placeholder'=>'Escolha uma classe'))?>                
		                </span>
		            </p>
		
					<p>
						<label>Nome do estabelecimento</label>
						 <span class="field">
							<?= $this->Form->input('name',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
					
					<p>
		                <label>Site </label>
		                <span class="field">
		            		<?= $this->Form->input('site',array('class'=>'span8','placeholder'=>'Ex: http://site.com.br'))?>                
		                </span>
		            </p>	
					<p>
		                <label>Email </label>
		                <span class="field">
		            		<?= $this->Form->input('email',array('class'=>'span8','placeholder'=>'Ex: nocambui@nocambui.com.br'))?>                
		                </span>
		            </p>		            	
					<p>
						<label>Endereço </label>
						 <span class="field">
							<?= $this->Form->input('address',array('placeholder'=>'Ex: Av. Brasil, 1453, Rio de Janeiro, RJ', 'class'=>'span8'))?>
						</span>
					</p>
					<p>
						<label>Região </label>
						 <span class="field">
							<?=  $this->Form->input('region',array('options'=>$regioes, 'class'=>'span4','type'=>'text'))?>	
						</span>
					</p>
					<p>
						<label>Telefone(s) </label>
						 <span class="field">
							<?= $this->Form->input('phone',array('class'=>'span6','type'=>'text'))?>	
						</span>
					</p>					
					
					<p>
						<label>Horário de funcionamento </label>
						 <span class="field">
							<?= $this->Form->input('business_hours',array('class'=>'span8','type'=>'text','placeholder'=>'Ex: De segunda a sexta das 08:00 às 18:00 sábados e feriados das 08:00 às 12:00'))?>	
						</span>
					</p>	
					
					<p>
						<label>Aberto até </label>
						 <span class="field">
							<?= $this->Form->input('open_until',array('class'=>'span4','type'=>'text','placeholder'=>'Ex: 23, ou até o ultimo cliente'))?>	
						</span>
					</p>						
					<p>
						<label>Preço Médio (<small>Média de preço por pessoa no produto principal</small>)</label>
						 <span class="field">
							<?= $this->Form->input('average_price',array('class'=>'span6','type'=>'text','placeholder'=>'Ex: Acima de R$80 '))?>	
						</span>
					</p>			
					<p>
						<label>Possui Estacionamento? </label>
						 <span class="field">
							<?= $this->Form->input('parking',array('class'=>'span6','placeholder'=>'Ex: sim, 4 estacionamentos'))?>
							
						</span>
					</p>	
					<p>
						<label>Manobrista? </label>
						 <span class="field">
							<?= $this->Form->input('valet',array('options'=>array('Possui'=>'Sim ','nao'=>' Não')))?>
							
						</span>
					</p>	
				    <p>
		                <label>Especialidade/Estilo </label>
		                <span class="field">
		            		<?= $this->Form->input('specialty',array('class'=>'span8','placeholder'=>'Ex: Pizzaria, Oriental etc..'))?>                
		                </span>
		            </p>	
		
					<p>
						<label>Diferencial</label>
						 <span class="field">
							<?= $this->Form->input('differential',array('class'=>'span8','type'=>'text','placeholder'=>'Ex: Área para fumantes'))?>	
						</span>
					</p>
							            																		
					<p>
						<label>Imagem <b>[tamanho recomendado 635x390]</b> </label>
						 <span class="field">
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
					<p>
						<label>Video(youtube)</label>
						 <span class="field">
							<?= $this->Form->input('video',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>							
					<p>
						<label>Texto</label>
						 <span class="field">
							<?= $this->Form->input('text',array('class'=>'span8 editor','type'=>'textarea'))?>	
						</span>
					</p>		
				
					<p>
						<label>URL (Acentos não são aceitos)</label>
						 <span class="field">
							http://nocambui.com.br/estabelecimentos/ver/ <?= $this->Form->input('url', array('class' => 'span6'))?>
						</span>
					</p>	
				
					<p>
						<label>Palavras chaves </label>
						 <span class="field">
							<?= $this->Form->input('palavra_chave',array('class'=>'span8','placeholder'=>'Ex: Pizzaria, Pizza Grande, Sanduiches'))?>
							
						</span>
					</p>					
					<p>
						<label>Logo  marca</label>
						 <span class="field">
							<?= $this->Form->input('logo',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>									
					<p>
						 <span class="field">
							Anuncio gratuito? <?= $this->Form->input('gratuito',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
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
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/businesses" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

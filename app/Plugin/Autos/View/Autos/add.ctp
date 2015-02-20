<?php $this->extend('/Common/autos'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			
			<script>
						$(document).ready(function(){

							$('.businesses_id').change(function(){
								var valor = $(this).val();
								
									$.ajax({
								        url: '/schedules/getBusinesses/'+valor,
								    	beforeSend:function(){
								    		$('.retorno').html('Agurade...');
								    	},
								        success: function(data) {
											$('.retorno').html(data);
								        },
								        error: function(){
								           
								           }
									})
								
								
							})
						});
					</script>
					
					
			<div class="widget-main">
				<?php echo $this->Form->create('Auto', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				         'legend' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>			
					<div class="row-fluid">
							<legend>Proprietário >> <small>Dados do proprietário</small></legend>
					</div>						
					<p>
		                <label>Nome do proprietário</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('nome',array('class'=>'span8'))?>                
		                </span>
		            </p>
					<div class="row-fluid">
							<legend>Vendedor >> <small>Dados do vendedor</small></legend>
					</div>
					<p>
		                <label>Vincular à algum estabelecimento</label>
		                <span class="field estabelecimentos">
		            		<?= $this->Form->input('businesses_id',array('options'=>$businesses,'class'=>'businesses_id'))?>                
		                </span>
		            </p>
		             <div class="retorno">
						<p>
							<label>Local</label>
							 <span class="field">
								<?= $this->Form->input('local',array('class'=>'span8','type'=>'text'))?>	
							</span>
						</p>	
						</p>	
						
							
						<p>
							<label>Endereço</label>
							 <span class="field">
								<?= $this->Form->input('address',array('class'=>'span8','type'=>'text'))?>	
							</span>
						</p>
						<p>
		                <label>Telefone(s)</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('telefone',array('class'=>'span8'))?>                
		                </span>
		            </p>
					</div>						
					<!--<p>
		                <label>Nome do vendedor</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('vendedor',array('class'=>'span8'))?>                
		                </span>
		            </p>		 
					<p>
		                <label>Telefone(s)</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('telefone',array('class'=>'span8'))?>                
		                </span>
		            </p>		
					<p>
		                <label>Email</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('email',array('class'=>'span8'))?>                
		                </span>
		            </p>-->	
					<div class="row-fluid">
							<legend>Automóvel >> <small>Dados do automóvel</small></legend>
					</div>
				    <p>
		                <label>Tipo</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('tipo',
		            			array('class'=>'tipo','options'=>array(
		            				'venda'=>'Venda',
		            				'aluguel'=>'Aluguel',
									)))?>                
		                </span>
		            </p>	
					<p>
		                <label>Ano de fabricação</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('ano_fabricacao',array('options'=>$anos))?>                
		                </span>
		            </p>		            			
				    <p>
		                <label>Ano do modelo</label>
		                <span class="field">
		            		<?= $this->Form->input('ano_modelo',array('options'=>$anos))?>                
		                </span>
		            </p>
		
					<p>
						<label>Marca</label>
						 <span class="field">
							<?= $this->Form->input('marca',array('class'=>'span4','type'=>'text','placeholder'=>'Ex: Chevrolet'))?>	
						</span>
					</p>
					
		
					<p>
						<label>Modelo </label>
						 <span class="field">
							<?= $this->Form->input('modelo',array('class'=>'span4','placeholder'=>'Ex: S10'))?>
						</span>
					</p>
					<p>
						<label>Versão </label>
						 <span class="field">
							<?= $this->Form->input('versao',array('class'=>'span6','type'=>'text','placeholder'=>'Ex: 4x4 Turbinada DLuxe'))?>	
						</span>
					</p>
					<p>
						<label>Cor </label>
						 <span class="field">
							<?= $this->Form->input('cor',array('class'=>'span6','type'=>'text','placeholder'=>'Ex: Branco'))?>	
						</span>
					</p>					
					<p>
						<label>Placa (Exibiremos apenas os dois últimos números)</label>
						 <span class="field">
							<?= $this->Form->input('placa',array('class'=>'span3','type'=>'text','placeholder'=>'Ex: HJM-2387'))?>	
						</span>
					</p>					
					<p>
						<label>Preço </label>
						 <span class="field">
							<?= $this->Form->input('preco',array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 45.000,00 '))?>	
						</span>
					</p>	
					<p>
						<label>Quilometragem </label>
						 <span class="field">
							<?= $this->Form->input('quilometragem',array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 135000 '))?>	
						</span>
					</p>					
					<p>
						<label>Cambio </label>
						 <span class="field">
							<?= $this->Form->input('cambio',array('class'=>'span1','type'=>'text','placeholder'=>'Ex:5'))?>	
						</span>
					</p>			
					<p>
						<label>Portas </label>
						 <span class="field">
							<?= $this->Form->input('portas',array('class'=>'span1','type'=>'text','placeholder'=>'Ex: 4 '))?>	
						</span>
					</p>
					<p>
						<label>Combustivel </label>
						 <span class="field">
							<?= $this->Form->input('combustivel', array('class'=>'span6','type'=>'text','placeholder'=>'Ex: Acima de R$80 '))?>	
						</span>
					</p>	
					<p>
						<label>Renavam </label>
						 <span class="field">
							<?= $this->Form->input('renavam',array('class'=>'span6','type'=>'text','placeholder'=>'Ex: Acima de R$80 '))?>	
						</span>
					</p>	     																		

					<p>
						<label>Mais detalhes(opcional)</label>
						 <span class="field">
							<?= $this->Form->input('opcional',array('class'=>'span8 editor','type'=>'textarea','placeholder'=>'Ex: 4 Air Bag, úinco dono, pintura original etc.. '))?>	
						</span>
					</p>		

					<div class="row-fluid">
							<legend>Destaques >> <small>Configue aqui o tipo de destaque</small></legend>
							Status ativo? <?= $this->Form->input('status',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
							Super oferta? <?= $this->Form->input('home',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
					</div>		
					<hr />
					<br /> 															
			        <p class="stdformbutton">
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/imoveis" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

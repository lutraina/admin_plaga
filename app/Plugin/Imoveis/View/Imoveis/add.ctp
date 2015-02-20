<?php $this->extend('/Common/imoveis'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Imovei', array(
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
		                <label>Nome do vendedor</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('vendedor',array('class'=>'span8'))?>                
		                </span>
		            </p>		 
					<p>
		                <label>Telefone(s)</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('telefone',array('class'=>'span2'))?>                
		                </span>
		            </p>		
					<p>
		                <label>Email</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('email',array('class'=>'span4'))?>                
		                </span>
		            </p>	
					<div class="row-fluid">
							<legend>Automóvel >> <small>Dados do automóvel</small></legend>
					</div>
				    <p>
		                <label>Situacão</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('situacao',
		            			array('class'=>'tipo','options'=>array(
		            				'venda'=>'Venda',
		            				'aluguel'=>'Aluguel',
									)))?>                
		                </span>
		            </p>	
					<p>
		                <label>Tipo</label>
		                <span class="field field-tipo">
		            		<?= $this->Form->input('tipo',array('class'=>'span4','type'=>'text','placeholder'=>'Ex: Chácara, Casa, Apartamento etc...'))?>                
		                </span>
		            </p>		            			

					<p>
						<label>Endereço</label>
						 <span class="field">
							<?= $this->Form->input('endereco',array('class'=>'span4','type'=>'text','placeholder'=>'Indique a localização do imóvel'))?>	
						</span>
					</p>

					<p>
						<label>Região</label>
						 <span class="field">
							<?= $this->Form->input('regiao',array('class'=>'span4','type'=>'text','placeholder'=>'Ex: Sul'))?>	
						</span>
					</p>				
					<p>
						<label>Preço </label>
						 <span class="field">
							<?= $this->Form->input('preco',array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 45.000,00 '))?>	
						</span>
					</p>	
					<p>
						<label>Quartos </label>
						 <span class="field">
							<?= $this->Form->input('quartos',array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 4 '))?>	
						</span>
					</p>					

					<p>
						<label>Mais detalhes(opcional)</label>
						 <span class="field">
							<?= $this->Form->input('opcional',array('class'=>'span8 editor','type'=>'textarea','placeholder'=>'Ex: úinco dono, pintura original etc.. '))?>	
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

<?php $this->extend('/Common/businesses'); ?>
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
		                <span class="field">
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
		            		<?= $this->Form->input('categories_id',array('type'=>'hidden'))?>                
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
		            		<?= $this->Form->input('email', array('class'=>'span8','placeholder'=>'Ex: nocambui@nocambui.com.br'))?>                
		                </span>
		            </p>					
		
					<p>
						<label>Endereço </label>
						 <span class="field">
							<?= $this->Form->input('address', array('class'=>'span8'))?>
						</span>
					</p>
					<p>
						<label>Região </label>
						 <span class="field">
							<?= $this->Form->input('region', array('class'=>'span4','type'=>'text'))?>	
						</span>
					</p>
					<p>
						<label>Telefone(s) </label>
						 <span class="field">
							<?= $this->Form->input('phone', array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>					
					
					<p>
						<label>Horário de funcionamento </label>
						 <span class="field">
							<?= $this->Form->input('business_hours', array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>
					
					<p>
						<label>Abas :</label>
						
						 <div class="input_fields_wrap">
						    <button class="add_abas_dialog">Adicionar nova aba</button>
						    <div style="height:30px;"></div>
							<!-- Accordion das abas-->
							<div id="">
							<ul id="sortable" class="">
								<?php  
								foreach($businesses['AbasBusiness'] as $Aba){ 
									//debug($Aba['ordem']);?>

										<li class="default" id="<?php echo $Aba['id']; ?>" style="list-style:none; border:1px solid #ccc; background-color:#eee; height:50px; padding:0px; margin-bottom:5px;">
												<h3><?php echo $Aba['titulo']; ?><div style="float:right; font-size:14px; margin-top:-5px; height:40px;" class="edit_abas_dialog ui-state-default" id="<?php echo $Aba['id']; ?>">Editar aba</div></h3>
												
											
									    	<input style="float:center; display:none;" class="positionInput" id="<?php echo $Aba['id']; ?>" value="<?php echo $Aba['ordem']; ?>">
									    </li>
									    
									<!--<div>
										<p>
											<?php echo $Aba['conteudo']; 
											if(isset($Aba['imagem_principal_conteudo']) && !empty($Aba['imagem_principal_conteudo'])){?>
												<img src="<?php echo $Aba['imagem_principal_conteudo']; ?>"/>
											<?php } ?>
										</p>
									</div>-->
								<?php } ?>
							</ul>
							</div>
							<br>
   							<h3><span id="sortable-9"></span></h3>

						   <!-- <div>
						    	<input type="text" name="aba_title[]"/>
						    	<input type="text" name="aba_contenu[]"/>
						     </div>
						    -->
						</div>
						 
					</p>
					
						
					<p>
						<label>Aberto até </label>
						 <span class="field">
							<?= $this->Form->input('open_until', array('class'=>'span2','type'=>'text','placeholder'=>'Ex: 23, ou até o ultimo cliente'))?>	
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
							<?= $this->Form->input('differential',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>					
					<p>
						<?php if(!empty($this->data['Business']['image'])): ?>
							<img src="<?= $_URL_FILE.'businesses/fotos/318x177-'.$this->data['Business']['image']; ?>"/>	
						<?php endif;?>
						<label>Imagem <b>[tamanho recomendado 635x390]</b> (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('image_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Business']['image']))?>
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
							http://nocambui.com.br/estabelecimentos/ver/ <?= $this->Form->input('url',array('class' => 'span6'))?>
						</span>
					</p>	
					<p>
						<label>Palavras chaves </label>
						 <span class="field">
							<?= $this->Form->input('palavra_chave', array('class'=>'span8','placeholder'=>'Ex: Pizzaria, Pizza Grande, Sanduiches'))?>
							
						</span>
					</p>						
					<p>
						<?php if(!empty($this->data['Business']['logo'])): ?>
							<img src="<?= $_URL_FILE.'businesses/fotos/'.$this->data['Business']['logo']; ?>" style="max-width: 150px;" />	
						<?php endif;?>
						<label>Logo  (<small>Deixe em branco para não alterar a imagem</small>)</label>
						<span class="field">
						 	<?= $this->Form->input('logo_hidden',array('class'=>'span4','type'=>'hidden','value'=>$this->data['Business']['logo']))?>
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
			        	<?= $this->Form->input('id', array('type'=>'hidden'))?>
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/businesses" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
	
	  
 <div id="dialog" title="Adicionar aba" style="display:none;">
	<p>
		<?php 
		
		//debug($aba_conteudo);
		echo $this->Form->create('AbasBusiness', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				         'legend' => false
				    	),
				   	'enctype'=>'multipart/form-data'
					));
		
		if(isset($aba_conteudo) && !empty($aba_conteudo)){
			//echo 'tem aba conteudo';
			 echo $this->Form->input('id', array('class'=>'id_aba', 'type'=>'hidden', 'value' => $aba_conteudo['AbasBusiness']['id']));
			 echo $this->Form->input('titulo', array('class'=>'', 'type'=>'text', 'value' => $aba_conteudo['AbasBusiness']['titulo'], 'style' => 'width:750px;'));
			 echo $this->Form->input('conteudo', array('class'=>'', 'type'=>'textarea', 'value' => $aba_conteudo['AbasBusiness']['conteudo'], 'style' => 'width:750x; height:300px;'));
		} else {
			//echo 'nao tem aba conteudo';
			//debug($this->data['Business']['id']);
			echo $this->Form->input('business_id', array('class'=>'id_aba', 'type'=>'hidden', 'value' => $this->data['Business']['id']));
			echo $this->Form->input('titulo', array('class'=>'', 'type'=>'text', 'style' => 'width:750px;'));
			echo $this->Form->input('conteudo', array('class'=>'', 'type'=>'textarea', 'style' => 'width:750px; height:300px;'));
		} ?>
	</p>
	<?php echo $this->end(); ?>
</div>

 
    
    

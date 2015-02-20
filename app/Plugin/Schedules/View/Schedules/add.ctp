<?php echo $this->Html->script ( 'schedules', array ('inline' => false )); ?>
<?php $this->extend('/Common/schedule'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Schedule', array(
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
						<label>Palavras chaves </label>
						 <span class="field">
							<?= $this->Form->input('palavra_chave',array('class'=>'span8','placeholder'=>'Ex: Show, Filme, Teatro'))?>
							
						</span>
					</p>					
					<script>
						$(document).ready(function(){
							$('.add-data').click(function(){
								
								if($('.date_of_event').val()>' '){
									var value = $('.date_of_event').val()+';'+$('.date_of_event1').val();
									$('.date_of_event').val(value)
								}else{
									var value = $('.date_of_event1').val();
									$('.date_of_event').val(value)
								}
								
								$('.data-add').append('# '+$('.date_of_event1').val()+'<br />');
								
								 $('.date_of_event1').val(' ')
							})
						});
					</script>
					<p>
						<label>Quando será o evento</label>
						 <span class="field">
							Data: <?= $this->Form->input('date_of_event1',array('class'=>'span2 datepicker date_of_event1','type'=>'text'))?>	<span class="add-data">Adicionar data</span>
							<div class="data-add">
								
							</div>
							
						</span>
					</p>
					<p>
						<label>Horário</label>
 						<span class="field"> <?= $this->Form->input('schedule',array('class'=>'span2 mask-hora','type'=>'text'))?></span>
					</p>					
					<?= $this->Form->input('date_of_event',array('class'=>'span2 datepicker date_of_event','type'=>'hidden','value'=>' '))?>
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
					</div>						
					<p>
						<label>Url <small>(Deixe em branco para preenchimento automático) </small></label>
						 <span class="field">
							modulo/eventos/<?= $this->Form->input('url',array('class'=>'span4','type'=>'text'))?>	
						</span>
					</p>						
					<p>
						<label>Imagem <b>[tamanho recomendado 635x250]</b> </label>
						 <span class="field">
							<?= $this->Form->input('image',array('class'=>'span4','type'=>'file','value'=>'null'))?>	
						</span>
					</p>
						
					<p>
						<label>Texto</label>
						 <span class="field">
							<?= $this->Form->input('text',array('class'=>'input-xxlarge editor','type'=>'textarea'))?>	
						</span>
					</p>		
					<div class="row-fluid">
						
							<legend>Destaques >> <small>Configue aqui o tipo de destaque e este estabelecimento deve ter</small></legend>
							<!-- Aparecer na home? <?= $this->Form->input('home',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?> -->
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
			             <a href="/schedules" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				
				
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

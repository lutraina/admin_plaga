<?php $this->extend('/Common/businesses'); ?>
<?= $this->start('Common_Content') ?>
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
							
							
							$('.result-ajax').load('/businesses/filtro/'+$('.type').val());    	
							
							$('.type').change(function(){
								var valor = $(this).val();
						
								$.ajax({
									
							        url: '/businesses/filtro/'+valor,
							    	beforeSend:function(){
							    	
							    		$('.result-ajax').html('Agurade...');
							    		
							
							    	},
							        success: function(data) {
										$('.result-ajax').html(data);
							        	
							        },
							        error: function(){
							           
							           }
							 
								})
						       
							})
						})
						
					</script>				
				    <p>
		                <label>Filtre os estabelecimentos</label>
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
		         	
					<?= $this->Form->end(null)?>   
	
				<div class="result-ajax">
					
				</div>

<?= $this->end() ?>
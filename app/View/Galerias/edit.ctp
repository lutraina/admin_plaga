<?php 
	$this->extend('Common/galerias');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<div class="row-fluid">
		<div class="span12">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="lighter">
							
							<i class="icon-picture orange"></i>
							Altere seu album de fotos
							
						</h4>

						<div class="widget-toolbar">
							<div class="area-upload">
								<label for="upl" class="label-upload btn btn-success btn-mini ">Adicionar mais fotos
								<form  id="form-galeria" method="post" action="/files/index" style="display: none">
								 	<input type="hidden" name="galerias_id" id="galerias_id" value="<?= $galerias['Galeria']['id'] ?>"/>
								 	<input type="file" name="upl[]" id="upl" multiple />
							 	</form>
							 	</label>
						 	</div>
							<span class="preloader">
								<img src="<?= $_URL; ?>img/ajax-loader.gif" />
								<h3>Aguarde...</h3>
							</span>	 	
						</div>
						<div class="widget-toolbar">
							<button data-dismiss="modal" class="btn btn-danger btn-mini" onclick="deleteGaleria('<?= $galerias['Galeria']['id'] ?>')">Excluir galeria</button>
						</div>

					</div>

					<div class="widget-body">
						<div class="widget-main">
							<?php echo $this->Form->create('Galeria', array(
							    'inputDefaults' => array(
							        'label' => false,
							        'div' => false
							    	),
							    'class'=>'stdform stdform2',
								));
							?>	
																			
						        <p class="pull-right">
						        	<?= $this->Form->input('id',array('type'=>'hidden'))?>	
						            <button class="btn btn-primary btn-mini">Salvar</button>
						            <a href="/galerias" class="btn btn-mini">Cancelar(sair)</a>
						        </p>
								<p>
									
									 <span class="field">
										<?= $this->Form->input('titulo',array('class'=>'span8','type'=>'text','placeholder'=>'Adicione um titulo'))?>	
									</span>
								</p>	
								<p>
									 <span class="field">
										<?= $this->Form->input('data',array('class'=>'span8','type'=>'text','placeholder'=>'Data. Ex: 10/06'))?>	
									</span>
								</p>									
								<p>
									
									 <span class="field">
										<?= $this->Form->input('texto',array('class'=>'span8','type'=>'textarea','placeholder'=>'Descrição do album'))?>	
									</span>
								</p>								
								<div class="row-fluid">
									
										<legend>Destaques >> <small>Configue aqui o tipo de destaque e este estabelecimento deve ter</small></legend>
										Aparecer na home? <?= $this->Form->input('home',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>
										Destaque interno? <?= $this->Form->input('featured',array('class'=>'span3','options'=>array(1=>'Destaque principal',2=>'Destaque secundário',0=>'Nenhum')))?>
										<!-- Aparecer no menu? <?= $this->Form->input('menu',array('class'=>'span1','options'=>array('sim'=>'Sim','nao'=>'Não')))?>-->
										
								</div>	
									<br class="cl" />								
								<!--<p>
									<label>Descrição do album</label>
									 <span class="field">
										<?= $this->Form->input('descricao',array('class'=>'input-xxlarge','type'=>'textarea'))?>	
									</span>
								</p>-->		
							<?= $this->Form->end(null)?>   						
							<div class="row-fluid">
								<b>Para salvar o titulo da imagem, precione a tecla ENTER</b> <br />
								<div id="ordenarFotos">
									<?php foreach($galerias['File'] as $img): ?>
										<div class="span2 foto-<?= $img['id']?>" style="margin-bottom:15px;">
											
											<div class="thumbnail">
												<div class="item">													
													<img src="<?= $_URL_FILE; ?>galleries/fotos/640x480-<?= $img['name']?>"/>
													<div class="details">
														<a href="#?" class="icon" onclick="delteImage('<?= $img['id']?>','<?= $img['id']?>')"><i class="icon-remove"></i></a>		
													</div>
												</div>
												<div class="row-fluid">												
													<input type="text" name='tituloImagem' placeholder="sem titulo" alt="<?= $img['id']?>" value="<?php echo $img['titulo']?>" class="span12 desable inputNameImagem" />											
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>	
						</div><!--/widget-main-->
					</div><!--/widget-body-->
				</div><!--/widget-box-->
			</div>

	

									

</div>
<?php echo $this->end(); ?>

<?php $this->extend('/Common/businesses'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-comment orange"></i>
				 <?= $businesses['Business']['name']?> | <a class="btn btn-mini btn-warning" href="/businesses/edit/<?= $businesses['Business']['id']?> ">Editar este estabelecimento</a> | <a class="btn btn-mini " href="/businesses">Cancelar(Sair)</a>
			</h4>

			<div class="widget-toolbar">
				<a href="<?= $_URL ;?>#" data-action="collapse">
					<i class="icon-chevron-up"></i>
				</a>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main">
				<div class="row-fluid">
					<div class="span6">
						<?php if(!empty($businesses['Business']['image'])): ?>
							<img src="<?= $_URL_FILE.'businesses/fotos/635x250-'.$businesses['Business']['image']; ?>"/>	
						<?php endif;?>		
						
						<div class="clearfix"></div>					
						<br />
			            <table class="table table-bordered table-invoice" >
			                <tr>
			                    <td style="width:250px;"><b>Nome</b></td>
			                    <td class="width70"><?= $businesses['Business']['name']?></td>
			                </tr>
			                <tr>
			                    <td class="width30"><b>Endereço</b></td>
			                    <td class="width70"> <?= $businesses['Business']['address']?></td>
			                </tr>
					        <tr>
					            <td class="width30"><b>Região</b></td>
					            <td class="width70"> <?= $businesses['Business']['region']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Telefone(s)</b></td>
					            <td class="width70"><?= $businesses['Business']['phone']?></td>
					        </tr>		                        
					        <tr>
					            <td class="width30"><b>Horário de funcionamento</b></td>
					            <td class="width70"><?= $businesses['Business']['business_hours']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Estacionamento</b></td>
					            <td class="width70"><?= $businesses['Business']['parking']?></td>
					        </tr>		
					        <tr>
					            <td class="width30"><b>Manobrista</b></td>
					            <td class="width70"><?= $businesses['Business']['valet']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Preço médio por pessoa (opcional)</b></td>
					            <td class="width70"><?= $businesses['Business']['average_price']?></td>
					        </tr>	
					        <tr>
					            <td class="width30"><b>Especialidade/Estilo</b></td>
					            <td class="width70"><?= $businesses['Business']['specialty']?></td>
					        </tr>	
					        <tr>
					            <td class="width30"><b>Diferencial</b></td>
					            <td class="width70"><?= $businesses['Business']['differential']?></td>
					        </tr>					        				        
					        <tr>
					            <td class="width30"><b>Anuncio gratuito?</b></td>
					            <td class="width70"><?= $businesses['Business']['gratuito']?></td>
					        </tr>	
					        <tr>
					            <td class="width30"><b>Palavras Chaves</b></td>
					            <td class="width70"><?= $businesses['Business']['palavra_chave']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Site</b></td>
					            <td class="width70"><?= $businesses['Business']['site']?></td>
					        </tr>		
					        <tr>
					            <td class="width30"><b>Email</b></td>
					            <td class="width70"><?= $businesses['Business']['email']?></td>
					        </tr>						        			        					        					        
					        <tr>
					            <td class="width30"><b>Logo marca</b></td>
					            <td class="width70">
					            	<?php if(!empty($businesses['Business']['logo'])): ?>
										<img src="<?= $_URL_FILE.'businesses/fotos/'.$businesses['Business']['logo']; ?>"/>	
									<?php endif;?>
					            	
					            </td>
					        </tr>					        
					    				        			                                                 
			            </table> 					
					</div>	
				
				<div class="span6">
						<div class="widget-toolbar">
							<div class="area-upload">
								<label for="upl" class="label-upload"><button class="btn btn-success btn-mini ">Adicionar  fotos</button></label>
								<form  id="form-galeria" method="post" action="/businesses/up_fotos" style="display: none">
								 	<input type="hidden" name="businesses_id" id="businesses_id" value="<?= $businesses['Business']['id']?>"/>
								 	<input type="file" name="upl[]" id="upl" multiple />
							 	</form>
						 	</div>
							<span class="preloader">
								<img src="<?= $_URL; ?>img/ajax-loader.gif" />
								<h3>Aguarde...</h3>
										
							</span>	 	
						</div>		    
						<br class='cl' /> 
						<br class='cl' /> 
						<?php $flag = 1; ?>
								<div id="ordenarFotos">
								<div class="row-fluid">
										<?php foreach($businesses['File'] as $img): ?>
											<div class="span5" id="<?= $img['id']?>">
												<div class="row-fluid">												
													<!-- <input type="text" name='tituloImagem' placeholder="sem titulo" alt="<?= $img['id']?>" value="<?php echo $img['titulo']?>" class="span12 desable inputNameImagem" />-->											
												</div>
												<div class="thumbnail">
													<div class="item">													
														<img src="<?= $_URL_FILE; ?>businesses/fotos/640x480-<?= $img['name']?>"/>
														<div class="details">
															<a href="#?" class="icon" onclick="delteImage('<?= $img['id']?>','<?= $img['id']?>')"><i class="icon-remove"></i></a>		
														</div>
													</div>
												</div>
											</div>
											<?php if($flag==2): ?>		
												</div>		
												<br class="cl" />							
												<div class="row-fluid">
												
												<?php $flag = 0; ?>
											<?php endif; ?>
											<?php $flag++ ?>
										<?php endforeach; ?>
									</div>
								</div>	
						<?php echo $this->end(); ?>		            	
		            </div>			
 				<a class="btn btn-mini " href="/businesses">Cancelar(Sair)</a>
 				</div>
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

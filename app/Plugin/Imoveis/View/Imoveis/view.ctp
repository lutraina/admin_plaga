<?php $this->extend('/Common/imoveis'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-bullhorn orange"></i>
				 <?= $imoveis['Imovei']['nome']?> | <a class="btn btn-mini btn-warning" href="/imoveis/edit/<?= $imoveis['Imovei']['id']?> ">Editar este imóvel</a> | <a class="btn btn-mini " href="/imoveis">Cancelar(Sair)</a>
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
			            <table class="table table-bordered table-invoice">
			                <tr>
			                    <td style="width:250px;"><b>Vendedor</b></td>
			                    <td class="width70"><?= $imoveis['Imovei']['vendedor']?></td>
			                </tr>
			                <tr>
			                    <td class="width30"><b>Telefone(s)</b></td>
			                    <td class="width70"> <?= $imoveis['Imovei']['telefone']?></td>
			                </tr>		
			                <tr>
			                    <td class="width30"><b>E-mail</b></td>
			                    <td class="width70"> <?= $imoveis['Imovei']['email']?></td>
			                </tr>					                	                
			                <tr>
			                    <td class="width30"><b>Tipo de imóvel</b></td>
			                    <td class="width70"> <?= $imoveis['Imovei']['tipo']?></td>
			                </tr>
					        <tr>
					            <td class="width30"><b>Endereço</b></td>
					            <td class="width70"><?= $imoveis['Imovei']['endereco']?></td>
					        </tr>		                        
					        <tr>
					            <td class="width30"><b>Quartos</b></td>
					            <td class="width70"><?= $imoveis['Imovei']['quartos']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Situação do imóvel</b></td>
					            <td class="width70"><?= $imoveis['Imovei']['situacao']?></td>
					        </tr>		
					        <tr>
					            <td class="width30"><b>Mais detalhes</b></td>
					            <td class="width70"><?= $imoveis['Imovei']['opcional']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Status do anuncio. Ativo?</b></td>
					            <td class="width70"><?= $imoveis['Imovei']['status']?></td>
					        </tr>
			            </table> 
		            </div>	
		            <div class="span6">
						<div class="widget-toolbar">
							<div class="area-upload">
								<label for="upl" class="label-upload btn btn-success btn-mini">Adicionar  fotos
									<form  id="form-galeria" method="post" action="/imoveis/up_fotos" style="display: none">
									 	<input type="hidden" name="imoveis_id" id="imoveis_id" value="<?= $imoveis['Imovei']['id']?>"/>
									 	
									 		<input type="file" name="upl[]" id="upl" multiple />
									 	
								 	</form>
							 	</label>
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
								
										<?php foreach($imoveis['File'] as $img): ?>
											<div class="span3" id="<?= $img['id']?>">
												<div class="row-fluid">												
													<!-- <input type="text" name='tituloImagem' placeholder="sem titulo" alt="<?= $img['id']?>" value="<?php echo $img['titulo']?>" class="span12 desable inputNameImagem" />-->											
												</div>
												<div class="thumbnail">
													<div class="item">													
														<img src="<?= $_URL_FILE; ?>imoveis/fotos/B-<?= $img['name']?>"/>
														<div class="details">
															<a href="#?" class="icon" onclick="delteImage('<?= $img['id']?>','<?= $img['id']?>')"><i class="icon-remove"></i></a>		
														</div>
													</div>
												</div>
											</div>

										<?php endforeach; ?>
									
								</div>	
						<?php echo $this->end(); ?>		            	
		            </div>					
				</div>			
 				<a class="btn btn-mini " href="/imoveis">Cancelar(Sair)</a>
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>


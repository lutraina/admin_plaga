

<?php $this->extend('/Common/autos'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-bullhorn orange"></i>
				 <?= $autos['Auto']['nome']?> | <a class="btn btn-mini btn-warning" href="/autos/edit/<?= $autos['Auto']['id']?> ">Editar este automovel</a> | <a class="btn btn-mini " href="/autos">Cancelar(Sair)</a>
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
			                    <td style="width:250px;"><b>Nome do proprietário</b></td>
			                    <td class="width70"><?= $autos['Auto']['nome']?></td>
			                </tr>
			                <tr>
			                    <td class="width30"><b>Tipo de anuncio</b></td>
			                    <td class="width70"> <?= $autos['Auto']['tipo']?></td>
			                </tr>
					        <tr>
					            <td class="width30"><b>Marca</b></td>
					            <td class="width70"><?= $autos['Auto']['marca']?></td>
					        </tr>		                        
					        <tr>
					            <td class="width30"><b>Modelo</b></td>
					            <td class="width70"><?= $autos['Auto']['modelo']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Ano do modelo</b></td>
					            <td class="width70"><?= $autos['Auto']['ano_modelo']?></td>
					        </tr>		
					        <tr>
					            <td class="width30"><b>Ano da fabricação</b></td>
					            <td class="width70"><?= $autos['Auto']['ano_fabricacao']?></td>
					        </tr>				                                 
					        <tr>
					            <td class="width30"><b>Placa</b></td>
					            <td class="width70"><?= $autos['Auto']['placa']?></td>
					        </tr>			
					        <tr>
					            <td class="width30"><b>Valor</b></td>
					            <td class="width70"><?= $autos['Auto']['preco']?></td>
					        </tr>		
							<tr>
					            <td class="width30"><b>Quilometragem</b></td>
					            <td class="width70"><?= $autos['Auto']['quilometragem']?></td>
					        </tr>		
							<tr>
					            <td class="width30"><b>Cambio</b></td>
					            <td class="width70"><?= $autos['Auto']['cambio']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Portas</b></td>
					            <td class="width70"><?= $autos['Auto']['portas']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Cor</b></td>
					            <td class="width70"><?= $autos['Auto']['cor']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Informações adicionais</b></td>
					            <td class="width70"><?= $autos['Auto']['opcional']?></td>
					        </tr>
					        <tr>
					            <td class="width30"><b>Status do anuncio. Ativo?</b></td>
					            <td class="width70"><?= $autos['Auto']['status']?></td>
					        </tr>
					        <?php if(isset($autos['Auto']['address']) && !empty($autos['Auto']['address'])){ ?>
					        	 <tr>
						            <td class="width30"><b>Endereço</b></td>
						            <td class="width70"><?= $autos['Auto']['address']?></td>
						        </tr>
					        <?php } ?>
					        <?php if(isset($autos['Auto']['telefone']) && !empty($autos['Auto']['telefone'])){ ?>
					        	 <tr>
						            <td class="width30"><b>Telefone</b></td>
						            <td class="width70"><?= $autos['Auto']['telefone']?></td>
						        </tr>
						    <?php } ?>
					        <?php if( isset($autos['Auto']['local']) && !empty($autos['Auto']['local'])){ ?>
					        	 <tr>
						            <td class="width30"><b>Local</b></td>
						            <td class="width70"><?= $autos['Auto']['local']?></td>
						        </tr>
						    <?php } ?>
						    <?php if($autos['Auto']['businesses_id'] == 0 ){ ?>
					        	 <tr>
						            <td class="width30"><b>Estabelecimento vinculado</b></td>
						            <td class="width70"><?= $autos['Businesses']['name']?></td>
						        </tr>
						    <?php } ?>
					        
					        
			            </table> 
		            </div>	
		            <div class="span6">
						<div class="widget-toolbar">
							<div class="area-upload">
								<label for="upl" class="label-upload btn btn-success btn-mini">Adicionar  fotos
									<form  id="form-galeria" method="post" action="/autos/up_fotos" style="display: none">
									 	<input type="hidden" name="autos_id" id="autos_id" value="<?= $autos['Auto']['id']?>"/>
									 	
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
								
										<?php foreach($autos['File'] as $img): ?>
											<div class="span3" id="<?= $img['id']?>">
												<div class="row-fluid">												
													<!-- <input type="text" name='tituloImagem' placeholder="sem titulo" alt="<?= $img['id']?>" value="<?php echo $img['titulo']?>" class="span12 desable inputNameImagem" />-->											
												</div>
												<div class="thumbnail">
													<div class="item">													
														<img src="<?= $_URL_FILE; ?>autos/fotos/B-<?= $img['name']?>"/>
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
 				<a class="btn btn-mini " href="/autos">Cancelar(Sair)</a>
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>


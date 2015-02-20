<?php $this->extend('/Common/banners'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-screenshot orange"></i>
				 <?= $banners['Banner']['nome'] ?> | <a class="btn btn-mini btn-warning" href="/banners/edit/<?= $banners['Banner']['id']?> ">Editar este banner</a>
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
					<?php if(!empty($banners['Banner']['image'])): ?>
						<img src="<?= $_URL_FILE.'banners/fotos/'.$banners['Banner']['image']; ?>" class='span2'/>	<br class="cl" />	
					<?php endif;?>		
					
					<div class="clearfix"></div>
					<br />
		            <table class="table table-bordered table-invoice" style="width:635px;">
		            			                <!-- <tr>
		               Ativo deve-se clicar pra desaitvar?    
		                <td class="width70"><h4>Ativo? <i class="btn btn-mini btn-info"><?= $banners['Banner']['status']?></i></h4></td>
		                </tr>
		                -->
		                 <tr>
		                <td class="width70" style="cursor:default;"><h4>Ativo? <i style="cursor:default;" class="btn btn-mini btn-info"><?= $banners['Banner']['status']?></i></h4></td>
		                </tr>
		                
		            	<tr>
		                    <td style="width:250px;"><b>Posição</b></td>
		                    <td class="width70"><?= $banners['Banner']['local']?></td>
		                </tr>
		               
		            	<tr>
		                    <td style="width:250px;"><b>Nome</b></td>
		                    <td class="width70"><?= $banners['Banner']['nome']?></td>
		                </tr>
		            	<tr>
		                    <td style="width:250px;"><b>Texto passagem do mouse</b></td>
		                    <td class="width70"><?= $banners['Banner']['text_hover']?></td>
		                </tr>
		                

		                <tr>
		                    <td class="width30"><b>Link</b></td>
		                    <td class="width70"> <?= $banners['Banner']['link']?> </td>
		                </tr>
				        <tr>
				            <td class="width30"><b>Impressões</b></td>
				            <td class="width70"> <?= $banners['Banner']['view']?></td>
				        </tr>
				        <tr>
				            <td class="width30"><b>Clicks</b></td>
				            <td class="width70"><?= count($banners['Click']); ?></td>
				        </tr>		                        
				        <tr>
				            <td class="width30"><b>Categoria</b></td>
				            <td class="width70"><?= $banners['Banner']['categories']?></td>
				        </tr>				                                 
		            </table> 					
				</div>			
 				<a class="btn btn-mini " href="/banners">Cancelar(Sair)</a>
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

<?php $this->extend('/Common/advantages'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-calendar orange"></i>
				 <?= $advantages['Advantage']['title']?> | <a class="btn btn-mini btn-warning" href="/advantages/edit/<?= $advantages['Advantage']['id']?> ">Editar esta vantagem</a>
				 
				 <a class="btn btn-mini btn-info" href="/advantages/lista/<?= $advantages['Advantage']['id']?> ">Imprimir lista</a>
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
					<div class="span4">
						<div class="widget-box">
							<div class="widget-body">
								<div class="widget-main">
								<?php if(!empty($advantages['Advantage']['image'])): ?>
									<img src="<?= $_URL_FILE.'advantages/fotos/410x480-'.$advantages['Advantage']['image']; ?>"/>	
								<?php else: ?>
									<img src="/img/img-padrao-foto.png"/>	
								<?php endif;?>		
									
								</div><!--/widget-main-->
							</div><!--/widget-body-->
						</div><!--/widget-box-->
					</div><!--/span-->
					<div class="span8">
						<h1><?= $advantages['Advantage']['title']?></h1>

						<b>Validade: </b> de <?= date("d/m/Y", strtotime($advantages['Advantage']['date_start'])); ?> à <?= date("d/m/Y", strtotime($advantages['Advantage']['date_end'])); ?>
						<div class="clearfix"></div>

						<b>Máximo de cupons: </b><?= $advantages['Advantage']['max']?>
						<div class="clearfix"></div>
						<b>Valor do cupom: </b> De R$ <?= $advantages['Advantage']['price']?> Por R$ <?= $advantages['Advantage']['price']?> 
						<div class="clearfix"></div>
																		
						<br />
						<div class="clearfix"></div>
						<?= $advantages['Advantage']['regulation']?>
						<div class="clearfix"></div>
						<b>URL: </b> modulo/agenda/<?= $advantages['Advantage']['url']?>
						<div class="clearfix">	</div>	<br />
						<a href="/advantages" class="btn btn-mini">Voltar para a listagem</a>
					</div>
				</div>			

				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

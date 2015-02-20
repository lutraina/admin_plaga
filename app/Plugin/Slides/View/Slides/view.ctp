<?php $this->extend('/Common/slides'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-comment orange"></i>
				 <?= $slides['Slide']['title']?> | <a class="btn btn-mini btn-warning" href="/slides/edit/<?= $slides['Slide']['id']?> ">Editar este slide</a>
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
					<div class="span8">
						<div class="widget-box">
							<div class="widget-body">
								<div class="widget-main">
									<h1><?= $slides['Slide']['title']?></h1>
									<div class="clearfix"></div>
									<h4><?= $slides['Slide']['subtitle']?></h4>
									<?= $slides['Slide']['link']?>	
									<div class="clearfix"></div>
									Ordem: <h4><?= $slides['Slide']['ordem']?></h4>
									
									<div class="clearfix"></div>
									Clicks: <h4><?= $slides['Slide']['clicks']?></h4>
									<br />									
									<?php if(!empty($slides['Slide']['image'])): ?>
										<img src="<?= $_URL_FILE.'slides/fotos/635x360-'.$slides['Slide']['image']; ?>"/>	
									<?php else: ?>
										
										<img src="/img/img-padrao-foto.png"/>	
									<?php endif;?>		
									<div class="clearfix"></div>
									<br />

									<div class="clearfix"></div>
								</div><!--/widget-main-->
							</div><!--/widget-body-->
						</div><!--/widget-box-->
									
						<br />
						<a href="/slides" class="btn btn-mini">Voltar para a listagem</a>
					</div>
				</div>			

				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

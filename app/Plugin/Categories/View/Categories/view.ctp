<?php $this->extend('/Common/schedule'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-calendar orange"></i>
				 <?= $schedules['Schedule']['title']?> | <a class="btn btn-mini btn-warning" href="/schedules/edit/<?= $schedules['Schedule']['id']?> ">Editar este evento</a>
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
						<div class="widget-box">
							<div class="widget-body">
								<div class="widget-main">
								<?php if(!empty($schedules['Schedule']['image'])): ?>
									<img src="<?= $_URL_FILE.'635x360-'.$schedules['Schedule']['image']; ?>"/>	
								<?php else: ?>
									
									<img src="/img/img-padrao-foto.png"/>	
								<?php endif;?>		
								
					

									<div class="clearfix">
										
									</div>
								</div><!--/widget-main-->
							</div><!--/widget-body-->
						</div><!--/widget-box-->
					</div><!--/span-->
					<div class="span6">
						<h1><?= $schedules['Schedule']['title']?></h1>
						<div class="clearfix"></div>
						<?= $schedules['Schedule']['text']?>
						<div class="clearfix"></div> <br /> 
						<b>Data do evento: </b><?= date("d/m/Y", strtotime($schedules['Schedule']['date_of_event'])); ?>
						<div class="clearfix"></div>
						<b>Horário: </b><?= $schedules['Schedule']['schedule']?>
						<div class="clearfix"></div>
						<b>Local: </b><?= $schedules['Schedule']['local']?>
						<div class="clearfix"></div>
						<b>Endereço: </b><?= $schedules['Schedule']['address']?>
						<div class="clearfix"></div>
						<b>URL: </b> modulo/agenda/<?= $schedules['Schedule']['url']?>
						<div class="clearfix">	</div>																			
						<br />
						<a href="/schedules" class="btn btn-mini">Voltar para a listagem</a>
					</div>
				</div>			

				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

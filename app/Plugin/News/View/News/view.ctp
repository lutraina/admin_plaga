<?php $this->extend('/Common/news'); ?>
<?= $this->start('Common_Content') ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-comment orange"></i>
				 <?= $news['News']['title']?> | <a class="btn btn-mini btn-warning" href="/news/edit/<?= $news['News']['id']?> ">Editar este Post</a>
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
							
									<h1><?= $news['News']['title']?></h1>
									<div class="clearfix"></div>
									
									<?= $news['News']['subtitle']?>	
									<div class="clearfix"></div>
									<br />
									
									
									<?php if(!empty($news['News']['image'])): ?>
										<img src="<?= $_URL_FILE.'news/fotos/635x250-'.$news['News']['image']; ?>"/>	
									<?php else: ?>
										
										<img src="/img/img-padrao-foto.png"/>	
									<?php endif;?>		
									<div class="clearfix"></div>
									<br />
									
									<?= $news['News']['text']?>	
					

									<div class="clearfix"></div>
								</div><!--/widget-main-->
							</div><!--/widget-body-->
						</div><!--/widget-box-->

						<div class="clearfix"></div>
						<b>Palavras chaves: </b><?= $news['News']['palavra_chave']?>
						<div class="clearfix">	</div>																			
						<div class="clearfix"></div>
						<b>URL: </b> modulo/posts/<?= $news['News']['url']?> | <b>AUTOR: </b> <?= $news['News']['author']?>
						<div class="clearfix">	</div>
						<br />
						<a href="/news" class="btn btn-mini">Voltar para a listagem</a>
					</div>
				</div>			

				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

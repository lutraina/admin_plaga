<?php 
	$this->extend('Common/consulta');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<div class="span12">
	<div class="widget-box transparent">
		<div class="widget-header widget-header-flat">
			<h4 class="lighter">
				
				<i class="icon-calendar orange"></i>
				Pedido de consulta | <?= $consulta['Consulta']['nome']?>
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
							<div class="widget-header widget-header-flat widget-header-small">
								<h5>
									<i class="icon-picture"></i>
									<?= $consulta['Consulta']['nome']?>
								</h5>
				
							</div>
							<div class="widget-body">
								<div class="widget-main">
								<?php if(!empty($consulta['Consulta']['img'])): ?>
									<img src="<?= $_URL_FILE.'A-'.$consulta['Consulta']['img']; ?>"/>	
								<?php else: ?>
									
									<img src="/img/img-padrao-foto.png"/>	
								<?php endif;?>		
								
					

									<div class="clearfix">
										
									</div>
								</div><!--/widget-main-->
							</div><!--/widget-body-->
						</div><!--/widget-box-->
					</div><!--/span-->
					<div class="span8">
						<b>Nome: </b><?= $consulta['Consulta']['nome']?>
						<div class="clearfix">
						<b>E-mail: </b><?= $consulta['Consulta']['email']?>
						<div class="clearfix">
						<b>Telefone: </b><?= $consulta['Consulta']['telefone']?>
						<div class="clearfix">
						<b>Mensagem: </b><?= $consulta['Consulta']['texto']?>
						<div class="clearfix">
							<br />
						<a href="/consultas" class="btn btn-mini">Voltar para a listagem</a>
					</div>
				</div>			

				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-box-->
</div>
	
<?php echo $this->end(); ?>

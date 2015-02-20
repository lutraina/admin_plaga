<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Contatos
			<small>
				<i class="icon-double-angle-right"></i>
				Mensagens de contatos do  site
			</small>
			
			<span class="pull-right">
				<a href="<?= $_URL ?>mensagems/" class="btn btn-success btn-mini" >Todas</a>
				<a href="<?= $_URL ?>mensagems/lida" class="btn btn-success btn-mini" >Lidas</a>
				<a href="<?= $_URL ?>mensagems/nao_lida" class="btn btn-success btn-mini" >Não lidas</a>
			</span>
		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('conteudo'); ?>

		


		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->



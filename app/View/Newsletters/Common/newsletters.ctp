
    
<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Newsletter
			<small>
				<i class="icon-double-angle-right"></i>
				Todos os emails cadastrados
			</small>
			<span class="pull-right">
				<a href="<?= $_URL ?>newsletters" class="btn btn-mini" >Lista de emails</a> | <a href="<?= $_URL ?>newsletters/enviar" class="btn btn-success btn-mini" >Enviar newsletter</a>
			</span>
		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('conteudo'); ?>
		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->



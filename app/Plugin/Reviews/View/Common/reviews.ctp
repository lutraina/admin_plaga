<?php $_URL = isset($_URL) ? $_URL : '/';?> 
<?php $_URL_FILE = isset($_URL_FILE) ? $_URL_FILE : '/';?>

<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			<a href="/schedules">Avaliações e comentários</a>
			<small>
				<i class="icon-double-angle-right"></i>
				Gerencie as avaliações e comentários
			</small>
			
			<span class="pull-right">
				<a href="<?= $_URL ?>reviews/" class="btn btn-success btn-mini" >Todas</a>
				<a href="<?= $_URL ?>reviews/bloqueado" class="btn btn-success btn-mini" >Bloqueados</a>
				<a href="<?= $_URL ?>reviews/desbloqueado" class="btn btn-success btn-mini" >Desbloqueados</a>
				
			</span>
		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('Common_Content'); ?>

		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->

<!--
	Java script e css do plugin Agenda 1.0.0
	-->

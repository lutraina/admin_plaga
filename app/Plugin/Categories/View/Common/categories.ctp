<?php $_URL = isset($_URL) ? $_URL : '/';?> 
<?php $_URL_FILE = isset($_URL_FILE) ? $_URL_FILE : '/';?>

<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			<a href="/categories/index/schedule">Categorias</a>
			<small>
				<i class="icon-double-angle-right"></i>
				Gerencie suas categorias
			</small>
			<span class="pull-right">
				<a href="<?= $_URL ?>categories/add/<?= $type; ?>" class="btn btn-success btn-mini" >Adicionar uma nova categoria</a>
			</span>

		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('Common_Content'); ?>

		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->


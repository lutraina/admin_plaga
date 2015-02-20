<?php $_URL = isset($_URL) ? $_URL : '/';?> 
<?php $_URL_FILE = isset($_URL_FILE) ? $_URL_FILE : '/';?>

<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			<a href="/news">Notícias / Post</a>
			<small>
				<i class="icon-double-angle-right"></i>
				Gerencie suas notícias e posts
			</small>
			<span class="pull-right">
				<a href="<?= $_URL ?>news/add" class="btn btn-success btn-mini" >Adicionar uma nova notícia</a>
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

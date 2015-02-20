<?php $_URL = isset($_URL) ? $_URL : '/';?> 
<?php $_URL_FILE = isset($_URL_FILE) ? $_URL_FILE : '/';?>

<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			<a href="/advantages">Vantagens</a>
			<small>
				<i class="icon-double-angle-right"></i>
				Gerencie os cupons de vantagens
			</small>
			<span class="pull-right">
				<a href="<?= $_URL ?>advantages/add" class="btn btn-success btn-mini" >Adicionar um novo cupom</a>
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
	<link href='<?= $_URL ?>Advantages/fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link href='<?= $_URL ?>Advantages/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	
	<!-- Verificar se existe chamada do Jquery e JqueryUI no layout principal do projeto, caso não haja descomentar as linhas 33 e 34 --> 	
	<!--<script src='<?= $_URL ?>Advantages/jquery/jquery-1.10.2.min.js'></script>
		<script src='<?= $_URL ?>Advantages/jquery/jquery-ui-1.10.3.custom.min.js'></script> -->
	
	<script src='<?= $_URL ?>Advantages/fullcalendar/fullcalendar.min.js'></script>
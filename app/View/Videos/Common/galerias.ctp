<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Galeria multimidia
			<small>
				<i class="icon-double-angle-right"></i>
				Galeria de videos
			</small>
		<span class="pull-right">
			<a href="/videos/add" class="btn btn-success btn-mini" >Adicionar um novo video</a>
		</span>
		</h1>

	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		 <?php echo $this->fetch('conteudo'); ?>
		<br class="cl" />
		<div class="hr hr32 hr-dotted"></div>


		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->

		<!-- novo video-->
<script src="/build/mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="/build/mediaelementplayer.css" />	
<script>
$('video').mediaelementplayer({
	success: function(media, node, player) {
		$('#' + node.id + '-mode').html('mode: ' + media.pluginType);
	}
});
</script>

<script>

	
	function deleteVideo(id){
		if(confirm("Deseja realmente excluir este video?")){
			location.href="/videos/delete/"+id;
		}
	} 


</script>



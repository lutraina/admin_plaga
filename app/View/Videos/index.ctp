<?php 
	$this->extend('Common/galerias');
?>		            
            
<?php echo $this->start('conteudo'); ?>

<div class="row-fluid">
	<?php $flag = 1; ?>
	<?php foreach($galerias as $video): ?>
		<div class="span4">
			<div class="widget-box">
				<div class="widget-header widget-header-flat widget-header-small">
					<h5>
						<i class="icon-facetime-video"></i>
						<a href="/videos/edit/<?= $video['Video']['id'] ?>"><?= $video['Video']['titulo'] ?></a>
					</h5>
	
				</div>
		
				<div class="widget-body">
					<div class="widget-main">
						<video width="100%" height="100%" id="player1">
						    <!-- Pseudo HTML5 -->
						    <source type="video/youtube" src="<?= $video['Video']['link'] ?>" />
						</video>
						
						<div class="hr hr8 hr-double"></div>
		
							<div class="pull-right">
								<div class="btn-group">
									<a href="/videos/edit/<?= $video['Video']['id'] ?>" class="btn btn-mini btn-info">
										<i class="icon-edit bigger-125"></i>
									</a>
	
									<button class="btn btn-mini btn-danger " onclick="deleteVideo('<?= $video['Video']['id'] ?>')">
										<i class="icon-trash bigger-125"></i>
									</button>
								</div>
							</div>
						<div class="clearfix">
							
						</div>
					</div><!--/widget-main-->
				</div><!--/widget-body-->
			</div><!--/widget-box-->
		</div><!--/span-->
		
		<?php if($flag==3): ?>		
			</div>		
			<br class="cl" />							
			<div class="row-fluid">
			
			<?php $flag = 0; ?>
		<?php endif; ?>
		<?php $flag++ ?>
	<?php endforeach; ?>
</div>	
<?php echo $this->end(); ?>

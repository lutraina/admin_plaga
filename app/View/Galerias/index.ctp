<?php 
	$this->extend('Common/galerias');
?>		            
            
<?php echo $this->start('conteudo'); ?>
	<div class="row-fluid">
		<div class="span3 center alert-success">
			<div class="thumbnail">
				<label for="upl" class="label-upload">
					<div class="item">
						<div class="area-upload">
							<img src="/img/add-album.png"/>										
							<div class="zoom-icon"></div>
							<form  id="form-galeria" method="post" action="/files/index">
							 	<input type="hidden" name="galerias_id" id="galerias_id" />
							 	<input type="file" name="upl[]" id="upl" multiple />
						 	</form>
							<h3 class="page-title">novo album</h3>
							<br class="cl" />	
						</div>	
						<div class="preloader">
							<img src="<?= $_URL; ?>img/ajax-loader.gif" />
							<h3>Aguarde...</h3>
									
						</div>	
					</div>
				</label>
			</div>
		</div>

	<?php $flag = 1; ?>
	<?php foreach($galerias as $galeria): ?>
		<div class="span3 center">
			<div class="thumbnail">
				<div class="item">
					<a href="/galerias/edit/<?php echo $galeria['Galeria']['id'];?>">
						<?php if(!isset($galeria['File'][0]['name'])): ?>
							<img src="/img/no-image.jpg"/>
						<?php else: ?>
							<img src="<?= $_URL_FILE; ?>galleries/fotos/640x480-<?= $galeria['File'][0]['name']?>"/>
							
						<?php endif; ?>	
																
						<div class="zoom-icon"></div>
					
						<br class="cl" />		
						<div class="details">
							Editar album	
						</div>
					</a>
				</div>
			</div>
		</div>
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

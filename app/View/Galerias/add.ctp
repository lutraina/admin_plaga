<?php 
	$this->extend('Common/galerias');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<div class="upload_foto">
	<label for="upl" class="label-upload">
		
		<div class="area-upload">
				<img src="<?= $base_url ?>img/upload.png" /> Clique aqui para subir suas fotos
			 <input type="file" name="upl[]" id="upl" multiple />
		</div>
	</label>
	<div class="preloader">
		<img src="<?php $base_url ?>img/ajax-loader.gif" />
		<h3>Aguarde...</h3>
				
	</div>
   	<div class="add-fotos-qnt">
   		<img src="<?= $base_url ?>img/ok.png" />
   		<span class="add-fotos-qnt-span">Adicionado com sucesso!</span>
   	</div>
	<br class="cl" />
</div>
	
<?php echo $this->end(); ?>

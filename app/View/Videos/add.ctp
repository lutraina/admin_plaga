<?php 
	$this->extend('Common/galerias');
?>		            
            
<?php echo $this->start('conteudo'); ?>
<div class="widget-box transparent">
	<div class="widget-body">
		<div class="widget-main">
			<?php echo $this->Form->create('Video', array(
			    'inputDefaults' => array(
			        'label' => false,
			        'div' => false
			    	),
			    'class'=>'stdform stdform2',
				));
			?>	
				<p>
					<label>Título do video</label>
					 <span class="field">
						<?= $this->Form->input('titulo',array('class'=>'span8','type'=>'text'))?>	
					</span>
				</p>
				<p>
					<label>Link do youtube (Ex: http://www.youtube.com/watch?v=ro6ReGAV1dE)</label>
					 <span class="field">
						<?= $this->Form->input('link',array('class'=>'span8','type'=>'text'))?>	
					</span>
				</p>	
				<p>
					<label>Descrição do video</label>
					 <span class="field">
						<?= $this->Form->input('texto',array('class'=>'input-xxlarge','type'=>'textarea'))?>	
					</span>
				</p>		
				<p>
					<label class="inline">
						<?= $this->Form->input('destaque',array('type'=>'checkbox','id'=>'destaque'))?>
						<span class="lbl"> Marcar este video como destaque</span>
					</label>
				</p>			
		        <p class="stdformbutton">
		        	
		            <button class="btn btn-primary btn-mini">Salvar</button>
		             <a href="/videos" class="btn btn-mini">Cancelar(sair)</a>
		        </p>
			
			
			<?= $this->Form->end(null)?>   
		</div><!--/widget-main-->
	</div><!--/widget-body-->
</div><!--/widget-body-->	
<?php echo $this->end(); ?>

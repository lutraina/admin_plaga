<?php $this->extend('Common/categoria'); ?>	            
            
<?php echo $this->start('conteudo'); ?>
<div class="widget-body">
	<div class="widget-main">
		<?php echo $this->Form->create('Categoria', array(
		    'inputDefaults' => array(
		        'label' => false,
		        'div' => false
		    	),
		    'class'=>'stdform stdform2',
			));
		?>	
			<p>
				<label>Nome da categoria</label>
				 <span class="field">
					<?= $this->Form->input('titulo',array('class'=>'span8','type'=>'text'))?>	
				</span>
			</p>

			<p>
				<label>URL</label>
				 <span class="field">
					blog/<?= $this->Form->input('url',array('class'=>'span6','type'=>'text','placeholder'=>'Deixe em branco para preenchimento automático'))?>	
				</span>
			</p>
			
							
	        <p class="stdformbutton">
	        	<?= $this->Form->input('id',array('class'=>'span8','type'=>'hidden'))?>	
	            <button class="btn btn-primary btn-mini">Salvar</button>
	             <a href="/categorias" class="btn btn-mini">Cancelar(sair)</a>
	        </p>
		
		
		<?= $this->Form->end(null)?>   
	</div><!--/widget-main-->
</div><!--/widget-body-->
	
<?php echo $this->end(); ?> 

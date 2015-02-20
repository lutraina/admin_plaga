<?php 
	$this->extend('Common/post');
?>		            
            
<?php echo $this->start('conteudo'); ?>
			<div class="widget-box transparent">
<div class="widget-body">
	<div class="widget-main">
		<?php echo $this->Form->create('Post', array(
		    'inputDefaults' => array(
		        'label' => false,
		        'div' => false
		    	),
		    'class'=>'stdform stdform2',
		   	'enctype'=>'multipart/form-data'
			));
		?>	
		    <p>
                <label>Categorias</label>
                <span class="field">
            		<?= $this->Form->input('categorias_id',array('options'=>$categorias,'data-placeholder'=>'Escolha uma classe'))?>                
                </span>
            </p>

			<p>
				<label>Título do post</label>
				 <span class="field">
					<?= $this->Form->input('titulo',array('class'=>'span8','type'=>'text'))?>	
				</span>
			</p>
			<p>
				<label>Imagem</label>
				 <span class="field">
					<?= $this->Form->input('img',array('class'=>'span8','type'=>'file'))?>	
				</span>
			</p>	
			<p>
				<label>Texto</label>
				 <span class="field">
					<?= $this->Form->input('texto',array('class'=>'input-xxlarge','type'=>'textarea'))?>	
				</span>
			</p>		
							
	        <p class="stdformbutton">
	            <button class="btn btn-primary btn-mini">Salvar</button>
	             <a href="/posts" class="btn btn-mini">Cancelar(sair)</a>
	        </p>
		
		
		<?= $this->Form->end(null)?>   
	</div><!--/widget-main-->
</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

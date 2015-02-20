<?php 
	$this->extend('Common/parceiro');
?>		            
            
<?php echo $this->start('conteudo'); ?>
			<div class="widget-box transparent">
<div class="widget-body">
	<div class="widget-main">
		<?php echo $this->Form->create('Parceiro', array(
		    'inputDefaults' => array(
		        'label' => false,
		        'div' => false
		    	),
		    'class'=>'stdform stdform2',
		   	'enctype'=>'multipart/form-data'
			));
		?>	
			<p>
				<label>Nome do pareceiro</label>
				 <span class="field">
					<?= $this->Form->input('titulo',array('class'=>'span8','type'=>'text'))?>	
				</span>
			</p>
					<?php if($this->data['Parceiro']['img']){ ?>															               
		  
		                	<img src="<?= $_URL_FILE ?>A-<?= $this->data['Parceiro']['img'] ?>" alt="imagem" style="width: 200px;"/>
		               		<?= $this->Form->input('img_hidden',array('value'=>$this->data['Parceiro']['img'],'type'=>'hidden'))?>	
	                <?php } ?> 			
			
			<p>
				<label>Imagem(Foto, logo etc...)</label>
				 <span class="field">
					<?= $this->Form->input('img',array('class'=>'span8','type'=>'file'))?>	
				</span>
			</p>	
			<p>
				<label>Link</label>
				 <span class="field">
					<?= $this->Form->input('link',array('class'=>'input-xxlarge','placeholder'=>'Ex: http://projetoorelhinha.coom.br'))?>	
				</span>
			</p>			
			<p>
				<label>Texto</label>
				 <span class="field">
					<?= $this->Form->input('texto',array('class'=>'input-xxlarge','type'=>'textarea','placeholder'=>'Escreva algo sobre este parceiro...'))?>	
				</span>
			</p>		
							
	        <p class="stdformbutton">
	        	<?= $this->Form->input('id',array('type'=>'hidden'))?>
	            <button class="btn btn-primary btn-mini">Salvar</button>
	             <a href="/parceiros" class="btn btn-mini">Cancelar(sair)</a>
	        </p>
		
		
		<?= $this->Form->end(null)?>   
	</div><!--/widget-main-->
</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

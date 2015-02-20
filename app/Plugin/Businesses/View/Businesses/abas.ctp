<?php $this->extend('/Common/businesses'); ?>
<?= $this->start('Common_Content') ?>
<p>
	<?php echo $this->Form->create('AbasBusiness', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				         'legend' => false
				    	),
				   	'enctype'=>'multipart/form-data'
					));
				?>	
		<?= $this->Form->input('business_id', array('class'=>'', 'type'=>'hidden', 'value' => '213')) ?>
		<?= $this->Form->input('titulo', array('class'=>'', 'type'=>'text')) ?>
		<?= $this->Form->input('conteudo', array('class'=>'', 'type'=>'textarea')) ?>
	</p>
	<button class="salvar_aba">Salvar aba</button>
	<?php echo $this->end(); ?>
</p>
<?php echo $this->end(); ?> 
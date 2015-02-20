<?php $this->extend('/Common/businesses'); ?>
<?= $this->start('Common_Content') ?>
	<p>
	<?= $this->Form->input('aba_titulo', array('class'=>'','type'=>'text')) ?>
	<?= $this->Form->input('aba_conteudo', array('class'=>'','type'=>'textarea')) ?>
</p>
<?php echo $this->end(); ?>

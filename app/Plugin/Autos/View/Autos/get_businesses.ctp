				<?php echo $this->Form->create('Schedule', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>		
	<p>
		<label>Local</label>
		 <span class="field">
			<?= $this->Form->input('local',array('class'=>'span8','type'=>'text','value'=>@$businesses['Business']['name']))?>	
		</span>
	</p>	
	</p>	
	
		
	<p>
		<label>Endereço</label>
		 <span class="field">
			<?= $this->Form->input('address',array('class'=>'span8','type'=>'text','value'=>@$businesses['Business']['address']))?>	
		</span>
	</p>
	<p>
		<label>Telefone</label>
		 <span class="field">
			<?= $this->Form->input('phone',array('class'=>'span8','type'=>'text','value'=>@$businesses['Business']['phone']))?>	
		</span>
	</p>	
	<?= $this->Form->end(null)?>  
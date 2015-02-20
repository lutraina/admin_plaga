	<div class="row-fluid">
<div class="span2  ">
	
</div>

<!-- Modal -->

<div class=" span6 "  >	
	<div class="form-login ">
		<img src="/img/logo.png" />
		<div class="row-fluid">		 			
	  	 			<?php echo $this->Form->create('User', array(
						'inputDefaults' => array(
							'label' => false,
							'div' => false
							),
						'class'=>'form-horizontal',
						'id'=>'form-login',
						'action'=>'/login',
						'method'=>'post'
						));
					?>	
	
					<div class=" login-form">
						<?php echo $this->Session->flash(); ?>
					    <div class="input-prepend input-space">
						  <span class="add-on"><i class="icon-user"></i></span>
						  <?= $this->Form->input('username',array('placeholder'=>"Usuário",))?>
						  <br class="cl" />
						   <br class="cl" />
						</div>
						
					  
				
					     <div class="input-prepend ">
						   <span class="add-on"><i class="icon-lock"></i> </span>
						    <?= $this->Form->input('password',array('type'=>'password','placeholder'=>"Digite sua senha"))?>  
					    </div>
					    	</div>
					    <button type="submit" class="btn btn-mini btn-inverse btn-login ">Entrar no sistema</button>
					 <?= $this->Form->end(null);?>  					  
		</div>
	</div>
</div>  	

<div class="span3 ">
	
</div>
</div>  
<?php 
	$this->extend('Common/user');
?>
<?php echo $this->start('conteudo'); 	$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];	if($REMOTE_ADDR == '134.90.138.4' ||  $REMOTE_ADDR =='177.34.21.8' || $REMOTE_ADDR == '83.154.194.160'){ ?>
		<div class="widget-body">		
			<!-- BEGIN FORM-->
		   <form  action="" id="UserEditForm" class="form-horizontal" method="post" accept-charset="utf-8">  	   	                                                
																								
			  <div class="control-group">
				 <label class="control-label" >Digite a senha atual</label>
				 <div class="controls" id="tUsername">
					<input name="data[User][oldpassword]" type="password" id="UserOldpassword" class="span6" />                
					<span class="input-error tooltips" data-original-title="Campo obrigatorio!">
						<i class=""></i>
					</span>
				 </div>
			  </div>

			  <div class="control-group">
				 <label class="control-label" for="input1">Agora digite a nova senha</label>
				 <div class="controls">
					<input name="data[User][password]" type="password" id="UserPassword" class="span6"/>             	                
					<span class="input-error tooltips"  data-original-title="Campo obrigatorio!">
						<i class=""></i>
					</span>
				 </div>
			  </div>
			  
			  <div class="control-group" >
				 <label class="control-label" for="input1">Confirme sua  senha</label>
				 <div class="controls" >
					<input name="data[User][password_confirmation]" type="password" id="UserPasswordConfirmation" class="span6" />                
					<span class="input-error tooltips"   data-original-title="As senha não são iguais!">
						<i class="" ></i>
					</span>
				 </div>
			  </div>
						
			  <div class="form-actions">			 
				 <button type="submit" class="btn btn-primary">Salvar</button>
				 <button type="button" class="btn" onclick="cancelar()">Cancelar</button>
			  </div>
		   </form>                                                                               
		   <!-- END FORM-->
		</div>	<?php }  else {			header('Location: http://admin.nocambui.com.br');			exit;		  } ?>	
<?php echo $this->end(); ?>



<?php 						
	$this->extend('Common/user');
?>

<?php echo $this->start('conteudo'); 	$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];	if($REMOTE_ADDR == '134.90.138.4' ||  $REMOTE_ADDR =='177.34.21.8' || $REMOTE_ADDR == '83.154.194.160'){ ?>		 	
		<div class="widget-body">		
			<!-- BEGIN FORM-->
		   <form  action="/users/add" id="UserAddForm" class="form-horizontal" method="post" accept-charset="utf-8">  	   	                                                

			  <div class="control-group">
				 <label class="control-label" for="input1">Perfil</label>
				 <div class="controls">
					<select id="ComboCidades" name="data[User][profile]"  class="span6 chosen" data-placeholder="Cidade" tabindex="1">                   	                   		           			
						<option value="publicidade">Acessar Publicidade</option>
						<option value="admin">Administrador</option>	                   			                   			                   				                   
					</select>               
					<span class="help-inline"></span>
				 </div>	          	
			  </div>

																								
			  <div class="control-group" id="gUsername">
				 <label class="control-label" >Username</label>
				 <div class="controls" id="tUsername">
					<input name="data[User][username]" maxlength="255" type="text" id="UserUsername" class="span6" />                
					<span class="input-error tooltips" id="sUsername"  data-original-title="Campo obrigatorio!">
						<i class="" id="iUsername"></i>
					</span>
				 </div>
			  </div>

			  <div class="control-group" id="gUserPassword">
				 <label class="control-label" for="input1">Senha</label>
				 <div class="controls" id="tUserPassword">
					<input name="data[User][password]" type="password" id="UserPassword" class="span6"/>             	                
					<span class="input-error tooltips" id="sUserPassword"  data-original-title="Campo obrigatorio!">
						<i class="" id="iUserPassword"></i>
					</span>
				 </div>
			  </div>
			  
			  <div class="control-group" id="gUserPasswordConfirmation">
				 <label class="control-label" for="input1">Confirme sua  senha</label>
				 <div class="controls" id="tUserPasswordConfirmation">
					<input name="data[User][password_confirmation]" type="password" id="UserPasswordConfirmation" class="span6" />                
					<span class="input-error tooltips" id="sUserPasswordConfirmation"  data-original-title="As senha não são iguais!">
						<i class="" id="iUserPasswordConfirmation"></i>
					</span>
				 </div>
			  </div>
						
			  <div class="form-actions">			 
				 <button type="submit" class="btn btn-primary">Salvar</button>
				 <button type="button" class="btn" onclick="cancelar()">Cancelar</button>
			  </div>
		   </form>                                                                               
		   <!-- END FORM-->
		</div>	<?php } else {			header('Location: http://admin.nocambui.com.br');			exit;		  } ?>	
<?php echo $this->end(); ?>
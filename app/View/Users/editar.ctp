<?php 
	$this->extend('Common/user');
	
?>

<?php echo $this->start('conteudo'); ?>
	<div class="widget-body">		
		<!-- BEGIN FORM-->
	  	 			<?php echo $this->Form->create('User', array(
						'inputDefaults' => array(
							'label' => false,
							'div' => false
							),
						'class'=>'form-horizontal',

						));
					?>	
         
          <div class="control-group">
             <label class="control-label" for="input1">Perfil</label>
             <div class="controls">
             	<?= $this->Form->input('profile',array('options'=>array('publicidade'=>'Acessar Publiciadde', 'admin'=>'Administrador')))?>           
                <span class="help-inline"></span>
             </div>	          	
          </div>

	   	                                                                                   	
          <div class="control-group" id="gUsername">
             <label class="control-label" >Username</label>
             <div class="controls" id="tUsername">
					<?= $this->Form->input('username',array('placeholder'=>"Usuário",))?>
             </div>
          </div>
          
          <div class="control-group" id="gUserPasswordConfirmation">
             <a href="/users/edit/<?= $this->data['User']['id'] ?>">Alterar a senha deste usuário?</a>
          </div>
                    
          <div class="form-actions">			 
          	 <input name="data[User][id]" type="hidden" value="<?= $this->data['User']['id'] ?>"/>
             <button type="submit" class="btn btn-primary">Salvar</button>
             <button type="button" class="btn" onclick="cancelar()">Cancelar</button>
          </div>
       </form>                                                                               
       <!-- END FORM-->
	</div>
<?php echo $this->end(); ?>
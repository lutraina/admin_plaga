<?php 
	$this->extend('Common/mensagem');

	
?>	            
            
<?php echo $this->start('conteudo'); ?>

		<!-- BEGIN FORM-->
	   <form action="" id="ConfigurarContatoForm" class="form-horizontal" id="AtendimentoConfigurarForm" method="post" accept-charset="utf-8">                                                                                     	
          
          <div class="control-group">
             <label class="control-label" for="input1">Titulo</label>
             <div class="controls">
             	<input name="data[Atendimento][titulo]" maxlength="80" type="text" class="span9" id="input1" value="<?= $configurar['Atendimento']['titulo']?>"/>                
                <span class="help-inline"></span>
             </div>
          </div>
          			
          <div class="control-group">
             <label class="control-label" for="input1">E-mail</label>
             <div class="controls">
             	<input name="data[Atendimento][email]" maxlength="80" type="text" class="span9" id="input1" value="<?= $configurar['Atendimento']['email']?>"/>             	             	                
                <span class="help-inline">                	
            	</span>
             </div>
          </div>
          
          <div class="control-group">
             <label class="control-label" for="input1">Telefone</label>
             <div class="controls">
             	<input name="data[Atendimento][telefone]" maxlength="80" type="text" class="span9" id="input1" value="<?= $configurar['Atendimento']['telefone']?>"/>                
                <span class="help-inline"></span>
             </div>
          </div>          
                                                          

          <div class="control-group">
             <label class="control-label" for="input1">Endereço</label>
             <div class="controls">
             	<textarea name="data[Atendimento][endereco]" class="span9  " placeholder="Ex: Av. Brasil, 1453, Rio de Janeiro, RJ" cols="30" rows="6" id="inputRemarks"><?= $configurar['Atendimento']['endereco']?></textarea>             	                
                <span class="help-inline"></span>
             </div>
          </div> 
		
          <div class="control-group">
             <label class="control-label" for="inputRemarks">Informações</label>
             <div class="controls">
             	<textarea name="data[Atendimento][texto]" class="span9  " cols="30" rows="6" id="inputRemarks"><?= $configurar['Atendimento']['texto']?></textarea>                
             </div>
          </div>
          
          <div class="form-actions">
			 <input type="hidden" name="data[Atendimento][id]" id="AtendimentoId" value="<?= $configurar['Atendimento']['id']?>"/>
             <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
       </form>                                                                               
       <!-- END FORM-->

<?php echo $this->end(); ?>
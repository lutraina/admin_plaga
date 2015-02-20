<?php 
	$this->extend('Common/newsletters');

	$this->assign('titulo', $title_for_layout);
	$this->assign('titulo_guia', $title_for_layout);
	$this->assign('subtitulo', $title_for_layout);	
?>	            
            
<?php echo $this->start('conteudo'); ?>
	<div id="content">
		<div class="widget-body">		
			<!-- BEGIN FORM-->
		   <form action="" id="FormNewsletter" class="form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data">    
		   	                                                                                 	
	          <div class="control-group">
	             <label class="control-label" for="input1">Assunto</label>
	             <div class="controls">
	             	<input name="data[Newsletter][assunto]" maxlength="145" type="text" class="span6"/>                
	                <span class="help-inline"></span>
	             </div>
	          </div>  
	          
	          <div class="control-group">
	             <label class="control-label" for="input1">Mensagem</label>
	             <div class="controls">
	             	<textarea name="data[Newsletter][mensagem]" cols="30" rows="6" id="SlideshowTexto" class="span6"></textarea>                
	                <span class="help-inline"></span>
	             </div>
	          </div> 	                    	           	                                                             	         	
	                       
	          <div class="form-actions">
		         <button type="submit" class="btn btn-primary">Enviar</button>		         
	          </div>
	       </form>                                                                               
	       <!-- END FORM-->
		</div>
	</div>	
<?php echo $this->end(); ?> 

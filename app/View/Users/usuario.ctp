<?php $this->extend('Common/user'); ?>	            
            
<?php echo $this->start('conteudo'); ?>

	<?php echo $this->Form->create('User', array(
	    'inputDefaults' => array(
	        'label' => false,
	        'div' => false
	    	),
	    'id'=>'',//FormCadastroCliente
	    'class'=>'stdform stdform2',
	    'enctype'=>'multipart/form-data',
	    'action'=>'add',
	    'method'=>'post'
		));
	?>	
		<div class="widgetbox ">
		   <h4 class="widgettitle">Dados de Acesso</h4>
		   <div class="widgetcontent nopadding">
			    <p>		    	
			    	<label>File Upload</label>
					<div class="field">				
					    <div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="input-append">
						<div class="uneditable-input span3">
						    <i class="iconfa-file fileupload-exists"></i>
						    <span class="fileupload-preview"></span>
						</div>
						<span class="btn btn-file">
							<span class="fileupload-new">Selecionar imagem</span>
							<span class="fileupload-exists">Alterar</span>			
							<?= $this->Form->input('User.img',array('type'=>'file'))?>
						</span>
						<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
						</div>
					    </div>
					</div>
				</p>
				
				<p>
					<label>Nome Completo</label>
					 <span class="field">
						<?= $this->Form->input('User.nome',array('class'=>'input-xxlarge'))?>
					</span>
				</p>
				   	
				<p>
					<label>E-mail</label>
					 <span class="field">
					<?= $this->Form->input('User.username',array('class'=>'input-xxlarge'))?>
					</span>
				</p>		
				
				<p>
					<label>Senha</label>
					 <span class="field">
					<?= $this->Form->input('User.password',array('type'=>'password','class'=>'input-xxlarge'))?>
					</span>
				</p>
				
				<p>
					<label>Confirmar senha</label>
					 <span class="field">
					<?= $this->Form->input('User.password_confirmation',array('type'=>'password','class'=>'input-xxlarge'))?>																		
					</span>
				</p>									
				<?= $this->Form->input('User.perfil',array('type'=>'hidden','value'=>'usuario'))?>	
		    </div><!--widgetcontent-->
		</div><!--widget-->
		
		<div class="widgetbox ">   
		   <h4 class="widgettitle">Níveis de acesso</h4>
		   <div class="widgetcontent nopadding">
				<p>
					<label>Newsletter</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.newsletter',array('class'=>'checkbox')); ?>Newsletter <br />										
					</span>
				</p>
				<p>
					<label>Nossos Doces</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.doces',array('class'=>'checkbox')); ?>Nossos Doces <br />										
					</span>
				</p>				
				<p>
					<label>Franquias</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.franquias',array('class'=>'checkbox')); ?>Franquias <br />										
					</span>
				</p>			
				<p>
					<label>Conectividade</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.conectividade',array('class'=>'checkbox')); ?>Connectividade <br />										
					</span>
				</p>					
				<p>
					<label>Hotsite</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.suafranquia',array('class'=>'checkbox')); ?>Seja um Franqueado <br />
					 	<?= $this->Form->checkbox('User.permissao.boloterapia',array('class'=>'checkbox')); ?>Boloterapia <br />
					 	<?= $this->Form->checkbox('User.permissao.momento',array('class'=>'checkbox')); ?>Sabor do Momento <br />										
					</span>
				</p>
				<p>
					<label>Certificado</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.certificado',array('class'=>'checkbox')); ?>Certificado <br />					 											
					</span>
				</p>
				<p>
					<label>Blog</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.blog',array('class'=>'checkbox')); ?>Blog <br />					 											
					</span>
				</p>													
				<p>
					<label>Banners</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.banners',array('class'=>'checkbox')); ?>Banners <br />					 											
					</span>
				</p>
				<p>
					<label>Atendimento</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.reclame',array('class'=>'checkbox')); ?>Reclamações <br />
					 	<?= $this->Form->checkbox('User.permissao.imprensa',array('class'=>'checkbox')); ?>Imprensa <br /> 
					 	<?= $this->Form->checkbox('User.permissao.franquia',array('class'=>'checkbox')); ?>Franquia <br />
					 	<?= $this->Form->checkbox('User.permissao.config',array('class'=>'checkbox')); ?>Configurar E-mail <br />
					 	<?= $this->Form->checkbox('User.permissao.curriculo',array('class'=>'checkbox')); ?>Curriculo <br />
					 	<?= $this->Form->checkbox('User.permissao.dpto_mensagem',array('class'=>'checkbox')); ?>Mensagens Departamentos <br />
					 	<?= $this->Form->checkbox('User.permissao.dpto_crud',array('class'=>'checkbox')); ?>Cadastrar departamentos <br />					 						 						 						 										
					</span>
				</p>		
				<p>
					<label>A Sodiê</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.historia',array('class'=>'checkbox')); ?>História <br />
					 	<?= $this->Form->checkbox('User.permissao.videos',array('class'=>'checkbox')); ?>Sodiê TV <br />
					 	<?= $this->Form->checkbox('User.permissao.parceiros',array('class'=>'checkbox')); ?>Parceiros <br />										
					</span>
				</p>
				<p>
					<label>Usuários</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.usuario',array('class'=>'checkbox')); ?>Usuários <br />					 										
					</span>
				</p>
				<p>
					<label>Slideshow</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.slideshow',array('class'=>'checkbox')); ?>Slideshow <br />					 										
					</span>
				</p>
				<p>
					<label>Mensagem da Central</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.central',array('class'=>'checkbox')); ?>Mensagem da Central <br />					 										
					</span>
				</p>
				<p>
					<label>Qtd KG Vendidos</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.quilos',array('class'=>'checkbox')); ?>Qtd KG Vendidos <br />					 										
					</span>
				</p>
				<p>
					<label>Pauta de preços</label>
					 <span class="field">
					 	<?= $this->Form->checkbox('User.permissao.pauta',array('class'=>'checkbox')); ?>Pauta de preços <br />					 										
					</span>
				</p>																																	
		    </div><!--widgetcontent-->
		</div><!--widget-->		
		
		<div class="widgetbox ">   
		   <h4 class="widgettitle"></h4>
		   <div class="widgetcontent nopadding">
				<p class="stdformbutton">
					<button class="btn btn-primary">Salvar</button>
					<button type="reset" class="btn">Limpar campos</button>
				</p>
		    </div><!--widgetcontent-->
		</div><!--widget-->				
	<?= $this->Form->end(null)?>	
<?php echo $this->end(); ?> 

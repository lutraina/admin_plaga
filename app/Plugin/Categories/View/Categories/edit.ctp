<?php $this->extend('/Common/categories'); ?>
<?= $this->start('Common_Content') ?>
	<div class="widget-box transparent">
		<div class="widget-body">
			<div class="widget-main">
				<?php echo $this->Form->create('Category', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false
				    	),
				    'class'=>'stdform stdform2',
				   	'enctype'=>'multipart/form-data'
					));
				?>	
					<p>
						<label>Nome</label>
						 <span class="field">
							<?= $this->Form->input('name',array('class'=>'span8','type'=>'text'))?>	
						</span>
					</p>						
					<p>
						<label>Url <small>(Deixe em branco para preenchimento automático) </small></label>
						 <span class="field">
							category/<?= $this->Form->input('url',array('class'=>'span4','type'=>'text'))?>	
						</span>
					</p>						
					<?php if(isset($display)): ?>	
						<hr />				
						<p>
							<label>
								<b>Atenção!</b><br />
								<small>Usar apenas para categorias de estabelecimentos. Ex: Nome da categoria = 'Pizzaria', o type seria 'gastronomia' tudo em minusculo e sem as aspas.</small>
							</label>
							 <span class="field">
								Menu(Tipo): <?= $this->Form->input('menu',array('class'=>'span4','type'=>'text','placeholder'=>'Esse campo é de configuração avançada'))?>	
							</span>
						</p>						
					<?php endif; ?>																		
			        <p class="stdformbutton">
			        	<?= $this->Form->input('id',array('type'=>'hidden'))?>
			        	<?= $this->Form->input('type',array('type'=>'hidden'))?>
			            <button class="btn btn-primary btn-mini">Salvar</button>
			             <a href="/categories/index/<?= $type ?>" class="btn btn-mini">Cancelar(sair)</a>
			        </p>
				<?= $this->Form->end(null)?>   
			</div><!--/widget-main-->
		</div><!--/widget-body-->
	</div><!--/widget-body-->
<?php echo $this->end(); ?>

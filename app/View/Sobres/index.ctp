<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Sobre
			<small>
				<i class="icon-double-angle-right"></i>
				sobre o no-cambuí
			</small>

		</h1>
	</div><!--/.page-header-->
	
	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box transparent">
					<div class="widget-body">
						<div class="widget-main">
							<?php echo $this->Form->create('Sobre', array(
								    'inputDefaults' => array(
								        'label' => false,
								        'div' => false
								    	),
								    'class'=>'stdform stdform2',
									));
								?>	
								<p>
									<label>Institucional (Quem somos)</label>
									 <span class="field">
										<?= $this->Form->input('texto',array('class'=>'span8','type'=>'textarea'))?>	
									</span>
								</p>	
		
						        <p class="stdformbutton">
						        	<?= $this->Form->input('id',array('type'=>'hidden'))?>	
						            <button class="btn btn-primary btn-mini">Salvar</button>
						        </p>
							<?= $this->Form->end(null)?>   
						</div><!--/widget-main-->
					</div><!--/widget-body-->
				</div><!--/widget-box-->
			</div>
		</div>
		<div class="hr hr32 hr-dotted"></div>
		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->
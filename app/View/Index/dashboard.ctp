<div id="page-content" class="clearfix">
	<div class="page-header position-relative">
		<h1>
			Painel administrativo
			<small>
				<i class="icon-double-angle-right"></i>
				No Cambuí
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<!--PAGE CONTENT BEGINS HERE-->

		<div class="alert alert-block alert-success">
			<button type="button" class="close" data-dismiss="alert">
				<i class="icon-remove"></i>
			</button>

			<i class="icon-ok green"></i>

			Bem vindo ao
			<strong class="green">
				CMS Mediappeal 
				<small>(v1.0.1)</small></strong>, a maneira mais fácil de você administrar o conteúdo do seu site.
		</div>

		<div class="space-6"></div>

		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="lighter">
							<i class="icon-star  orange"></i>
							Últimas Avaliações (Aguardando desbloqueio)
						</h4>

						<div class="widget-toolbar">
							<a href="<?= $_URL ;?>#" data-action="collapse">
								<i class="icon-chevron-up"></i>
							</a>
						</div>
					</div>

					<div class="widget-body">
						<div class="widget-main no-padding">
							<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
							    <thead>
							        <tr>
							        	<th style="width:70px; text-align: center">Data</th>
							        	<th>Empresa</th>
							            <th>Avaliações</th>
							            <th>Melhor para?</th>
							            <th>Comentário</th>
							          	<th>Status</th>
							            <th style="width:120px;">Ação</th>
							        </tr>
							    </thead>
							    <tbody>
								    <?php foreach($reviews as $review): ?>
								    	<tr>
								    		<td style="text-align: center"><?= date('d/m/Y H:i', strtotime($review['Review']['created'])); ?></td>
								    		<td><?= $review['Business']['name']; ?></td>	
								    		<td style="width:120px;">
								    			<b>Servico: 	</b> <?= $review['Review']['servico']; ?> <br />
								    			<b>Atendimento: </b> <?= $review['Review']['atendimento']; ?> <br />
								    			<b>Ambiente: 	</b> <?= $review['Review']['ambiente']; ?> <br />
								    		</td>
								    		<td><?= $review['Review']['melhor']; ?></td>
								    		<td><?= $review['Review']['comentario']; ?></td>
								    		<td><?= $review['Review']['status']; ?></td>		     	                 	            	            		           
											<td class="center acao" style="text-align: left;">
												<div class="btn-group">
													
													<a class="btn btn-mini btn-info" href="/reviews/edit/<?= $review['Review']['id']; ?>/<?= $review['Review']['status'] =='bloqueado' ? 'desbloqueado' : 'bloqueado' ; ?>"><?= $review['Review']['status'] =='bloqueado' ? '<i class="icon-thumbs-up bigger-125"></i>' : '<i class="icon-thumbs-down bigger-125"></i>' ; ?>  </a>
													<a href="/reviews/delete/<?= $review['Review']['id']; ?>" class="btn btn-mini btn-danger" title="Deletar" onclick="return confirm(&#039;Ao excluir esta avaliação? &#039;);"> <i class="icon-trash bigger-125"></i> </a>
													
												</div>	
											</td>
										</tr> 
								    <?php endforeach; ?>
							     </tbody>
							</table>							
						</div><!--/widget-main-->
					</div><!--/widget-body-->
				</div><!--/widget-box-->
			</div>
		</div>



		

		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->
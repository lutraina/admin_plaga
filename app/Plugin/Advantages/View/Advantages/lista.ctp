<!--basic styles-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link href="<?= $_URL ;?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= $_URL ;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/font-awesome/css/font-awesome.min.css" />

		<!--[if IE 7]>
			<link rel="stylesheet" href="<?= $_URL ;?>themes/font-awesome/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/prettify.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>css/style.css" />
		<!--fonts-->

		<link rel="stylesheet" href="<?= $_URL ;?>http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8.min.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8-responsive.min.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8-skins.min.css" />
		
		<script src="<?= $_URL ;?>themes/js/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
<?php if(count($vantagens)>0):?>
<div style="margin:0 auto; max-width: 70%">
	<h1><?= $vantagens[0]['Advantage']['title'] ?></h1>
	<table class="table table-bordered table-hover" id="tab_list"><!-- block table => table-infinite -->
	    <thead>
	        <tr>
	        	<th style="width:70px; text-align: center">Qntd</th>
	        	<th style="width:70px; text-align: center">Cod</th>
	        	<th>Nome</th>
	        	<th style="width:75px; text-align: center">Data Inicial</th>
	        	<th style="width:75px; text-align: center">Data Final</th>
	        	<th style="width:75px; text-align: center">Tirado em</th>
	           
	        </tr>
	    </thead>
	    <?php foreach($vantagens as $key => $vantagen): ?>
			<tbody>
		    	<tr>
		    		<td style="width:70px; text-align: center">
						<?= ++$key ?>
		    		</td>
		    		<td style="width:70px; text-align: center">
						<?= $vantagen['User_has_advantage']['cod']; ?>
		    		</td>
		    		<td><?= $vantagen['User']['name']; ?></td>	
		    		<td style="width:70px; text-align: center">
						<?= date("d/m/Y H:i:s", strtotime($vantagen['Advantage']['date_start'])); ?>
		    		</td>
		    		<td style="width:70px; text-align: center">
						<?= date("d/m/Y H:i:s", strtotime($vantagen['Advantage']['date_end'])); ?>
		    		</td>
		    		<td style="width:70px; text-align: center">
						<?= date("d/m/Y", strtotime($vantagen['User_has_advantage']['created'])); ?>
		    		</td>
				</tr> 
		    </tbody>
	    <?php endforeach; ?>
	</table>
	
<hr />
<a href="/advantages">Voltar</a>	
</div>

<?php else: ?>
	Não exite nenhum ticket retirado.	
<?php endif; ?>
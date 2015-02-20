<?php $this->extend('Common/user'); ?>	 	 

<?php echo $this->start('conteudo'); ?>
<div class="row-fluid">	 
        <div class="span6">
            <table class="table table-bordered table-invoice">
            	<?php if($usuario['User']['img']){ ?>
	                <tr>
	                    <td class="width30"></td>
	                    <td class="width70">
	                    	<img src="<?= $files_url ?>A<?= $usuario['User']['img'] ?>" alt="imagem"/>
	                    </td>
	                </tr>
	            <?php } ?>    
                <tr>
                    <td class="width30">Nome Completo</td>
                    <td class="width70"><strong><?= $usuario['User']['nome']?></strong></td>
                </tr>                
                <tr>
                    <td class="width30">CPF</td>
                    <td class="width70"><?= $usuario['User']['cpf']?></td>
                </tr>
                <tr>
                    <td class="width30">RG</td>
                    <td class="width70"><?= $usuario['User']['rg']?></td>
                </tr> 
                <tr>
                    <td class="width30">E-mail</td>
                    <td class="width70"><strong><?= $usuario['User']['username']?></strong></td>
                </tr>                                 
                <tr>
                    <td class="width30">Perfil</td>
                    <td class="width70"><?= $usuario['User']['perfil']?></td>
                </tr>                                               
            </table>           
        </div>	
		<div class="span6">
	        <table class="table table-bordered table-invoice">
	            <tr>	            	
	                <td class="width">Ação</td>
	                <td class="width80p">
	                	<div class="f-right">														
					 	<?php if($usuario['User']['status'] == 0){ ?>
							<a href="/status/alterar/User/<?=$usuario['User']['id']; ?>/1/view" class="btn btn-info" title="Desbloquear" onclick="return confirm(&#039;Deseja mesmo ativar este usuario?&#039;);">
								<i class="iconfa-ok"></i> Ativar
							</a>&nbsp;
						<?php }else{ ?>
							<a href="/status/alterar/User/<?=$usuario['User']['id']; ?>/0/view" class="btn btn-warning" title="Bloquear" onclick="return confirm(&#039;Deseja mesmo desativar este usuario?&#039;);">
								<i class="iconfa-remove"></i> Desativar
							</a>&nbsp;
						<?php } ?>
						</div>                        
	                </td>
	            </tr>    
                <tr>
                    <td class="width30">Endereço:</td>
                    <td class="width70">                    	
                    	<?php if(!empty($usuario['Endereco'])){ ?>
                        <strong><?= $usuario['Endereco']['cidade']?> - <?= $usuario['Endereco']['estado']?></strong> <br />
                        <?= $usuario['Endereco']['endereco']?>, <?= $usuario['Endereco']['numero']?>,
                        <?= $usuario['Endereco']['bairro']?>, <?= $usuario['Endereco']['cep']?>
                        <?php } ?>                                                
                    </td>
                </tr>
                <tr>
                    <td class="width30">Franquia</td>
                    <td class="width70">
                    	<?php if($usuario['User']['franquias_id'] != null){ ?>
                        	<a href="/franquias/view/<?= $usuario['User']['franquias_id']?>">Veja sua franquia</a>
                        <?php }else{ ?>
                        	Este usuário não possui franquia.
                        <?php } ?>		                                          
                    </td>
                </tr>                	                       
	        </table>	        
	   </div>
</div><!--row-fluid-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#tab_list').dataTable( {
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']]
            /*
            ,"bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "600px"*/
        });
        
    });
</script>
<?php echo $this->end(); ?>


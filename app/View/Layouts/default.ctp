<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CMS Mediappeal 1.0.1 (beta) - No Cambuí</title>
		<meta name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		 
		<!--basic styles-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<link href="http://admin.plaga.com.br/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="http://admin.plaga.com.br/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="http://admin.plaga.com.br/themes/font-awesome/css/font-awesome.min.css" />

		<!--[if IE 7]>
			<link rel="stylesheet" href="http://admin.plaga.com.br/themes/font-awesome/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="http://admin.plaga.com.br/themes/css/prettify.css" />
		<link rel="stylesheet" href="http://admin.plaga.com.br/css/style.css" />
		<!--fonts-->

		<link rel="stylesheet" href="http://admin.plaga.com.br/http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="http://admin.plaga.com.br/themes/css/w8.min.css" />
		<link rel="stylesheet" href="http://admin.plaga.com.br/themes/css/w8-responsive.min.css" />
		<link rel="stylesheet" href="http://admin.plaga.com.br/themes/css/w8-skins.min.css" />
		
		<script src="http://admin.plaga.com.br/themes/js/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="http://admin.plaga.com.br/themes/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='themes/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
		</script>
		
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>-->
		
		
		<!--basic scripts-->
		<script src="/DataTables/media/js/jquery.dataTables.js"></script>
		
		<!--<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
	    <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js"></script>
	    <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushXml.js"></script>
	    <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js"></script>
	    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shCore.css" rel="stylesheet" type="text/css" />
	    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
	    -->
	    <!-- END Additional Styles/Scripts -->
	    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
   
		<script>
			
		$(document).ready(function() {
			
		    $('#tab_list').dataTable({
		        "aaSorting": [[ 1, "asc" ]]
		    });
		    $(function() {
				$( "#accordion" ).accordion();
				$( "#sortable" ).sortable({
					placeholder : 'fantome',
					update: function(event, ui) {
						//$('#loading-animation').show(); // Show the animate loading gif while waiting
						var liste = ui.item.parent('ul');
						var pos = 0;
						$(liste.find('li')).each(function(){
							pos++;
							
							var id = $(this).find('div').attr('id');
							//alert(id + ':' + pos);
							var arrayId = id;
							//alert(arrayId);
							var arrayPos = pos;
							//alert(arrayPos);
							//$(this).find('input.positionInput').val(pos);
							
							$.ajax({
			                    async: true,
			                    type: 'post',
			                    data: {id:id, pos:pos},
			                    url: '/businesses/abas_ordem',
			                    complete: function (request, json) {
			                   	}
			                });
							
						});
                          
		            }
				});
				$( ".sortable" ).disableSelection();
			});
		   
		    var add_abas_dialog      = $(".add_abas_dialog"); //Add button ID
		    
		    var add_abas      = $(".add_abas_btn"); //Add button ID
		    
		    
		    $(add_abas_dialog).click(function(e){ //on add input button click
		       e.preventDefault();
		       $( "#dialog" ).slideDown();
		     });  
		       
	       $(add_abas_dialog).click(function(e){ //on add input button click
		       e.preventDefault();
		       
		       $('#dialog').dialog({
			        modal: true,
			        autoOpen: true,
			        open: function () {
			        	//$(this).html('<img src="'+params.baseurl+'/img/ajax/loading.gif" /> Chargement en cours...');
			        	//$(this).load('/Elements/abas');
			   		},
			        title: 'Adicionar aba',
			        height: 450,
			        width: 800,
			        buttons: {
			           Salvar: function(){
			           		$('textarea').each(function () {
						    	var id_nic = $(this).attr('id');
						    //	alert(id_nic);
						    	var nic = nicEditors.findEditor(id_nic);
						    //	alert(nic);
						    	if (nic) nic.saveContent();
							}); 
			           		var seral = $('#AbasBusinessEditForm').serialize();
			           	
			           		$.ajax({
			                    async: true,
			                    type: 'post',
			                    data: seral,
			                    url: '/businesses/abas',
			                    complete: function (request, json) {
			                    	$('#dialog').dialog("close");
			                   	}
			                });   		
			           },
			            Fechar: function () {
			                $('#dialog').dialog("close");
			            }
			        },
				});
			});
			
			
			var edit_abas_dialog      = $(".edit_abas_dialog"); //Add button ID
$(edit_abas_dialog).click(function(e){ //on add input button click
		       e.preventDefault();
		       var id = $(this).attr('id');
		       var aba = 'edit_sim';
		       
		       $.ajax({
                    async: true,
                    type: 'post',
                    //data: seral,
                    url: '/businesses/edit/id:'+id,
                    complete: function (request, json) {
                    	//alert(request.responseText);
                    	$('#dialog').html(request.responseText);
                   	}
                });
		       
		       
		       
		       $('#dialog').dialog({
		       	
		       	
			        modal: true,
			        autoOpen: true,
			        open: function () {
			   		},
			        title: 'Editar aba',
			        height: 450,
			        width: 800,
			        buttons: {
			           //Editar: function(){
			           	//	e.preventDefault();
	/*$('textarea').each(function () {
    	var id_nic = $(this).attr('id');
    	var nic = nicEditors.findEditor(id_nic);
    	if (nic) nic.saveContent();
	});*/
	
//var nicE = new nicEditors.findEditor('id_conteudo');
//var data_id = $('#AbasBusinessId').val();
//var data_conteudo = $('#AbasBusinessEditForm').find('.nicEdit-main').text();
//var data_titulo = $('#AbasBusinessTitulo').val();
        
//var seral = $('#AbasBusinessEditForm').serialize();
	/*$.ajax({
	    async: true,
	    type: 'post',
	    data: {data_id:data_id, data_conteudo:data_conteudo, data_titulo:data_titulo},
	    url: '/businesses/abas_edit',
	    complete: function (request, json) {
	    	$('#dialog').dialog("close");
	   	}
	});  	
			           },*/
			            Fechar: function () {
			                $('#dialog').dialog("close");
			            }
			        },
				});
			});

			
		    $(".salvar_aba").click(function(e){ //on add input button click
		       e.preventDefault();
		      // for ( instance in CKEDITOR.instances )
				//CKEDITOR.instances[instance].updateElement();

		//var data = $('#myForm').serializeArray();

		       var seral = $('#AbasBusinessAbasForm').serialize();
       	alert(seral);
       	
       	$('textarea').each(function () {
		    var id_nic = $(this).attr('id');
		    alert(id_nic);
		    var nic = nicEditors.findEditor(id_nic);
		    console.log(nic);
		    if (nic) nic.saveContent();
		}); 

       		$.ajax({
       			beforeSubmit:  function()
				{
				        /* Before submit */
				   /* for ( instance in CKEDITOR.instances )
				    {
				        CKEDITOR.instances[instance].updateElement();
				    }*/
				},
               // async: true,
                type: 'post',
                //modal: true,
                data: seral,
                url: '/businesses/abas',
                complete: function (request, json) {
               	}
            });   
		       
		       
		       
		     
			});
	   });
		</script>
		
		
		<script src="http://admin.plaga.com.br/js/galeria.js"></script>
		
		<script src="http://admin.plaga.com.br/bootstrap/js/bootstrap.min.js"></script>
		
		<script src="http://admin.plaga.com.br/themes/js/jquery.ui.touch-punch.min.js"></script>
		
		
		<script src="http://admin.plaga.com.br/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
		<link rel="stylesheet" href="http://admin.plaga.com.br/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css" />
		<script>$("textarea").jqte();</script>
		
		<script src="http://admin.plaga.com.br/themes/js/jquery.slimscroll.min.js"></script>
		<script src="http://admin.plaga.com.br/themes/js/jquery.easy-pie-chart.min.js"></script>
		<script src="http://admin.plaga.com.br/themes/js/jquery.sparkline.min.js"></script>
		
		<script src="http://admin.plaga.com.br/themes/js/jquery.flot.min.js"></script>
		<script src="http://admin.plaga.com.br/themes/js/jquery.flot.pie.min.js"></script>
		<script src="http://admin.plaga.com.br/themes/js/jquery.flot.resize.min.js"></script>


		<!-- Java script geral para datas (data.js)-->
		<script src="http://admin.plaga.com.br/js/data.js"></script>
		

				
		<!--w8 scripts-->

		<script src="http://admin.plaga.com.br/themes/js/w8-elements.min.js"></script>
		<script src="http://admin.plaga.com.br/themes/js/w8.min.js"></script>
		<script src="http://admin.plaga.com.br/nicEditor/nicEdit.js"></script>
		
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
			
			
		</script>
		
		<!--inline scripts related to this page-->

	
	    
	    
	</head>

	<body class="skin-2">
		
		<div class="wrap"></div>
		<?php echo $this->element('telaCheiaFoto'); ?>
		
		<?= $this->element('nav-top'); ?>

		<div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="http://admin.plaga.com.br/#">
				<span></span>
			</a>

			<?= $this->element('nav-left'); ?>

			<div id="main-content" class="clearfix">
				<!--<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="http://admin.plaga.com.br/">Início</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Painel de controle - Projeto Orelinha</li>
					</ul>
				</div>-->
				
				<?php echo $this->Session->flash(); ?>
				<?= $this->fetch('content'); ?>
				
				
			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="http://admin.plaga.com.br/#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>



		
	</body>
</html>

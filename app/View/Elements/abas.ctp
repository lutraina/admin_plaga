<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas();
    });
    
    var scntDiv = $('#p_scents');
     var i = $('#p_scents p').size() + 1;
     var elm = $('.textarea_conteudo').css('width','750');
    // var elm = $('<TEXTAREA NAME="description[]"></TEXTAREA><a href="#" id="remScnt">Remove</a>').appendTo(scntDiv);

     new nicEditor().panelInstance(elm[0]);
    // elm.wrap($('<p/>'));
    
    //var divClass = $('.nicEdit-main');
    //var elm = $('<span id="id_conteudo"></span>').appendTo(divClass);
	//$('nicEdit-main').attr('id', 'blabla');
         
</script>

<div id="dialog" title="Adicionar aba" style="display:block;">
	<p>
		<?php 
		
		//debug($aba_conteudo);
		echo $this->Form->create('AbasBusiness', array(
				    'inputDefaults' => array(
				        'label' => false,
				        'div' => false,
				         'legend' => false
				    	),
				   	'enctype'=>'multipart/form-data'
					));
		
		if(isset($aba_conteudo) && !empty($aba_conteudo)){
			 echo $this->Form->input('id', array('class'=>'id_aba', 'type'=>'hidden', 'value' => $aba_conteudo['AbasBusiness']['id']));
			 echo $this->Form->input('titulo', array('class'=>'', 'type'=>'text', 'value' => $aba_conteudo['AbasBusiness']['titulo'], 'style' => 'width:750px;'));
			 echo $this->Form->input('conteudo', array('id' => 'id_conteudo', 'class'=>'textarea_conteudo', 'type'=>'textarea', 'value' => $aba_conteudo['AbasBusiness']['conteudo'], 'style' => 'width:750x; height:300px;'));
		} else {
			echo $this->Form->input('business_id', array('class'=>'id_aba', 'type'=>'hidden', 'value' => '213'));
			echo $this->Form->input('titulo', array('class'=>'', 'type'=>'text', 'style' => 'width:750px;'));
			echo $this->Form->input('conteudo', array('id' => 'id_conteudo', 'class'=>'textarea_conteudo', 'type'=>'textarea', 'style' => 'width:750px; height:300px;'));
		} ?>
	</p>
	<?php echo $this->end(); ?>
	<button class="btn_editar_abas">Salvar</button>
	<button class="btn_deletar_abas">Deletar</button>
</div>

<script>
$(function () {
//alert('oi');


var edit_abas_btn = $(".btn_editar_abas"); //Add button ID
$(edit_abas_btn).click(function(e){
	e.preventDefault();
	/*$('textarea').each(function () {
    	var id_nic = $(this).attr('id');
    	var nic = nicEditors.findEditor(id_nic);
    	if (nic) nic.saveContent();
	});*/
	
//var nicE = new nicEditors.findEditor('id_conteudo');
var data_id = $('#AbasBusinessId').val();
var data_conteudo = $('#AbasBusinessEditForm').find('.nicEdit-main').text();
var data_titulo = $('#AbasBusinessTitulo').val();
        
//var seral = $('#AbasBusinessEditForm').serialize();
	$.ajax({
	    async: true,
	    type: 'post',
	    data: {data_id:data_id, data_conteudo:data_conteudo, data_titulo:data_titulo},
	    url: '/businesses/abas_edit',
	    complete: function (request, json) {
	    	$('#dialog').dialog("close");
	   	}
	});  	
});	 		

var deletar_abas_btn = $(".btn_deletar_abas"); //Add button ID
$(deletar_abas_btn).click(function(e){
	e.preventDefault();
	/*$('textarea').each(function () {
    	var id_nic = $(this).attr('id');
    	var nic = nicEditors.findEditor(id_nic);
    	if (nic) nic.saveContent();
	});*/
	
//var nicE = new nicEditors.findEditor('id_conteudo');
var data_id = $('#AbasBusinessId').val();
//var data_conteudo = $('#AbasBusinessEditForm').find('.nicEdit-main').text();
//var data_titulo = $('#AbasBusinessTitulo').val();
        
//var seral = $('#AbasBusinessEditForm').serialize();
	$.ajax({
	    async: true,
	    type: 'post',
	    data: {data_id:data_id},
	    url: '/businesses/abas_delete',
	    complete: function (request, json) {
	    	$('#dialog').dialog("close");
	   	}
	});  	
});	 		



});
</script>
			
			

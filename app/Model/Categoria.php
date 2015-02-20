<?php
    /**
     * Modulo da tabela categorias, correnpondente ao Blog da Sodie
	 * 
	 * @package 	app.model
	 * @version     3.0
     * @author  	Alisson Barbosa Ferreira <alissonbf@hotmail.com>
     */ 
	class Categoria extends AppModel {
	    public $name = 'Categoria';    
		public $validate = array(
		    'titulo' => array(		        
		        'rule'		=>	'notEmpty',		        
		        'message'   => 'Campo obrigatório!'
		    ),		    		    
		);
		
        public $hasMany = array(
           'Post'=> array(
                'className'=>'Post',
                'foreignKey' => 'categorias_id',
                'order'      => 'Post.id DESC'
            ));		
	}


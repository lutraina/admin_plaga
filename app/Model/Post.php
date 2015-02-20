<?php
    /**
     * Modulo da tabela post, correnpondente ao Blog da Sodie
	 * 
	 * @package 	app.model
	 * @version     3.0
     * @author  	Alisson Barbosa Ferreira <alissonbf@hotmail.com>
     */ 
	class Post extends AppModel {
	    public $name = 'Post';    
		public $validate = array(
		    'titulo' => array(		        
		        'rule'		=>	'notEmpty',		        
		        'message'   => 'Campo obrigatório!'
		    ),
		    'texto' => array(		        
		        'rule'		=>	'notEmpty',		        
		        'message'   => 'Campo obrigatório!'
		    ),
		    'tag' => array(		        
		        'rule'		=>	'notEmpty',		        
		        'message'   => 'Campo obrigatório!'
		    ),		    		    
		);
		
        public $belongsTo = array(
           'Categoria'=> array(
                'className'=>'Categoria',
                'foreignKey' => 'categorias_id'
            )            
        );		
	}


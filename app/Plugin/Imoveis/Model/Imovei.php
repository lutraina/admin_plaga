<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class Imovei extends ImoveisAppModel{
        public $name = "Imovei";
		
        public $hasMany = array(
           'File'=> array(
                'className'=>'File',
                'foreignKey' => 'imoveis_id',
                'order'      => 'File.ordem ASC'
            	)
			);
            
    } // END
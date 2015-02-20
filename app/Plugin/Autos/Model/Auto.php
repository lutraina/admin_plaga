<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class Auto extends AutosAppModel{
        public $name = "Auto";
		
        public $hasMany = array(
           'File'=> array(
                'className'=>'File',
                'foreignKey' => 'autos_id',
                'order'      => 'File.ordem ASC'
            	)
			);
		public $belongsTo = array(
			'Businesses'
		);
            
    } // END
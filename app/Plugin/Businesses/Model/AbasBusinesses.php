<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class AbasBusiness extends BusinessesAppModel{
        public $name = "AbasBusiness";
		public $order = "AbasBusiness.order asc";
		
		var $belongsTo = array(
		    'Business'
		);
		
        /*public $hasMany = array(
           'Review'=> array(
                'className'=>'Review',
                'foreignKey' => 'businesses_id',
                
            	),'File'=> array(
                'className'=>'File',
                'foreignKey' => 'businesses_id',
                'order'      => 'File.ordem ASC'
            	)
				
			);
		public $belongsTo = array(
           'Category'=> array(
                'className'=>'Category',
                'foreignKey' => 'categories_id',
                
            	)				
			);
		
            */
    } // END
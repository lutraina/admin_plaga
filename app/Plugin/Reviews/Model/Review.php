<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class Review extends ReviewsAppModel{
        public $name = "Review";
		
        public $belongsTo = array(
           'Business'=> array(
                'className'=>'Business',
                'foreignKey' => 'businesses_id',
            	)
			);
            
    } // END
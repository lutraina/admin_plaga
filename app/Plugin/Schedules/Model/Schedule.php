<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class Schedule extends SchedulesAppModel{
        public $name = "Schedule";
		
        public $belongsTo = array(
           'Category'=> array(
                'className'=>'Category',
                'foreignKey' => 'categories_id',
                
            	)
			);
            
    } // END
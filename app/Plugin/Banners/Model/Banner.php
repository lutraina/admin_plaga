<?php	
    /**
     * Model que referencia a tabela Modas
     *
     * @package 	app.model
	 * @version     2.0
     * @author  	@alexrili
     */ 
    class Banner extends BannersAppModel{
        public $name = "Banner";
		
        public $hasMany = array(
           'Click'=> array(
                'className'=>'Click',
                'foreignKey' => 'banners_id',
                
            	),'User_has_banner'=> array(
                'className'=>'User_has_banner',
                'foreignKey' => 'banners_id',
                
            	)
			);
            
    } // END
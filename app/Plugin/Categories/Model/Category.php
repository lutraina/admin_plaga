<?php

	class Category extends AppModel{
		//other code
		public $name = "Category";
		
		var $hasMany = array(
		    'Schedule' => array(
		    'className' => 'Schedule',
		    'foreignKey' => 'categories_id',
		    'dependent'=> true,
		    ),
		    
		    'News' => array(
		    'className' => 'News',
		    'foreignKey' => 'categories_id',
		    'dependent'=> true,
		    ),		    
		    
		    'Business' => array(
		    'className' => 'Business',
		    'foreignKey' => 'categories_id',
		    'dependent'=> true,
		    )
			
			
		);
}

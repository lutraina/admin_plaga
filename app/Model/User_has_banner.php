<?php
	class User_has_banner extends AppModel{
		
		public $name = 'User_has_banner';
		
		public $belongsTo = array('Banner'=>array(
			'className'=>'Banner',
			'foreignKey'=>'banners_id'
		));
		
		
	}

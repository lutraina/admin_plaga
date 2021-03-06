<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class IndexController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Index';

/**
 * Dashboard
 * Mostra a pagina inicial
 *
 * @param mixed What page to display
 * @return void
 */
	public function dashboard() {
		$this->set('activeIndex','active');	
			
		
			$this->loadModel('Reviews.Review');
			$conditions = array('Review.status'=>'bloqueado');
			$this->set('reviews',$this->Review->find('all',array('limit'=>10,'order'=>array('Review.id'=>'DESC'),'conditions'=>$conditions)));
			
			
	}
}

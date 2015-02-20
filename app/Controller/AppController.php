<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $helpers     = array('Js' => array('Jquery'),'Html','Session','Form','Status','Caracter');
    public $components = array(
    	'RequestHandler',
        'Session',
        'Message',
        'Caracter',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'index', 'action'=>'index'),
            'logoutRedirect'=>array('controller'=>'users', 'action'=>'login'),
            'authError'=>"Você não pode acessar esta página.",
            'authorize'=>array('Controller')
        )
    );
	public $uses = array('Businesses.AbasBusiness');
		
	/*******************************************************************************
   		Metodos usados na autenticação dos usuarios
	******************************************************************************/
	
    public function isAuthorized($user) {
        return true;
    }	
	
	
	
	public function beforeFilter(){
		
		// USUARIO LOGADO		        
        $this->set('logged_in', $this->Auth->loggedIn());
		$user = $this->Auth->user();
		if($user){
			$this->loadModel('User');
			$current_user = $this->User->find('first',array(
				'conditions'=>array('User.id'=>$user['id']),        	
			));		
	        $this->set('current_user', $current_user['User']);   
		}
		
		$this->set('contatosNaoLidos', $this->_getContato());
		
		// PATH ABSOLUTO 
		$this->set('_URL','http://'.$_SERVER['HTTP_HOST'].'/');
		$this->set('_URL_FILE','http://files.nocambui.com.br/');
		
		
	}

	public function _getContato(){
		
			$this->loadModel('Mensagems.Mensagem');
			$conditions = array('Mensagem.lida'=>'nao_lida');       
			
			return $this->Mensagem->find('all',array('conditions'=>$conditions,'order'=>array('id'=>'DESC')));
            

	}
}

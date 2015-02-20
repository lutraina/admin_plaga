<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 *  Rotas do plugin Schedule(Agenda)1.0.0.
 */
 
 

   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/mensagems/edit/*', array('plugin'=>'Mensagems','controller' => 'Mensagems', 'action' => 'edit'));
	
	Router::connect('/mensagems/delete/*', array('plugin'=>'Mensagems','controller' => 'Mensagems', 'action' => 'delete'));
	Router::connect('/mensagems/view/*', array('plugin'=>'Mensagems','controller' => 'Mensagems', 'action' => 'view'));
						
	Router::connect('/mensagems/configurar/*', array('plugin'=>'Mensagems','controller' => 'Mensagems', 'action' => 'configurar'));						
						
						
										
 	/*
	 * method index()
	 * Redireciona qualquer coisa que entre no plugin para o método index (funciona como um scape pra erros)
	 * */
	Router::connect('/mensagems/*', array('plugin'=>'Mensagems','controller' => 'Mensagems', 'action' => 'index'));


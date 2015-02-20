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
	 * method add()
	 * redireciona a url schedule/add para o method add do plugin
	 * */
	Router::connect('/schedules/add/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'add'));
		
   	/*
	 * method calendar()
	 * redireciona a url schedule/calendar para o method calendar  do plugin que é repsosavel por formar o calendário
	 * */
	Router::connect('/schedules/calendar/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'calendar'));
		
		
   	/*
	 * method view()
	 * redireciona a url schedule/view para o method calendar  do plugin
	 * */
	Router::connect('/schedules/view/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'view'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/schedules/edit/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'edit'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/schedules/getBusinesses/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'getBusinesses'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/schedules/delete/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'delete'));
																				
 	/*
	 * method index()
	 * Redireciona qualquer coisa que entre no plugin para o método index (funciona como um scape pra erros)
	 * */
	Router::connect('/schedules/*', array('plugin'=>'Schedules','controller' => 'Schedules', 'action' => 'index'));





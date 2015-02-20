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
	Router::connect('/autos/add/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'add'));
		

   	/*
	 * method view()
	 * redireciona a url schedule/view para o method calendar  do plugin
	 * */
	Router::connect('/autos/view/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'view'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/autos/edit/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'edit'));
		
   	/*
	 * method delete()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/autos/delete/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'delete'));
	
	
	
	Router::connect('/autos/getCategory/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'getCategory'));
				
	Router::connect('/autos/filtro/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'filtro'));
	
   	/*
	 * method up()
	 * redireciona a url sc
	 * */
	Router::connect('/autos/up/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'up'));
	
 	/*
	 * method up()
	 * redireciona a url sc
	 * */
	Router::connect('/autos/confirmar_arquivos/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'confirmar_arquivos'));
					
	
   	/*
	 * method up()
	 * redireciona a url sc
	 * */
	Router::connect('/autos/up_fotos/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'up_fotos'));
					
																				
 	/*
	 * method index()
	 * Redireciona qualquer coisa que entre no plugin para o método index (funciona como um scape pra erros)
	 * */
	Router::connect('/autos/*', array('plugin'=>'Autos','controller' => 'Autos', 'action' => 'index'));


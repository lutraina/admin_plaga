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
	Router::connect('/businesses/add/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'add'));
		

   	/*
	 * method view()
	 * redireciona a url schedule/view para o method calendar  do plugin
	 * */
	Router::connect('/businesses/view/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'view'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/edit/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'edit'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/abas/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'abas'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/abas_edit/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'abas_edit'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/abas_delete/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'abas_delete'));
		
   	/*
	 * method edit()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/abas_ordem/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'abas_ordem'));
		
   	/*
	 * method delete()
	 * redireciona a url schedule/edit para o method calendar  do plugin 
	 * */
	Router::connect('/businesses/delete/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'delete'));
	
	
	
	Router::connect('/businesses/getCategory/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'getCategory'));
				
	Router::connect('/businesses/filtro/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'filtro'));
	
	
	
   	/*
	 * method up()
	 * redireciona a url sc
	 * */
	Router::connect('/businesses/up/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'up'));
					
	
   	/*
	 * method up()
	 * redireciona a url sc
	 * */
	Router::connect('/businesses/up_fotos/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'up_fotos'));
	
	Router::connect('/businesses/confirmar_arquivos/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'confirmar_arquivos'));
						
															
 	/*
	 * method index()
	 * Redireciona qualquer coisa que entre no plugin para o método index (funciona como um scape pra erros)
	 * */
	Router::connect('/businesses/*', array('plugin'=>'Businesses','controller' => 'Businesses', 'action' => 'index'));


<?php

	/**
	 * Controller responsavel pelos usuarios do sistema
	 *
	 * @package       app.Controller.UsersController
	 * @version       2.0
	 * @author		  Alex Ribeiro <alex@onload.com.br>
	 */
	class UsersController extends AppController{
		public $name = "Users";
		
		
		/**
		 * Metodo onde são colocadas configurações para os components
		 */
		 
		public function beforeFilter(){
			parent::beforeFilter();
            $this->Auth->allow('login','logout','edit','editar','add');
			
			$this->set('activeUsuario', 'active');
			$this->set('index',false);
			$this->set('aniversario',false);
			$this->loadModel('User_has_banner');
			$this->loadModel('Banner');
			
			//isso bloqueia ir para o menu usuarios se o perfil for pub. mas nao da pra fazer o logout
			/*//se user for de perfil 'publicidade', é redirigido
			$user = $this->Auth->user();			 
			if($user['profile'] == 'publicidade'){
				$this->redirect('/publicidades');
			}*/

 


		}

		public function index(){
			$this->set('usuarios', $this->User->find('all',array('conditions'=>array('User.profile'=>'publicidade'))));
			
			
		}
		
		
		public function user_cadastro(){
			$this->set('usuarios', $this->User->find('all',array('conditions'=>array('User.profile'=>'cliente'))));
		}
		
		public function editar($id=null){
			
			
			
			if($this->data){
				if($this->User->save($this->data)){	
					
					
				if($this->User_has_banner->deleteAll(array('User_has_banner.users_id' => $id), false)){
					foreach($this->request->data['User']['banner'] as $key => $banner){
						$this->User_has_banner->saveMany(array('User_has_banner'=>array('users_id'=>$id,'banners_id'=>$banner)));
					}	
					$this->Session->setFlash($this->Message->success('Usuário editado com sucsso'));
					
				}							
				}
				$this->redirect('/users/index');
			} else {
				$this->data = $this->User->read(null,$id);
				$this->set('banners',$this->Banner->find('all',array('order'=>array('Banner.id'=>'DESC'))));
				$this->set('meus_banners', $this->User_has_banner->find('list',array('fields'=>array('banners_id'),'conditions'=>array('users_id'=>$id))));
							
			}
		}		
		/**
		 * Este metodo faz o usuario "logar" no painel de contprofile
		 */
		public function login(){
			$this->layout = "login";						
			if($this->request->is('post')){
				if($this->Auth->login()){
					
					// récupération de l'ip du client que se connecte
					// si c'est de CFI, de chez Homero ou de chez Luciana l'accès n'est pas bloqué
					$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
					
					if($REMOTE_ADDR == '195.5.205.162' ||  $REMOTE_ADDR =='177.34.21.8' || $REMOTE_ADDR == '83.154.194.160' || $REMOTE_ADDR == '201.82.175.227' || $REMOTE_ADDR =='134.90.138.4'){
							
						//IP CFI = $REMOTE_ADDR
						//IP CHEZ MOI = 83.154.194.160
						//IP CHEZ MEL = 177.34.21.8
						
						
						$user = $this->Auth->user();
						
						if($user['status'] == 0 OR $user['profile'] != 'admin' && $user['profile'] != 'publicidade'){						
							$this->Session->setFlash('Este usuário foi bloqueado!');						
							return $this->redirect($this->Auth->logout());
						} elseif($user['profile'] == 'publicidade'){
							$this->redirect('/publicidades');
						}
						
						$this->redirect($this->Auth->redirect());
					}	
				} else {
					$this->Session->setFlash(
							' 
							Usuário ou senha inválidos', 
							'default', 
							array('class' => 'alert alert-error')
						);
				}
			}
		}
		

		/**
		 * Este metodo faz o usuario sair do painel de controle
		 */
		public function logout(){
		
			$this->redirect($this->Auth->logout());
		}
		
		/**
		 * Este metodo adiciona um novo usuario 
		 */
		public function add($tipo = null){
			$this->set(array('title_for_layout'=>'Nossas Lojas','breadcrumbs'=>'Novo Franqueado'));
			$this->set('activeFranquias', 'active');
			$this->set('activeNovoFranqueado', 'active');
			$this->set('activeUsuario', null);

			$this->User->set($this->data);
			if($this->User->validates()){
				if($this->request->is('post')){
										
					if(!empty($this->data['User']['img']['name'])){					
			
					
							$file = $this->Upload->getFile(array(
								'type'=>'fotos',
								'path'=>null,
								'file'=> $this->request->data['Post']['img'],					
								'size'=>array('A'=>array(800)))
							);
						
						$this->request->data['User']['img'] = $file;										
					}else{
						$this->request->data['User']['img'] = '';
					}											
					if($this->User->saveAll($this->data)){
							$this->Session->setFlash(
								'<button class="close" data-dismiss="alert">×</button> 
								Usuário salvo com sucesso!', 
								'default', 
								array('class' => 'alert alert-success')
							);		
							
							
							$idUser = $this->User->id; 
							$this->loadModel('User_has_banner');
							foreach($this->request->data['User']['banner'] as $key => $banner){
								$this->User_has_banner->saveMany(array('User_has_banner'=>array('users_id'=>$idUser,'banners_id'=>$banner)));
							}	
								
											
						}	

						
						$this->redirect('/users/index');
									 
				}
			}

			$this->set('banners',$this->Banner->find('all',array('order'=>array('Banner.id'=>'DESC'))));
		}

		
		
		/**
		 * Este metodo muda a altera a senha do usuario logado.
		 */		
		public function edit($id=null){
						
			$current_user = $this->Auth->user();
			
			if($id==null){
				$id = $current_user['id'];
				$action = '/';
			}else{
				$action = '/users/index';
			}
			
			if($this->data){
				$this->User->set($this->data);
				if($this->User->validates()){
					$old = $this->User->read(null,$id);
					if($old['User']['password'] == AuthComponent::password($this->data['User']['oldpassword'])){
						$this->request->data['User']['id'] = $id;
						if($this->User->save($this->data)){
							$this->Session->setFlash(
								'<button class="close" data-dismiss="alert">×</button> 
								Sua senha foi alterada com sucesso!', 
								'default', 
								array('class' => 'alert alert-success')
							);
						}


						$this->redirect($action);
					}else{
						$this->Session->setFlash(
							'<button class="close" data-dismiss="alert">×</button> 
							A senha atual não está correta!', 
							'default', 
							array('class' => 'alert alert-error')
						);
																								
						$this->redirect('/users/edit');
					}
				}else{
					$this->Session->setFlash(
							'<button class="close" data-dismiss="alert">×</button> 
							As senhas digitadas não são iguais!', 
							'default', 
							array('class' => 'alert alert-error')
						);
					 $this->render('edit');
				}
			}			
		}


	}


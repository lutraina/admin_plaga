<?php
	/**
	 * Controller responsavel pelos usuarios do sistema
	 *
	 * @package       app.Controller.UsersController
	 * @version       2.0
	 * @author		 Alisson Barbosa Ferreira <alissonbf@hotmail.com>
	 */
	class PublicidadesController extends  AppController{
		public $name = "Publicidades";
		
		
		/**
		 * Metodo onde são colocadas configurações para os components
		 */
		 
		public function beforeFilter(){
			parent::beforeFilter();

			
			/*
			 * Interesses (na newsletter)
			 * */

			$this->set('activeIndex','active');
			$this->loadModel('User_has_banner');
	
			$this->loadModel('Click');
		}


		public function index(){			
			$user = $this->Auth->user();
			$banners = $this->User_has_banner->find('all',array('conditions'=>array('users_id'=>$user['id'])));
			
			foreach($banners as $key=>$banner){
				$banners[$key]['Click'] = $this->Click->find('count',array('conditions'=>array('banners_id'=>$banner['Banner']['id'])));
			}
			
			
			$this->set('banners',$banners);		
				
		}

		public function banners(){
			$user = $this->Auth->user();	
			if($this->request->data){
				if($this->User_has_banner->deleteAll(array('User_has_banner.users_id' => $user['id']), false)){
					foreach($this->request->data['User']['interesse'] as $key => $interesse){
						$this->User_has_banner->saveMany(array('User_has_banner'=>array('users_id'=>$user['id'],'banners_id'=>$interesse)));
					}	
					$this->Session->setFlash($this->Message->success('Suas banners foram editadas com sucesso!'));
					$this->redirect('/users/banners');
				}
			}
			
			$this->set('banners', $this->Interesse->find('all'));
			
			$this->set('meus_banners', $this->User_has_banner->find('list',array('fields'=>array('banners_id'),'conditions'=>array('users_id'=>$user['id']))));
			
		}
		

	}

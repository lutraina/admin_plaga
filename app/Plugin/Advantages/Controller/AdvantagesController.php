<?php
	class AdvantagesController extends AdvantagesAppController{
		public $title = 'Advantages';
		
		//components
		public $components = array('Advantages.Message','Advantages.Upload','Advantages.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activeadvantages','active');
			
			
			/*
			 * NEGA O ACESSO AO USUÁRIO QUE VE APENAS PUBLICIADEDE
			 * */
			$user = $this->Auth->user();
			if($user['status'] == 0 && $user['profile'] != 'admin'){						
            	$this->Session->setFlash('Você não tem permissão pra acessar essa área');						
				$this->redirect('/users/logout');
			}
		}
		
		public function index(){
			$this->set('advantages',$this->Advantage->find('all',array('order'=>array('Advantage.id'=>'DESC'))));
		}
		
		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('advantages',$this->Advantage->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Advantage->delete($id)){
				$this->Session->setFlash($this->Message->success('Post excluído com sucesso!'));
				
			}
			$this->redirect('/advantages');
		}
		
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			
			
			if($this->request->data){
				
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if(!empty($this->request->data['Advantage']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Advantage']['image'],					
						'size'=>array('410x480'=>array(410,480),'226x263'=>array(226,263)))
					);
					$this->request->data['Advantage']['image'] = $file;
				}else{
					$this->request->data['Advantage']['image'] = NULL;
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Advantage']['url'])){
					$this->request->data['Advantage']['url'] = $this->Caracter->semEspecial($this->request->data['Advantage']['title']);
				}
				
				if($this->Advantage->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/advantages/index');
				}
				$this->redirect('/advantages/index'); // Independente de salvar ou não ele redireciona para a index
				
			}

		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null){

			if($this->request->data){
				
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if(!empty($this->request->data['Advantage']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Advantage']['image'],					
						'size'=>array('410x480'=>array(410,480),'226x263'=>array(226,263)))
					);
					$this->request->data['Advantage']['image'] = $file;
				}else{
					$this->request->data['Advantage']['image'] = $this->request->data['Advantage']['image_hidden'];
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Advantage']['url'])){
					$this->request->data['Advantage']['url'] = $this->Caracter->semEspecial($this->request->data['Advantage']['title']);
				}
				
				if($this->Advantage->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/advantages/index');
				}
				$this->redirect('/advantages/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Advantage->read(null,$id);
			}
		}
		
		public function lista($id=null){
			
			$this->layout = 'ajax';
			
			
			$this->loadModel('User_has_advantage');
			
			$this->set('vantagens', $this->User_has_advantage->find('all',array('conditions'=>array('User_has_advantage.advantages_id'=>$id))));
			
			
			
		}

		
	}

<?php
	class NetworksController extends NetworksAppController{
		public $name = 'Networks';
		
		//components
		public $components = array('Networks.Message','Networks.Upload','Networks.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activenetworks','active');
		}
		
		public function index(){
			$this->set('networks',$this->Network->find('all',array('order'=>array('Network.id'=>'DESC'))));
		}
		
		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('networks',$this->Network->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Network->delete($id)){
				$this->Session->setFlash($this->Message->success('Network excluído com sucesso!'));
				
			}
			$this->redirect('/networks');
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
				if(!empty($this->request->data['Network']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Network']['image'],					
						'size'=>array())
					);
					$this->request->data['Network']['image'] = $file;
				}else{
					$this->request->data['Network']['image'] = ' ';
				}
				// Fim da verificação

				
				if($this->Network->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/networks/index');
				}
				$this->redirect('/networks/index'); // Independente de salvar ou não ele redireciona para a index
				
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
				if(!empty($this->request->data['Network']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Network']['image'],					
						'size'=>array())
					);
					$this->request->data['Network']['image'] = $file;
				}else{
					$this->request->data['Network']['image'] = $this->request->data['Network']['image_hidden'];
				}
				// Fim da verificação
					

				
				if($this->Network->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/networks/index');
				}
				$this->redirect('/networks/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Network->read(null,$id);
			}
		}

		
	}

<?php
	class BannersController extends BannersAppController{
		public $name = 'Banners';
		
		//components
		public $components = array('Banners.Message','Banners.Upload','Banners.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activebanners','active');
			
						$this->loadModel('Banners.Banner');

		}
		
		public function index(){
			$this->set('banners',$this->Banner->find('all',array('order'=>array('Banner.id'=>'DESC'))));
		}

		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('banners',$this->Banner->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Banner->delete($id)){
				$this->Session->setFlash($this->Message->success('Banner excluído com sucesso!'));
				
			}
			$this->redirect('/banners');
		}
		
		public function delete_posicao($id=null){
			$this->loadModel('Local_banner');
			$this->autoRender = false;
			if($this->Local_banner->delete($id)){
				$this->Session->setFlash($this->Message->success('Referência excluída com sucesso!'));
				
			}
			$this->redirect('/banners/posicao');
		}				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			//$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
			
			if($this->request->data){
				
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if(!empty($this->request->data['Banner']['image']['name'])){

					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Banner']['image'],					
						'size'=>array())
					);
					$this->request->data['Banner']['image'] = $file;
				}else{
					$this->request->data['Banner']['image'] = ' ';
				}
				// Fim da verificação
			

				
			if($this->Banner->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/banners/index');
				}
				$this->redirect('/banners/index'); // Independente de salvar ou não ele redireciona para a index
				
			}

		}
	/*
		 * @method add()
		 * no params
		 * */
		public function posicao(){
			
			//$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
			$this->loadModel('Local_banner');
			if($this->request->data){

				if($this->Local_banner->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/banners/posicao');
				}
				$this->redirect('/banners/posicao'); // Independente de salvar ou não ele redireciona para a index
				
			}
			
			$this->set("posicaos",$this->Local_banner->find('all'));

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
				if(!empty($this->request->data['Banner']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Banner']['image'],					
						'size'=>array())
					);
					$this->request->data['Banner']['image'] = $file;
				}else{
					$this->request->data['Banner']['image'] = $this->request->data['Banner']['image_hidden'];
				}
				// Fim da verificação
					
				$this->request->data['Banner']['data_start'] =  $this->request->data['Banner']['data_start']." ".$this->request->data['Banner']['hora_start'];
				$this->request->data['Banner']['data_end'] =  $this->request->data['Banner']['data_end']." ".$this->request->data['Banner']['hora_end'];
				
				if($this->Banner->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/banners/index');
				}
				
				$this->redirect('/banners/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				//$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
				$this->data = $this->Banner->read(null,$id);
			}
		}
		

		/*
		 * Retorna uma lista array('id'=>'Titulo') da categoria
		 * Não necesita de paramtros, pois trás todas as categorias cadastradas.
		 * */
		/*public function getCategory($type = null){
			$this->layoyt = 'ajax';
			$this->loadModel('Local_banner');
			$this->set('categories', 
				$this->Local_banner->find('list', array(
					'fields' => array('referencia', 'nome'), 
					'conditions' => array('categories' => $type)
			)));
		}*/
		
		public function getCategory($type = null){
			$this->layoyt = 'ajax';
			$this->loadModel('Local_banner');
			$this->set('categories', 
				$this->Local_banner->find('list', array(
					'fields' => array('referencia', 'nome'), 
					'conditions' => array('categories' => array('menu', 'lateral'))
			)));
		}
		
	}

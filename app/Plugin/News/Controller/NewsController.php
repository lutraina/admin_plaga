<?php
	class NewsController extends NewsAppController{
		public $name = 'News';
		
		//components
		public $components = array('News.Message','News.Upload','News.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activenews','active');
		}
		
		public function index(){
			$this->set('news',$this->News->find('all',array('order'=>array('News.id'=>'DESC'))));
		}
		
		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('news',$this->News->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->News->delete($id)){
				$this->Session->setFlash($this->Message->success('Post excluído com sucesso!'));
				
			}
			$this->redirect('/news');
		}
		
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
			
			if($this->request->data){
				
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if(!empty($this->request->data['News']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['News']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['News']['image'] = $file;
				}else{
					$this->request->data['News']['image'] = ' ';
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['News']['url'])){
					$this->request->data['News']['url'] = $this->Caracter->semEspecial($this->request->data['News']['title']);
				}
				
					/*
					 * Dispara a newsletter
					 * */
					//$this->Newsletter->disparar(8,'http://nocambui.com.br/noticias/ver/'.$this->request->data['News']['url']);
				if($this->News->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					
					
					
					
					
				$this->redirect('/news/index');
				}
				$this->redirect('/news/index'); // Independente de salvar ou não ele redireciona para a index
				
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
				if(!empty($this->request->data['News']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['News']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['News']['image'] = $file;
				}else{
					$this->request->data['News']['image'] = $this->request->data['News']['image_hidden'];
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['News']['url'])){
					$this->request->data['News']['url'] = $this->Caracter->semEspecial($this->request->data['News']['title']);
				}
				
				if($this->News->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/news/index');
				}
				$this->redirect('/news/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
				$this->data = $this->News->read(null,$id);
			}
		}
		

		/*
		 * Retorna uma lista array('id'=>'Titulo') da categoria
		 * Não necesita de paramtros, pois trás todas as categorias cadastradas.
		 * */
		public function _getCategory(){
			$this->loadModel('Category');
			return $this->Category->find('list',array('fields'=>array('id','name'),'conditions'=>array('type'=>'news')));
		}
		
	}

<?php
	class SlidesController extends SlidesAppController{
		public $name = 'Slides';
		
		//components
		public $components = array('Slides.Message','Slides.Upload','Slides.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activeslides','active');
		}
		
		public function index(){
			$this->set('slides',$this->Slide->find('all',array('order'=>array('Slide.id'=>'DESC'))));
		}
		
		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('slides',$this->Slide->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Slide->delete($id)){
				$this->Session->setFlash($this->Message->success('Slide excluído com sucesso!'));
				
			}
			$this->redirect('/slides');
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
				if(!empty($this->request->data['Slide']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Slide']['image'],					
						'size'=>array('635x360'=>array(635,360),'318x177'=>array(318,177)))
					);
					$this->request->data['Slide']['image'] = $file;
				}else{
					$this->request->data['Slide']['image'] = ' ';
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Slide']['url'])){
					$this->request->data['Slide']['url'] = $this->Caracter->semEspecial($this->request->data['Slide']['title']);
				}
				
				if($this->Slide->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/slides/index');
				}
				$this->redirect('/slides/index'); // Independente de salvar ou não ele redireciona para a index
				
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
				if(!empty($this->request->data['Slide']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Slide']['image'],					
						'size'=>array('635x360'=>array(635,360),'318x177'=>array(318,177)))
					);
					$this->request->data['Slide']['image'] = $file;
				}else{
					$this->request->data['Slide']['image'] = $this->request->data['Slide']['image_hidden'];
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Slide']['url'])){
					$this->request->data['Slide']['url'] = $this->Caracter->semEspecial($this->request->data['Slide']['title']);
				}
				
				if($this->Slide->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/slides/index');
				}
				$this->redirect('/slides/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Slide->read(null,$id);
			}
		}
		

		
	}

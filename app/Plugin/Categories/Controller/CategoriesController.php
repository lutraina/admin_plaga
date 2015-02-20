<?php
	class CategoriesController extends CategoriesAppController{
		public $name = 'Categories';
		
		//components
		public $components = array('Categories.Message','Categories.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			
		}
		
		public function index($type=null){
			
			$this->set("type",$type);
			$this->set('active'.$type,'active');
			
			
			$this->set('categories',$this->Category->find('all',array('conditions'=>array('type'=>$type))));
			
			
		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			$this->set("type",$type);
			$this->set('active'.$type,'active');
			
			$this->set('schedules',$this->Category->read(null,$id));
		}
		
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Category->delete($id,true)){
				$this->Session->setFlash($this->Message->success('Categoria excluída com sucesso!'));
				
			}
			$this->redirect('/categories/index/'.$type);
		}
				
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add($type=null){
			$this->set("type",$type);
			$this->set('active'.$type,'active');
			
			if($type=='businesses'){
				$this->set('display',TRUE);
			}
			
			if($this->request->data){
				
				$this->request->data['Category']['type'] = $type;	

				if(empty($this->request->data['Category']['url'])){
					$this->request->data['Category']['url'] = $this->Caracter->semEspecial($this->request->data['Category']['name']);
				}
				
				if($this->Category->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/categories/index/'.$type);
				}
				$this->redirect('/categories/index/'.$type); // Independente de salvar ou não ele redireciona para a index
				
			}

		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null){

			
			
			
			if($this->request->data){
				
				$type = $this->data['Category']['type'];

				if(empty($this->request->data['Category']['url'])){
					$this->request->data['Category']['url'] = $this->Caracter->semEspecial($this->request->data['Category']['name']);
				}
				
				if($this->Category->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/categories/index/'.$type);
				}
				$this->redirect('/categories/index/'.$type); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Category->read(null,$id);
			}

			$this->set("type",$this->data['Category']['type']);
			
			$this->set('active'.$this->data['Category']['type'],'active');
			
			
			if($this->data['Category']['type']=='businesses'){
				$this->set('display',TRUE);
				
			}
		}

	}

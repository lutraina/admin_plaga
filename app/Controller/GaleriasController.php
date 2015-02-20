<?php
	class GaleriasController extends AppController{
		public $name = 'Galerias';
		
		public $components = array('Message');
		public function beforeFilter(){
			parent::beforeFilter();
			
			$this->set('actigalleries', 'active');
		}
		
		public function index(){
			$this->set("galerias",$this->Galeria->find('all',array('conditions'=>array('classe'=>'geral'),'order'=>array('Galeria.id'=>'DESC'))));
		}
		
		public function edit($id=null){
			
			if($this->data){
				if($this->Galeria->save($this->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/galerias');
				}
			}else{
				$this->data = $this->Galeria->read(null,$id);
			}
			$this->set("galerias",$this->Galeria->read(null,$id));
			
		}
		
		public function add($tipo=null){
			$this->autoRender = false;
			
			$data = array('Galeria'=>array('classe'=>'geral'));
			$this->Galeria->save($data);
							
			return $this->Galeria->id;		
		}
		
		public function up($id=null){
			$this->layout = 'ajax';
			$this->loadModel('File');
			$this->set('files', $this->File->find('all',array('conditions'=>array('galerias_id'=>$id,'File.status'=>0),'order'=>array('File.id'=>'DESC'))))	;

		}
	
		
		public function delete($id=null){			
			$this->Galeria->File->deleteAll(array('galerias_id'=>$id));
			if($this->Galeria->delete($id))
						$this->Session->setFlash(
							'<button class="close" data-dismiss="alert">×</button> 
							Excluido com sucesso!', 
							'default', 
							array('class' => 'alert alert-success')
						);
				
			$this->redirect("index");
			
		}
	}

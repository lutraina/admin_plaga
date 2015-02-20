<?php
	class SobresController extends AppController{
		public $name = "Sobres";
		

		
		public function index($id=null){
			$this->set('activesobres','active');
			$this->set('activeinstitucional','active');	
			
			
			if($this->data){
				if($this->Sobre->save($this->data)){
					$this->Session->setFlash($this->Message->success());
				}
			}else{
				$this->data = $this->Sobre->find('first');
			}
		}
	}

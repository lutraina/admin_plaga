<?php
	class AnunciosController extends AppController{
		public $name = "Anuncios";
		

		
		public function index($id=null){
			$this->set('activeanuncios','active');	
			$this->set('activeinstitucional','active');	
			
			if($this->data){
				if($this->Anuncio->save($this->data)){
					$this->Session->setFlash($this->Message->success());
				}
			}else{
				$this->data = $this->Anuncio->find('first');
			}
		}
	}

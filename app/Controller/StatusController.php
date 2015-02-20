<?php
	class StatusController extends AppController{
		public $name = "Status";
						
		/**
		 * Este metodo bloqueia
		 * 
		 * @param int $id ID do canal
		 */
		public function alterar($model=null,$id=null,$status=null,$page=null,$tipo=null){
			$this->autoRender = false;
			$this->loadModel($model);
			
			$item = array($model=>array('id'=>$id,'status'=>$status));			
			if($this->$model->save($item)){
				$this->Session->setFlash(
					'<button class="close" data-dismiss="alert">×</button> 
					Alterado com sucesso!', 
					'default', 
					array('class' => 'alert alert-success')
				);	
			}
			if($model == 'User'){
				$this->redirect('/users/index');
			}
			
			if($model == 'Video'){
				$this->redirect('/'.$model.'s/'.$page.'/'.$id);
			}

			if($model == 'Momento'){
				$this->redirect('/sabor_momento/videos');
			}

			
			if($tipo!=null){
				$this->redirect('/'.$model.'/'.$page.'/'.$id.'/'.$tipo);						
			}elseif($page=='view'){
				$this->redirect('/'.$model.'s/'.$page.'/'.$id);
			}elseif($page=='index'){	
				$this->redirect('/'.$model.'s/');		
			}else{
				$this->redirect('/'.$model.'/'.$page);	
			}				
		}
		public function excluir($model=null,$id=null,$page=null,$categoria=null){		
			$this->autoRender = false;
			$this->loadModel($model);
		
			if($this->$model->delete($id,true)){
					$this->Session->setFlash($this->Message->success('Excluído com sucesso!'));	
			}

			$this->redirect('/'.$model.'s');	
						
		}

		public function mediakit($id=null,$tipo=null,$valor=null){
			$this->loadModel('MediaKit');
			if($tipo == 'delete'){				
				$post = $this->MediaKit->read(null,$id);
				$path  = WWW_ROOT.'files/mediakit/'.$post['MediaKit']['arquivo'];
				if(file_exists($path)){	                                					
                	unlink($path);					
				}
				if($this->MediaKit->delete($id))					
					$this->Session->setFlash(
						'<button class="close" data-dismiss="alert">×</button> 
						Excluído com sucesso!', 
						'default', 
						array('class' => 'alert alert-success')
					);
				$this->redirect(array('controller'=>'MediaKits','action'=>'index'));
			} else if($tipo == 'alterar'){				
				$item = array('MediaKit'=>array('id'=>$id,'status'=>$valor));			
				if($this->MediaKit->save($item)){
					$this->Session->setFlash(
						'<button class="close" data-dismiss="alert">×</button> 
						Alterado com sucesso!', 
						'default', 
						array('class' => 'alert alert-success')
					);	
				}
				$this->redirect(array('controller'=>'MediaKits','action'=>'index'));								
			}
		}
		
		/**
		 * Salva a nova ordenação das imagens da galeria
		 */
		public function salvar($ordem){
			$this->autoRender = False;						
			$array = explode(',', $ordem);
			
			$this->loadModel('File');			
			foreach ($array as $key => $foto_id) {
				if(!empty($foto_id)){
					$foto = array('File'=>array('id'=>$foto_id,'ordem'=>$key));
					$this->File->save($foto);
				}
			}
		}		
		
		public function destaque($model=null,$id=null,$status=null,$page=null,$tipo=null){
			$this->autoRender = false;
			$this->loadModel($model);
			
			$item = array($model=>array('id'=>$id,'destaque'=>$status));			
			if($this->$model->save($item)){
				$this->Session->setFlash(
					'<button class="close" data-dismiss="alert">×</button> 
					Alterado com sucesso!', 
					'default', 
					array('class' => 'alert alert-success')
				);	
			}
			if($tipo!=null){
				$this->redirect('/'.$model.'/'.$page.'/'.$id.'/'.$tipo);						
			}elseif($page=='view'){
				$this->redirect('/'.$model.'s/'.$page.'/'.$id);
			}elseif($model=='Preco'){
				$this->redirect('/'.$model.'s/'.$page.'/'.$id);	
			}elseif($model=='Galeria'){
				$this->redirect('/'.$model.'s/'.$page.'/'.$id);			
			}else{
				$this->redirect('/'.$model.'/'.$page);	
			}				
		}		
		
	}

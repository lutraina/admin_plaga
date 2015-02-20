<?php
	class FilesController extends AppController{
		public $name = "Files";
		
		public $components = array('Upload','Message');
		
		public function index(){
			$this->autoRender = false;
			
				
				$type = 'fotos';
				if(@$_POST['perfil'] == 3){
					$type = 'videos';
				}
				
				
				foreach($_FILES['upl']['name'] as $key => $fileUp){
					//$width = $_FILES['upl']['name']
					list($width, $height, $type, $attr) = getimagesize($_FILES['upl']['name']);

  //echo "Image width " . $width;
					$file = $this->Upload->getFile(array(
						'type' => $type,
						'path' => 'fotos/',
						'file' => array('name'=>$_FILES['upl']['name'][$key],'type'=>$_FILES['upl']['type'][$key],'tmp_name'=>$_FILES['upl']['tmp_name'][$key],'error'=>$_FILES['upl']['error'][$key],'size'=>$_FILES['upl']['size'][$key]),					
						'size' => array('640x480' => array($width, $height)))
					);
					
					
					if($file){
						$this->File->saveMany(array('File'=>array('name'=>$file,'galerias_id'=>@$_POST['galerias_id'])));
						
					}
				
				}
				//return TRUE;
				
				

		}	
		
		public function saveImageName($id=null){
			$this->autoRender = false;
			$data = array("File"=>array('titulo'=>$_POST['titulo'],'id'=>$id));
			
			$this->File->save($data);
			
			return true;
		}		
		
		
		
		
			
		public function img_perfil(){
			$this->autoRender = false;
			$user = $this->Auth->user();
				$file = $this->Upload->getFile(array(
					'type'=>'fotos',
					'path'=>@$user['id'],
					'file'=>@$_FILES['upl'],					
					'size'=>array('A'=>array(415,625))
					)
				);
				
				
				if($file){
					$this->File->save(array('File'=>array('name'=>$file,'users_id'=>$user['id'])));
					echo $file;
				}
				
						
						
		
		}		
		
		public function delete($id=null){
			$this->autoRender = false;
			$this->File->delete($id);
			return TRUE;
		}
		
		
		/*
		public function saveAlbum( $perfil=null, $tipo=null,$id = null){
			$this->autoRender = false;	
			$this->LoadModel('Galeria');			
				
				if($id==null){
					$user = $this->Auth->user();			
					$data = array('Galeria'=>array('users_id'=>$user['id'],'perfil'=>$perfil,'tipo'=>$tipo));
					
					$this->Galeria->save($data);
					$id = $this->Galeria->id; 
					
					return $id;
				}else{
					$data = array('Galeria'=>array(
						'id'=>$id,
						'titulo'=>$_POST['titulo'],
						'texto'=>$_POST['texto'],
						'onde'=>$_POST['onde'],
						'quando'=>$_POST['quando'],
						'time'=>$_POST['time'],
						
						));
					$this->Galeria->save($data);
					return true;
				}
		}
		*/
		public function deleteAlbum($id=null){
			$this->autoRender = false;	
			$this->LoadModel('Galeria');
			
			//$this->Galeria->File->deleteAll(array('galerias_id'=>$id));
			
			$this->Galeria->delete($id);
			
			
			

		}
		

		public function confirmar_arquivos($Galeria_id=null,$tipo=null){
			$this->autoRender = false;	
			$this->LoadModel('Galeria');
			
				if($tipo == 2){
					
					$this->File->deleteAll(array('galerias_id'=>$Galeria_id,'File.status'=>0));
					
					$this->Galeria->deleteAll(array('Galeria.id'=>$Galeria_id,'Galeria.status'=>0));
					
				}else if($tipo == 1){
					$this->Galeria->updateAll(array('status'=>1),array('Galeria.id'=>$Galeria_id));
					$this->File->updateAll(array('status'=>1),array('galerias_id'=>$Galeria_id));
					$this->Session->setFlash($this->Message->success());
					
				}
		
		
			return $Galeria_id;
				
			
		}
	
	}

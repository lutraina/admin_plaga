<?php
	class ImoveisController extends ImoveisAppController{
		public $name = 'Imoveis';
		
		//components
		public $components = array('Imoveis.Message','Imoveis.Upload','Imoveis.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activeclassificados','active');
			$this->LoadModel('File');
		}
		
		public function index(){
			$this->set('imoveis',$this->Imovei->find('all',array('order'=>array('Imovei.id'=>'DESC'))));
		}
		
		public function filtro($type=null){
			$this->set('imoveis',$this->Imovei->find('all',array('conditions'=>array('Imovei.type'=>$type),'order'=>array('Imovei.id'=>'DESC'))));
		}		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('imoveis',$this->Imovei->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Imovei->delete($id)){
				$this->Session->setFlash($this->Message->success('Post excluído com sucesso!'));
				
			}
			$this->redirect('/imoveis');
		}
		
		public function up_fotos(){
			$this->autoRender = false;
			$type = 'fotos';			
			foreach($_FILES['upl']['name'] as $key => $fileUp){
				$file = $this->Upload->getFile(array(
					'type'=>$type,
					'path'=>'fotos/',
					'file'=> array('name'=>$_FILES['upl']['name'][$key],'type'=>$_FILES['upl']['type'][$key],'tmp_name'=>$_FILES['upl']['tmp_name'][$key],'error'=>$_FILES['upl']['error'][$key],'size'=>$_FILES['upl']['size'][$key]),					
					'size'=>array('A'=>array(635,250),'B'=>array(150,115)))
				);
				if($file){
					$this->File->saveMany(array('File'=>array('name'=>$file,'imoveis_id'=>@$_POST['imoveis_id'])));
				}
			}		
		}		
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			$anoHoje = date('Y');
			
			for($i = ($anoHoje+1); $i > ($anoHoje-40); $i--){
				$anos[$i] =$i;
			}
			
			
			$this->set('anos',$anos);
			
			if($this->request->data){


				
				if($this->Imovei->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/imoveis/view/'.$this->Imovei->id);
				}
				$this->redirect('/imoveis/index'); // Independente de salvar ou não ele redireciona para a index
				
			}

		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null){
			$anoHoje = date('Y');
			
			for($i = ($anoHoje+1); $i > ($anoHoje-40); $i--){
				$anos[$i] =$i;
			}
			
			
			$this->set('anos',$anos);
			if($this->request->data){
				
				
				if($this->Imovei->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/imoveis/view/'.$this->Imovei->id);
				}
				$this->redirect('/imoveis/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Imovei->read(null,$id);
			}
		}
		

		/*
		 * Retorna uma lista array('id'=>'Titulo') da categoria
		 * Não necesita de paramtros, pois trás todas as categorias cadastradas.
		 * */
		public function getCategory($type=null){
			$this->loadModel('Category');
			$this->set('categories', $this->Category->find('list',array('fields'=>array('id','name'),'conditions'=>array('Category.menu'=>$type))));
			
			
		}
		
		
		public function confirmar_arquivos($imoveis_id=null,$tipo=null){
			$this->autoRender = false;	
			
			
				if($tipo == 2){
					$this->File->deleteAll(array('imoveis_id'=>$imoveis_id,'File.status'=>0));
					
				}else if($tipo == 1){
					
					$this->File->updateAll(array('status'=>1),array('imoveis_id'=>$imoveis_id));
					$this->Session->setFlash($this->Message->success());
					
				}
		
		
			return $imoveis_id;
				
			
		}
		public function saveImageName($id=null){
			
			$this->autoRender = false;
			$data = array("File"=>array('titulo'=>$_POST['titulo'],'id'=>$id));
			
			$this->File->save($data);
			
			return true;
		}		
				
		public function up($id=null){
			$this->layout = 'ajax';
			$this->loadModel('File');
			$this->set('files', $this->File->find('all',array('conditions'=>array('imoveis_id'=>$id,'File.status'=>0),'order'=>array('File.id'=>'DESC'))))	;

		}		
		
	}

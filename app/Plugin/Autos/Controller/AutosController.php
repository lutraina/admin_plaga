<?php
	class AutosController extends AutosAppController{
		public $name = 'Autos';
		
		//components
		public $components = array('Autos.Message','Autos.Upload','Autos.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activeclassificados','active');
			$this->LoadModel('File');
		}
		
		public function index(){
			$this->set('autos',$this->Auto->find('all',array(
			'contain' => array('Businesse'),
			'order'=>array('Auto.id'=>'DESC')
			)));
			
			
		}
		
		public function filtro($type=null){
			$this->set('autos',$this->Auto->find('all',array('conditions'=>array('Auto.type'=>$type),'order'=>array('Auto.id'=>'DESC'))));
		}		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('autos',$this->Auto->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Auto->delete($id)){
				$this->Session->setFlash($this->Message->success('Post excluído com sucesso!'));
				
			}
			$this->redirect('/autos');
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
					$this->File->saveMany(array('File'=>array('name'=>$file,'autos_id'=>@$_POST['autos_id'])));
				}
			}		
		}		
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			$this->set('businesses', $this->_getBusinesses()); //Preenche o combobox de categorias
			
			$anoHoje = date('Y');
			
			for($i = ($anoHoje+1); $i > ($anoHoje-40); $i--){
				$anos[$i] =$i;
			}
			
			
			$this->set('anos',$anos);
			
			if($this->request->data){
				//debug($this->request->data);
				
				if($this->Auto->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/autos/view/'.$this->Auto->id);
				}
				$this->redirect('/autos/index'); // Independente de salvar ou não ele redireciona para a index
				
			}

		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null){
			$anoHoje = date('Y');
			
			$this->set('businesses', $this->_getBusinesses()); //Preenche o combobox de categorias
			
			for($i = ($anoHoje+1); $i > ($anoHoje-40); $i--){
				$anos[$i] =$i;
			}
			
			
			$this->set('anos',$anos);
			if($this->request->data){
				
				
				if($this->Auto->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/autos/view/'.$this->Auto->id);
				}
				$this->redirect('/autos/index'); // Independente de salvar ou não ele redireciona para a index
				
			} else{
				
				$this->data = $this->Auto->read(null,$id);
				$business_edit = $this->Business->find('first', array(
				'conditions' => array('Business.id' => $this->data['Auto']['businesses_id'])
				)
				);
				$this->set('business_edit', $business_edit);
				//debug($business_edit);
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
		
		
		public function confirmar_arquivos($autos_id=null,$tipo=null){
			$this->autoRender = false;	
			
			
				if($tipo == 2){
					
					$this->File->deleteAll(array('autos_id'=>$autos_id,'File.status'=>0));
					
					
					
				}else if($tipo == 1){
					
					$this->File->updateAll(array('status'=>1),array('autos_id'=>$autos_id));
					$this->Session->setFlash($this->Message->success());
					
				}
		
		
			return $autos_id;
				
			
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
			$this->set('files', $this->File->find('all',array('conditions'=>array('autos_id'=>$id,'File.status'=>0),'order'=>array('File.id'=>'DESC'))))	;

		}

/*
		 * Retorna uma lista array('id'=>'Titulo') da categoria
		 * Não necesita de paramtros, pois trás todas as categorias cadastradas.
		 * */
		public function _getBusinesses(){
			$this->loadModel('Business');
			
			$businesses =  $this->Business->find('list',array('fields'=>array('id','name'),'order'=>array('name'=>'ASC')));
			
			$b[0] = 'Não';
			
			foreach($businesses as $key => $bisiness){
				$b[$key] = $bisiness;
			}
			
			return $b;
			// $businesses;
		}		
		
		public function getBusinesses($id=null){
			$this->loadModel('Business');
			
			$businesses =  $this->Business->find('first',array('conditions'=>array('Business.id'=>$id)));
			
			$this->set('businesses',$businesses);

		}		
		
	}

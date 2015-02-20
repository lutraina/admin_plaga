<?php
	class BusinessesController extends BusinessesAppController{
		public $name = 'Businesses';
		
		//components
		public $components = array('Businesses.Message','Businesses.Upload','Businesses.Caracter');
		 
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activebusinesses','active');
			
			$this->loadModel('File');
		}
		
		public function index(){
			$this->set('businesses', $this->Business->find('all', array('order'=>array('Business.id'=>'DESC'))));
		}
		
		public function filtro($type=null){
			$this->set('businesses', $this->Business->find('all',array('conditions'=>array('Business.type'=>$type),'order'=>array('Business.id'=>'DESC'))));
		}		
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('businesses',$this->Business->read(null,$id));
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Business->delete($id)){
				$this->Session->setFlash($this->Message->success('Post excluído com sucesso!'));
				
			}
			$this->redirect('/businesses');
		}
		
				
		/*
		 * @method add2()
		 * no params
		 * */
		public function add2(){
		}
			
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			$array_regioes='';
				 $regioes = $this->Regioes->find('all',array(
				 	//'fields'=>array('Regioes.nome_regiao', 'Regioes.id'), 
				 	//'order'=>array('Regioes.nome_regiao'=>'ASC')
					));
					
					foreach($regioes as $key => $regiao){
						$array_regioes[$key] = $regiao;
					}
			$this->set('regioes', $array_regioes);
			//debug($regioes);
			
			if($this->request->data){
				//debug($this->request->data);
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				
				
				
				if($this->request->data['Business']['image']['error']==0){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Business']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['Business']['image'] = $file;
				}else{
					$this->request->data['Business']['image'] = NULL;
				}
				if($this->request->data['Business']['logo']['error']==0){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Business']['logo'],					
						'size'=>array())
					);
					$this->request->data['Business']['logo'] = $file;
				}else{
					$this->request->data['Business']['logo'] = NULL;
				}				
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Business']['url'])){
					$this->request->data['Business']['url'] = $this->Caracter->semEspecial($this->request->data['Business']['name']);
				}
				
				if($this->Business->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/businesses/view/'.$this->Business->id);
				}
				$this->redirect('/businesses/index'); // Independente de salvar ou não ele redireciona para a index
			
			}

		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function abas($type=null){
				
				
			//debug('oi');
			//debug($this->request);
			if($this->request->data){
				debug($this->request->data);
				
				//$this->AbasBusiness->business_id = $this->request->data['AbasBusinesses']['business_id'];
				if($this->AbasBusiness->save($this->request->data)){
					//debug('salvou');
					//$this->Session->setFlash($this->Message->success());
					//$this->redirect('/businesses/view/'.$this->Business->id);
				}
			}	

		}
		
		
		/*
		 * @method edit($id = null);
		 * */
		public function abas_edit($type=null){
				
				
			debug('abas_edit');
			debug($this->request);
			if($this->request->data){
				//debug($this->request->data);
				
				$this->AbasBusiness->id = $this->request->data['data_id'];
				//$this->AbasBusiness->conteudo = $this->request->data['data_conteudo'];
				//$this->AbasBusiness->titulo = $this->request->data['data_titulo'];
				$this->AbasBusiness->saveField('conteudo', $this->request->data['data_conteudo']);
				$this->AbasBusiness->saveField('titulo', $this->request->data['data_titulo']);
				/*if($this->AbasBusiness->save($this->request->data)){
					debug('salvou');
					//$this->Session->setFlash($this->Message->success());
					//$this->redirect('/businesses/view/'.$this->Business->id);
				}*/
			}
		}
		
		/*
		 * @method delete($id = null);
		 * */
		public function abas_delete($type=null){
				
				
			debug('abas_delete');
			debug($this->request);
			if($this->request->data){
				//debug($this->request->data);
				
				$this->AbasBusiness->id = $this->request->data['data_id'];
				if($this->AbasBusiness->delete($this->request->data['data_id'])){
					debug('deletou');
				}
				/*if($this->AbasBusiness->save($this->request->data)){
					debug('salvou');
					//$this->Session->setFlash($this->Message->success());
					//$this->redirect('/businesses/view/'.$this->Business->id);
				}*/
			}
		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function abas_ordem($type=null){
				
				
			//debug('abas_ordem');
			//debug($this->request);
			if($this->request->data){
				//debug($this->request->data);
				
				$this->AbasBusiness->id = $this->request->data['id'];
				//$this->AbasBusiness->conteudo = $this->request->data['data_conteudo'];
				//$this->AbasBusiness->titulo = $this->request->data['data_titulo'];
				$this->AbasBusiness->saveField('ordem', $this->request->data['pos']);
				if($this->AbasBusiness->save($this->request->data)){
					debug('salvou');
					//$this->Session->setFlash($this->Message->success());
					//$this->redirect('/businesses/view/'.$this->Business->id);
				}
			}
		}
			
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null){
		//debug($this->request);
		if(isset($this->request->named['id']) && $this->request->named['id'] != ''){
			
			//$conditions['FluxFinancierCheque.etat'] = ($this->request->named['etat'] == 1 ? array(0, 1) : $this->request->named['etat']);
			//debug($this->request->pass[0]);
			$this->set('aba_conteudo',$this->AbasBusiness->find('first', 
		array('conditions' => array('AbasBusiness.id' => $this->request->named['id']))));
		
		$this->render('/Elements/abas');
		
		}
		
		
		
		//$this->set('businesses', 
		//debug($this->Business->find('first', array('order' => array('Business.id'=> $id))));
		$this->set('businesses',$this->Business->find('first', array('conditions' => array('Business.id' => $id))));
		
			if($this->request->data){
				//debug($this->request->data);
				//debug('oi');
				/*
				 * Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if($this->request->data['Business']['image']['error']==0){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Business']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['Business']['image'] = $file;
				}else{
					$this->request->data['Business']['image'] = $this->request->data['Business']['image_hidden'];
				}
				
				if($this->request->data['Business']['logo']['error']==0){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Business']['logo'],					
						'size'=>array())
					);
					$this->request->data['Business']['logo'] = $file;
				}else{
					$this->request->data['Business']['logo'] = $this->request->data['Business']['logo_hidden'];
				}			

				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Business']['url'])){
					$this->request->data['Business']['url'] = $this->Caracter->semEspecial($this->request->data['Business']['name']);
				}
				
				if($this->Business->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/businesses/view/'.$this->Business->id);
				}
				$this->redirect('/businesses/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				
				$this->data = $this->Business->read(null,$id);
			
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
		
		/*
		 * todos os métodos abaixo são responsaveis por salvar a galeria de fotos dos comércios
		 * */
		public function up_fotos(){
			$this->autoRender = false;
			$type = 'fotos';			
			foreach($_FILES['upl']['name'] as $key => $fileUp){
				$file = $this->Upload->getFile(array(
					'type'=>$type,
					'path'=>'fotos/',
					'file'=> array('name'=>$_FILES['upl']['name'][$key],'type'=>$_FILES['upl']['type'][$key],'tmp_name'=>$_FILES['upl']['tmp_name'][$key],'error'=>$_FILES['upl']['error'][$key],'size'=>$_FILES['upl']['size'][$key]),					
					'size'=>array('640x480'=>array(635,390)))
				);
				if($file){
					$this->File->saveMany(array('File'=>array('name'=>$file,'businesses_id'=>@$_POST['businesses_id'])));
				}
			}		
		}		
		public function confirmar_arquivos($businesses_id=null,$tipo=null){
			$this->autoRender = false;	
				if($tipo == 2){
					$this->File->deleteAll(array('businesses_id'=>$businesses_id,'File.status'=>0));
				}else if($tipo == 1){
					$this->File->updateAll(array('status'=>1),array('businesses_id'=>$businesses_id));
					$this->Session->setFlash($this->Message->success());
				}
			return $businesses_id;			
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
			$this->set('files', $this->File->find('all',array('conditions'=>array('businesses_id'=>$id,'File.status'=>0),'order'=>array('File.id'=>'DESC'))))	;

		}			
		
	}

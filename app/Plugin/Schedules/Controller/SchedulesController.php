<?php
	class SchedulesController extends SchedulesAppController{
		public $name = 'Schedules';
		
		//components
		public $components = array('Schedules.Message','Schedules.Upload','Schedules.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activeschedule','active');
		}
		
		public function index(){
			$schedules = $this->Schedule->find('all',array('order'=>array('Schedule.id'=>'DESC')));
			
			$this->set('schedules', $schedules);
		}
		
		public function calendar(){
			
			$this->autoRender = false;
			
			$data_start = date('Y-m-d', $_GET['start']);
			$data_end 	= date('Y-m-d', $_GET['end']);
			
			
			
			
			$schedules = $this->Schedule->find('all',array('conditions'=>array('Schedule.date_of_event BETWEEN ? AND ?'=>array($data_start,$data_end))));
			
			foreach($schedules as $scadule){
				$datas[] = array(
					'id' => $scadule['Schedule']['id'],
					'title' => $scadule['Schedule']['title'],
					'start' => $scadule['Schedule']['date_of_event'],
					'url' => "/schedules/view/".$scadule['Schedule']['id']
				);
			}

			echo json_encode($datas);
	
	
	
		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function view($id=null){
			
			$this->set('schedules',$this->Schedule->read(null,$id));
		}
		
		
				
		/*
		 * @method add()
		 * no params
		 * */
		public function add(){
			
			$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
			$this->set('businesses', $this->_getBusinesses()); //Preenche o combobox de categorias
			
			if($this->request->data){
				
				/*
				 *  Verifica se existe imagem
				 * Se existir faz o upload
				 * */
				if(!empty($this->request->data['Schedule']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Schedule']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['Schedule']['image'] = $file;
				}else{
					$this->request->data['Schedule']['image'] = NULL;
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Schedule']['url'])){
					$this->request->data['Schedule']['url'] = $this->Caracter->semEspecial($this->request->data['Schedule']['title']);
				}
				
				if($this->Schedule->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/schedules/index');
				}
				$this->redirect('/schedules/index'); // Independente de salvar ou não ele redireciona para a index
				
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
				if(!empty($this->request->data['Schedule']['image']['name'])){
					$file = $this->Upload->getFile(array(
						'type'=>'fotos',
						'path'=>'fotos/',
						'file'=> $this->request->data['Schedule']['image'],					
						'size'=>array('635x250'=>array(635,390),'318x177'=>array(318,177)))
					);
					$this->request->data['Schedule']['image'] = $file;
				}else{
					$this->request->data['Schedule']['image'] = $this->request->data['Schedule']['image_hidden'];
				}
				// Fim da verificação
					
				/*
				 * Verifica se foi preenchido o campo url, senão preenche de forma automática com o titulo
				 * */	
				if(empty($this->request->data['Schedule']['url'])){
					$this->request->data['Schedule']['url'] = $this->Caracter->semEspecial($this->request->data['Schedule']['title']);
				}
				
				if($this->Schedule->save($this->request->data)){
					$this->Session->setFlash($this->Message->success());
					$this->redirect('/schedules/index');
				}
				$this->redirect('/schedules/index'); // Independente de salvar ou não ele redireciona para a index
				
			}else{
				$this->set('categories', $this->_getCategory()); //Preenche o combobox de categorias
				$this->set('businesses', $this->_getBusinesses()); //Preenche o combobox de categorias
				$this->data = $this->Schedule->read(null,$id);
			}
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
		
		
		
		/*
		 * Retorna uma lista array('id'=>'Titulo') da categoria
		 * Não necesita de paramtros, pois trás todas as categorias cadastradas.
		 * */
		public function _getCategory(){
			$this->loadModel('Categorie');
			return $this->Categorie->find('list',array('fields'=>array('id','name'),'conditions'=>array('type'=>'schedule')));
		}
		
		
		
		/*
		 * @method delete($id = null);
		 * */
		public function delete($id=null,$type=null){
			$this->autoRender = false;
			if($this->Schedule->delete($id)){
				$this->Session->setFlash($this->Message->success('Evento excluído com sucesso!'));
				
			}
			$this->redirect('/schedules');
		}		
	}

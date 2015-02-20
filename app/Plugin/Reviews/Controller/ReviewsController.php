<?php
	class ReviewsController extends ReviewsAppController{
		public $name = 'Reviews';
		
		//components
		public $components = array('Reviews.Message','Reviews.Caracter');
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set('activebusinesses','active');
			
		}
		
		public function index($tipo=null){
			if($tipo == null){
				$conditions = array();
				$tipo = 'Todas';
			}else{
				$conditions = array('Review.status'=>$tipo);
			}
			
			$this->set('reviews',$this->Review->find('all',array('order'=>array('Review.id'=>'DESC'),'conditions'=>$conditions)));
			
			$this->set('status',$tipo);
		}
		
		/*
		 * @method edit($id = null);
		 * */
		public function edit($id=null, $status = 'desbloqueado'){

				$data = array('Review'=>array('id'=>$id,'status'=>$status));
				if($this->Review->save($data)){
					$this->Session->setFlash($this->Message->success('Status '.$status.' com sucesso!'));
					$this->redirect('/reviews');
				}else{
					$this->Session->setFlash($this->Message->error('Houve um erro, por favor tente novamente!'));
					$this->redirect('/reviews');
				}
				
				

		}

		public function delete($id = null){
			$this->Review->delete($id);
			$this->Session->setFlash($this->Message->success('Excluido com sucesso!'));
			$this->redirect('/reviews');
		}
		

	}

<?php
    /**
     * Gerencia o cadastro de categorias dos posts do blog
     *
     * @package 	app.Controller
	 * @version     1.0
     * @author  	Alisson Barbosa Ferreira <alissonbf@gmail.com>
     */    
	class CategoriasController extends AppController{
		public $name = "Categorias";		


		/**
		 * Este metodo atribui o valor 'active', a variavel $activeCategoria, 
		 * assim que as views são renderizadas, ativando o menu. 
		 */
		public function beforeFilter(){
			parent::beforeFilter();	
			
			//$this->set('activeBlog', 'active');			
			$this->set('activeCategoria', 'active');
			$this->set('activeBlog', 'active');
			
		}
				
		/**
		 * Lista todos as categorias cadastrados
		 */
		public function index($classe=null){
			$this->set(array('title_for_layout'=>'Categorias '.$classe,'breadcrumbs'=>'Categorias '.$classe));
			$this->set('categorias', $this->Categoria->find('all',array('conditions'=>array('classe'=>$classe),'order'=>array('Categoria.id'=>'ASC'))));
			$this->set('classe',$classe);		
			
			if($classe == 'video'){
				$this->set('activeASodie','active');
			}
			
			$this->set('active'.$classe, 'active');		
		}
		
		
		
		/**
		 * Adiciona uma nova categoria
		 */
		public function add($classe='blog'){			            


			
			if($this->data){
				//se o campo url for em branco pega o mesmo nome do titulo
				if(empty($this->request->data['Categoria']['url'])){
					$this->request->data['Categoria']['url'] = $this->Caracter->semEspecial($this->request->data['Categoria']['titulo']);
				}
				
				if($this->Categoria->save($this->data)){
					$this->Session->setFlash($this->Message->success());	
				}
				$this->redirect('/categorias');						
			}					   
			
		}
					
		
		
		/**
		 * Atualiza as informações da categoria.
		 * 
		 * @param int $id ID da categoria
		 */
		public function edit($id=null){
			if($this->data){
				//se o campo url for em branco pega o mesmo nome do titulo
				if(empty($this->request->data['Categoria']['url'])){
					$this->request->data['Categoria']['url'] = $this->Caracter->semEspecial($this->request->data['Categoria']['titulo']);
				}
				
				if($this->Categoria->save($this->data)){
					$this->Session->setFlash($this->Message->success());	
				}
				$this->redirect('/categorias');						
			}else{
				$this->data = $this->Categoria->read(null,$id);
			}
		}
							
	} // END

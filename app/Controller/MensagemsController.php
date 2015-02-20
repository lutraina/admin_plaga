<?php
    /**
     * Gerencia as mensagens recebidadas pelo site,
	 * configura informações que permitem o envio 
	 * de mensagem atraves do site.
	 * 
	 * Configura a mensagem padrão, para compartilhamento
	 * de receitas. 	 
     *
     * @package 	app.Controller
	 * @version     1.0
     * @author  	Alisson Barbosa Ferreira <alissonbf@gmail.com>
     */ 	
    class MensagemsController extends AppController{
        public $name = 'Mensagems';
		
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->set("activeContato",'active');
		}
		
		/**
		 * Este metodo lista todas as mensagens enviadas pelo usuário
		 */
        public function index(){
            $this->set('title_for_layout','Mensagens');
            $this->set('contatos', $this->Mensagem->find('all',array('order'=>array('id'=>'DESC'))));
			$this->set("activeContatoI",'active');
        }

		/**
		 * Este metodo visualiza as informações da mensagem
		 * 
         * @param int $id ID do contato		  
		 */
        public function view($id){
            $this->set("activeContato",'active');
            if($id){
            	$this->set('contato',$this->Mensagem->read(null,$id));
			}
        }

        /**
         * Este metodo deleta uma mensagem
         * 
         * @param int $id ID da mensagem
         */
        public function delete($id){
            if($id){
                if($this->Mensagem->delete($id)){
					$this->Session->setFlash(
						'<button class="close" data-dismiss="alert">×</button> 
						Mensagem excluída com sucesso!', 
						'default', 
						array('class' => 'alert alert-success')
					);                	
				}
    	        $this->redirect(array('action' => 'index'));
			}
        }

		/**
		 * Este metodo salva informações de configuração do contato
		 */
        public function configurar(){            
       		$this->set("activeContatoII",'active');
            $this->loadModel('Atendimento');            
            if($this->data){
                if($this->Atendimento->save($this->data)){
					$this->Session->setFlash(
						'<button class="close" data-dismiss="alert">×</button> 
						Configuração feita com sucesso!', 
						'default', 
						array('class' => 'alert alert-success')
					);					
					$configurar = $this->Atendimento->find('first');
	            	if($configurar){
						$this->set('configurar',$configurar);
					} else {
						$configurar = array('Atendimento'=>array('titulo'=>'','texto'=>'','email'=>'','telefone'=>'','endereco'=>'','id'=>''));
						$this->set('configurar',$configurar);	
					} 					
				}                					
            }else{
            	$configurar = $this->Atendimento->find('first');
            	if($configurar){
					$this->set('configurar',$configurar);
				} else {
					$configurar = array('Atendimento'=>array('titulo'=>'','curriculo'=>'','texto'=>'','email'=>'','telefone'=>'','endereco'=>'','id'=>''));
					$this->set('configurar',$configurar);	
				}                               		
            }
        }



    }

<?php 
    class NewslettersController extends AppController{
        public $name = "Newsletters";
        public $components = array('Email');

        public function index(){
            $this->set('title_for_layout', 'Newsletter');
            $this->set('assinantes', $this->Newsletter->find('all',array('order' => array('Newsletter.nome'=>'ASC'))));
        }
    
        public function delete($id=null){                
            if($id)
                if($this->Newsletter->delete($id))
                        $this->Session->setFlash('O Newsletter foi excluído com sucesso!');		
            $this->redirect(array('action'=>'index'));
        }
        
        public function enviar(){
	        $this->set('title_for_layout', 'Enviar News');                        
	            
		    if($this->request->data){                
	                $contatos = $this->Newsletter->find('all');                
	                $mensagem = $this->request->data['Newsletter']['mensagem'];
	                $assunto  = $this->request->data['Newsletter']['assunto'];  
	                
	                foreach ($contatos as $contato){
	                    $email = new CakeEmail('smtp');
	                    $email->emailFormat('html');	                    
	                    $email->subject($assunto);	                                        
	                    
	                    $email->to($contato['Newsletter']['email']);	                    	                    
	                    $email->send($mensagem);
	                }
					$this->Session->setFlash(
						'<button class="close" data-dismiss="alert">×</button> 
						E-mails enviados com sucesso!', 
						'default', 
						array('class' => 'alert alert-success')
					);
	                $this->redirect(array('action'=>'index'));
	                
	    	}
        }     



    }		
<?php

	App::uses('Component','Controller');
	class NewsletterComponent extends component{
		public $components = array('Email');
		
		
		
		public function disparar(){
			
			$this->loadModel('UserHasInteresses');
		           
				   $interesses = $this->UserHasInteresses->read(null,$id);
				   
	                                  
	                foreach ($interesses['User'] as $contato){
	                    $email = new CakeEmail('smtp');
	                    $email->emailFormat('html');	                    
	                    $email->subject($assunto);	                                        
	                    
	                    $email->to($contato['username']);	                    	                    
	                    $email->send($mensagem);
	                }	                
					return TRUE;

		}
		
		
		
		
	}

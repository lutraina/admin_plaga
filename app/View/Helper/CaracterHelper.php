<?php
	class CaracterHelper extends AppHelper{
		
		public function semEspecial($string=null){
			return ereg_replace("[^a-zA-Z0-9]", "", strtr($string, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ", "aaaaeeiooouucAAAAEEIOOOUUC"));
			 
		}
		
		public function _getLimit($string=null,$size=null){
			
			if(strlen($string)<=$size){
				return $string;
			}else{
				$string = substr($string, 0, strrpos(substr($string, 0, $size), ' '));
			}
			return $string;
		}
	}

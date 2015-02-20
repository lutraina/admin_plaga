<?php
	class DataHelper extends AppHelper{
		
		public function intervalo($data1=null,$data2=null){
			

			if($data2==null){
				
				if(strtotime($data2) > strtotime('25-06-2013 00:00:00')){
					date_default_timezone_set("US/Mountain");
				}
							$data2 = date('Y-m-d H:i:s');
			}
			
			$unix_data1 = strtotime($data1);
			$unix_data2 = strtotime($data2);
			
			$tempo = round(($unix_data2 - $unix_data1) / 60);
			$time = ' H';
			
			if($tempo<60){
				$time = ' min';
			}else{
				$tempo = round(($unix_data2 - $unix_data1) / 3600);
				$time = ' h';
				if($tempo>24){
					$tempo = round($tempo / 24);
					if($tempo>1)
						$time = ' dias';
					else
						$time = ' dia';
				}
			
			}
			return $tempo.$time.' atrás';
			 
		}
	}


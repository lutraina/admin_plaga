<?php
	class PercentHelper extends AppHelper{
		
		public function _getConvert($valor,$total){
			$percent = $valor / $total * 100;
			return round($percent);
		}
	}

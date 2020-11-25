<?php

    class Calculation{
		
		public function getResult($x){
			
			foreach($x as $val){
				
				echo $val[0];
				echo " : ";
				echo $val[1]*$val[2]."<br/>";
				
			}
			
		}
		
	}

?>
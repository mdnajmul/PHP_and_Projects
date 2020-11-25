<?php

    class Person{
		
		public $name    = "Najmul Ovi";
		public $age     = "24";
		public $skill   = "Programming";
		
		private $email = "nazmulovi@gmail.com";
		protected $password = "125690";
		
		
		public function displayPrivate_Protected(){
			
			echo "Inside Class<br/>";
			foreach($this as $key => $val){
				echo "<pre>";
				echo "$key => $val";
				echo "</pre>";
			}
			
		}
	}

?>
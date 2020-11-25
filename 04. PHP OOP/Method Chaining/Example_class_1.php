<?php

//Method Chaining
    class Calculation{
		
		public $a = 0;
		public $b = 0;
		public $result;
		
		public function getValue($x, $y){
			
			$this->a = $x;
			$this->b = $y;
			
			//This important and must write for run method chaining method.
			return $this;
			
		}
		
		public function getResult(){
			
			$this->result = $this->a * $this->b;
			
			//This important and must write for run method chaining method.
			return $this->result;
			
		}
		
	}

?>
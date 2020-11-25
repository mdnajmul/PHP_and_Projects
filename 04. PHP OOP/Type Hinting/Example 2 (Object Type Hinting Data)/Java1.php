<?php

    class Java1{
		
		//create a variable for put/keep object value
		public $fromPhp;
		
		//Here construct function hold object which comes from Php1 class & now inside this method can use all method from Php1 class.
		public function __construct(Php1 $x){
			//put value inside $fromPhp variable
			$this->fromPhp = $x;
			//call method from Php1 class
			$this->fromPhp->cms();
		}
		
	}

?>
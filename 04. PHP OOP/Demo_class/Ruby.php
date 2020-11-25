<?php

    class Ruby{
		
		public $result;
		public function __construct(Php $x){

		    $this->result = $x;
			$this->result->Framework();
			$this->result->CMS();
		}
	}

?>
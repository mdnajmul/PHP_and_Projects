<?php

   //create a class
   class Observable{
	   
	   //create a private array which store object from like "Skype", "Gtalk", etc. classes
	   private $observars = array();
	   
	   //create a function name "register()" which pass object name from different class like "Skype", "Gtalk", etc.
	   public function register($obj){
		   
		   //This is validication
           //If those object are instanceof "observer" , then store them the "observars[]" array		   
		   if($obj instanceof observer ){
			   
			   $this->observars[] = $obj;
			   
		   }else{
			   
			   echo "Object should be implements observer interface...<br/>";
		   }
	   }
	   
	  
       //This method show all notifaction from all classes like: "Skype", "Gtalk", etc.
       //Here we run a foreach loop which call all "message()" method from different classes like: "Skype", "Gtalk", etc.	   
	   public function stateChange(){
		   
		   foreach($this->observars as $value){
			   
			   //Here we call "message()" method by $value object
			   $value->message();
		   }
	   }
	   
   }

?>
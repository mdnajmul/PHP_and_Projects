<?php

  class Language{
	  
	   private $category;
	   private $framework;
	   
	   
	   public function setCat($a){
		   
		   $this->category = $a;
	   }
	   
	   public function getCat(){
		   
		   return $this->category;
	   }
	   
	   
	   public function setframework($b){
		   
		   $this->framework = $b;
	   }
	   
	   public function getframework(){
		   
		   return $this->framework;
	   }
	   
	   //by write this function,object are fully/deeply copyied/cloned.
	   public function __clone(){
		   
		   $lang = new Language();
		   $lang->setframework($this->framework);
		   return $lang;
	   }
	  
  }

?>
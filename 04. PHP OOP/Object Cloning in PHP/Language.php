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
	  
  }

?>
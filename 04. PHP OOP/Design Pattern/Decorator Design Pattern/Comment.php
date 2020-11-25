<?php

   //create a "Comment" class
   class Comment{
	   
	   //declare some private property
	   private $date;
	   private $content;
	   
	   //create a "filter()" method & initialize property value inside the method
	   public function filter(){
		   
		   $this->content = $filtered_content;
	   }
	   
	   //create another method called "getContent()" which return all content
	   public function getContent(){
		   
		   return $this->content;
	   }
	   
   }

?>
<?php

   //create a "Post" class
   class Post{
	   
	   //declare some private property
	   private $title;
	   private $content;
	   
	   //create a "filter()" method & initialize all property value inside the method
	   public function filter(){
		   
		   $this->title = $filtered_title;
		   $this->content = $filtered_content;
	   }
	   
	   //create another method called "getContent()" which return all content
	   public function getContent(){
		   
		   return $this->content;
	   }
	   
   }

?>
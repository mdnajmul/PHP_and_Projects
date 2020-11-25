<?php

   //create another class named "BBCodeParser()"
   class BBCodeParser{
	   
	   //declare a private property which store object of "Post" class
	   private $post;
	   
	   //create a construct function which passes object of "Post" class
	   function __construct($obj){
		   
		   //store object of "Post" class inside $post property
		   $this->post = $obj;
	   }
	  
       //create a method called "getContent()" same as "Post" & "Comment" classes property getContent(), but different is ,here we add some extra features 	  
	   public function getContent(){
		   
		   //call "filter()" method from "Post" class by $post object
		   $post->filter();
		   //Here, we call "parseBBcode()" method by $post object and passes content from "Post" class
		   //then we store this inside $cont variable. After that we return this variable
		   $cont = $post->parseBBcode($post->getContent());
		   return $cont;
	   }
	   
	   //This is "parseBBcode()" which passes content from "Post" class
	   private function parseBBcode($content){
		   
		   //your coding process will be go here...
	   }
	   
	   
   }

?>
<?php

   //create another class named "Emoticon()"
   class Emoticon{
	   
	   //declare a private property which store object of "Comment" class
	   private $com;
	   
	   //create a construct function which passes object of "Comment" class
	   function __construct($obj){
		   
		   //store object of "Comment" class inside $com property
		   $this->com = $obj;
	   }
	   
	   //create a method called "getContent()" same as "Post" & "Comment" classes property getContent(), but different is ,here we add some extra features
	   public function getContent(){
		   
		   //call "filter()" method from "Comment" class by $com object
		   $com->filter();
		   //Here, we call "parseEmoticon()" method by $com object and passes content from "Comment" class
		   //then we store this inside $cont variable. After that we return this variable
		   $cont = $com->parseEmoticon($com->getContent());
		   return $cont;
	   }
	   
	   //This is "parseEmoticon()" which passes content from "Comment" class
	   private function parseEmoticon($content){
		   
		   //your coding process will be go here...
	   }
	   
	   
   }

?>
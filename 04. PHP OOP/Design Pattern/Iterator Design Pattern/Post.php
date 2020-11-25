<?php
   
   //This is a post class where we find all post from my id like:facebook
   //We work override all function from "Iterator" interface into this class
   class Post implements Iterator{
	   
	   //create a variable for validation
	   public $var;
	   //create another private array property which values are all post
	   private $posts = array();
	   
	   function __construct($x){
		   if(is_array($x)){
		     
			 $this->posts = $x
		   }
	   }
	   
	   //this function reset the posts values
	   public function rewind(){
		   
		   reset($this->posts);
	   }
	   
	   //this function return current post
	   public function current(){
		   
		   return current($this->posts);
		   
	   }
	   
	   //this function return key values
	   public function key(){
		   
		   return key($this->var);
	   }
	   
	   //this function return next value
	   public function next(){
		   
		   return next($this->var);
	   }
	   
	   //this function return validation that current value is present or not
	   public function valid(){
		   
		   return ($this->current !== false);
	   }
	   
   }

?>
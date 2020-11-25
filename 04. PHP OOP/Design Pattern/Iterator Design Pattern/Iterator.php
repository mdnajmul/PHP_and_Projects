<?php
   
   //create an interface
   interface Iterator{
	   
	   //write some build in function
	   //These function will be overrided into other classes.
	   function rewind();
	   function current();
	   function key();
	   function next();
	   function valid();
   }

?>
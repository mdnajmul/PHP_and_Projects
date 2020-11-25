<?php

   include "DB.php";
   
   //This class create for read all data from table
   class student{
	   
	   //put table_name insde a private variable
	   private $table = 'tbl_student';
	   
	   public function readAll(){
		   
		   //write the select query
		   //Here, $this->table is table_name
		   $sql = "select * from $this->table";
		   //call "prepareOwn()" function from "DB" class by class_name::
		   //Because,That is a static method
		   $stmt = DB::prepareOwn($sql);
		   //execute the statement
		   $stmt->execute();
		   //fetch all datta from table & return these
		   return $stmt->fetchAll();
	   }
	   
   }

?>
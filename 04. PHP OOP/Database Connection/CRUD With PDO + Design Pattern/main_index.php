<?php

   include "DB.php";
   
   abstract class main_index{
	   
	   protected $table;
	   
	   abstract public function insert();
	   abstract public function update($id);
	   
	   //This is "readById()" function for run select query & execute the query
	   public function readById($id){
		   
		   $sql = "SELECT * FROM $this->table WHERE id=:id";
		   $stmt = DB::prepareOwn($sql);
		   $stmt->bindParam(':id', $id);
		   $stmt->execute();
		   return $stmt->fetch();
	   }
	   
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
	   
	   //This is "delete()" function for run delete query & execute the query
	   public function delete($id){
		   $sql = "DELETE FROM $this->table WHERE id=:id";
		   $stmt = DB::prepareOwn($sql);
		   $stmt->bindParam(':id', $id);
		   return $stmt->execute();
	   }
   }

?>
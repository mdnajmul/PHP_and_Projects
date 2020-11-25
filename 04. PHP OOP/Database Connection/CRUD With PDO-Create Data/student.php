<?php

   include "DB.php";
   
   //This class create for read all data from table
   class student{
	   
	   //put table_name insde a private variable
	   private $table = 'tbl_student';
	   
	   private $name;
	   private $dep;
	   private $age;
	   
	   public function setName($name){
		   $this->name = $name;
	   }
	   
	   public function setDep($dep){
		   $this->dep = $dep;
	   }
	   
	   public function setAge($age){
		   $this->age = $age;
	   }
	   
	   public function insert(){
		   $sql = "INSERT INTO $this->table(name,dep,age) VALUES(:name, :dep, :age)";
		   $stmt = DB::prepareOwn($sql);
		   $stmt->bindParam(':name', $this->name);
		   $stmt->bindParam(':dep', $this->dep);
		   $stmt->bindParam(':age', $this->age);
		   return $stmt->execute();
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
	   
   }

?>
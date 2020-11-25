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
	   
	   //This is "insert()" function for run insert query & execute the query
	   public function insert(){
		   $sql = "INSERT INTO $this->table(name,dep,age) VALUES(:name, :dep, :age)";
		   $stmt = DB::prepareOwn($sql);
		   $stmt->bindParam(':name', $this->name);
		   $stmt->bindParam(':dep', $this->dep);
		   $stmt->bindParam(':age', $this->age);
		   return $stmt->execute();
	   }
	   
	   //This is "update()" function for run update query & execute the query
	   public function update($id){
		   $sql = "UPDATE $this->table SET name=:name, dep=:dep, age=:age WHERE id=:id";
		   $stmt = DB::prepareOwn($sql);
		   $stmt->bindParam(':name', $this->name);
		   $stmt->bindParam(':dep', $this->dep);
		   $stmt->bindParam(':age', $this->age);
		   $stmt->bindParam(':id', $id);
		   return $stmt->execute();
	   }
	   
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
	   
   }

?>
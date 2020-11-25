<?php

   include "main_index.php";
   
   //This class create for read all data from table
   class teacher extends main_index{
	   
	   //put table_name insde a private variable
	   protected $table = 'tbl_teacher';
	   
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
	   
	   
   }

?>
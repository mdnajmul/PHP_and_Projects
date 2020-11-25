<?php

   include "DB.php";
   
   //This class is for get data from database
   class Model{
	   
	   public function getStudentData(){
		   
		   $sql = 'SELECT * FROM tbl_student';
		   $stmt = DB::prepareOwn($sql);
		   $stmt->execute();
		   return $stmt->fetchAll();
	   }
	   
   }

?>
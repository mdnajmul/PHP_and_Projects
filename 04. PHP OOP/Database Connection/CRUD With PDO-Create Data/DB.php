<?php

   include "config.php";
   //This class stablish connection between database & php block
   class DB{
	   
	    private static $pdo;
		
		public static function connection(){
			
			//check have a connection?
			// If no,Then create connection through PDO() class
			if(!isset(self::$pdo)){
			   
				try{
				    
				    self::$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME,DB_USER,DB_PASS);
				
				} catch(PDOException $e){
				
					$e->getMessage();

				}			   
				
			}
			//return the connection
			return self::$pdo;
			

		}
		//pass the connection through "prepare()" method & return that
		public static function prepareOwn($sq){
			
			return self::connection()->prepare($sq);
		}
	   
   }
   

?>
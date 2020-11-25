<?php

    abstract class Database{
		
		public function connect();
		public function query();
		public function insertId();
		
		public function setHost($host){
			
			//set host...
		}
		
		public function setDB($db){
			
			//set database...
		}
		
		public function setUser($user){
			
			//set username...
		}
		
		public function setPass($pass){
			
			//set password...
		}
		
	}

?>
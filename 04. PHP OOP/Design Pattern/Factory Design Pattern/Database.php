<?php

    class Database{
		
		public $driver;
		public $link;
		
		
		public function setDriver($dr){
			
			$this->driver = $dr;
		}
		
		public function setConnect(){
			
			if($this->driver == "mysql"){
				
				$mngmysql = new ManageMysql();
					$mngmysql->setHost($host);
					$mngmysql->setDB($db);
					$mngmysql->setUser($user);
					$mngmysql->setPass($pass);
					$this->link = $mngmysql->Connect();
				
			}elseif($this->driver == "sqllite"){
				$mngsql = new ManageSqllite();
					$mngsql->setHost($host);
					$mngsql->setDB($db);
					$mngsql->setUser($user);
					$mngsql->setPass($pass);
					$this->link = $mngsql->Connect();
				
			}
		}
		
	}

?>
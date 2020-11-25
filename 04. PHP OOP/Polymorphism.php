<!doctype html>
<html>
<head>
 <title>PHP OOP Code Practice</title>
 <style>
  body{font-family:verdana}
 .phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}
 .headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}
 .headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "PHP OOP Code Practice"; ?></h2>
 </section> 
 <section class="maincontent">
 
  

<?php

   // Polymorphism
   // When we start to extend classes, and add functionality to them which wasn't there previously, even override existing methods (functions),
   // this is called Polymorphism.
   
   // The basis of polymorphism is Inheritance and Overriden methods.

    class UserDetails{
		public $userName;
		public $userId;
		
		public function __construct($myuser,$myid){
			$this->userName = $myuser;
			$this->userId   = $myid;
		}
		
		public function display(){
			
			echo "User name is: {$this->userName} and User id is: {$this->userId}";
		}
		
	}
	//Inheritance
	class Admin extends UserDetails{
		//add functionality/property which wasn't superclass previously
		public $level;
		
		//Override this method
		public function display(){
			
	        echo "User name is: {$this->userName} and User id is: {$this->userId} and User level is: {$this->level}";
		}
	}
	
	
	$newuser = "Najmul";
	$newid   = "4";
	$user_one = new UserDetails($newuser,$newid);
	$user_one->display();
	
	echo "<br/>";
	
	$newuser = "admin";
	$newid   = "2";
	$admin_one = new Admin($newuser,$newid);
	$admin_one->level="Adminstrator";
	$admin_one->display();

?>
  
  
   
     
   
  </section>
    <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
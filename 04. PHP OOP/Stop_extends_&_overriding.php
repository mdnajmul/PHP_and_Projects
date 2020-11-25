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
    //To stop extends class, use final keyword
    final class UserDetails{
		public $user;
		public $id;
		
		public function __construct($myuser,$myid){
			$this->user = $myuser;
			$this->id   = $myid;
		}
		
		//To stop method overriding,use final keyword
		public final function display(){
			
			echo "User name is: {$this->user} and User id is: {$this->id}";
		}
		
	}
	//Inheritance
	class Admin extends UserDetails{
		public $level;
		
		//Override this method
		public function display(){
			
	        echo "User name is: {$this->user} and User id is: {$this->id} and User level is: {$this->level}";
		}
	}
	
	
	$newuser = "Najmul Ovi";
	$newid   = "104";
	$user_one = new UserDetails($newuser,$newid);
	$user_one->display();
	
	echo "<br/>";
	
	$newuser = "Admin";
	$newid   = "1";
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
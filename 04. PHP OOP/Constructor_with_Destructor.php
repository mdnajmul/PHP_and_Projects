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
   
   class UserData{
	   
	   public $username;
	   public $userid;
	   
	   public function __construct($userName,$userID){
		   
		   $this->username = $userName;
		   $this->userid   = $userID;
		   
		   
		   echo "User name is {$this->username} and User id is {$this->userid}";
		   
	   }
	   
	   public function __destruct(){
		   
		   unset($this->username);
		   unset($this->userid);
	   }
	   
   }
   $user = "Najmul Ovi";
   $id   = "104";
   $user_one = new UserData($user,$id);
?>
  
  
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
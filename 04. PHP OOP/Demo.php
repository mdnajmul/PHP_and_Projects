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

    interface School{
		public function mySchool();
	}
	
	interface College{
		public function myCollege();
	}
	
	interface University{
		public function myUniversity();
	}
	
	class Teacher implements School, College, University{
		
		public function __construct(){
			$this->mySchool();
			$this->myCollege();
			$this->myUniversity();
		}
		
		public function mySchool(){
			echo "I am a school Teacher.</br>";
		}
		
		public function myCollege(){
			echo "I am a college Teacher.</br>";
		}
		
		public function myUniversity(){
			echo "I am a university Teacher.</br></br>";
		}
	}
	
	
	class Student implements School, College, University{
		
		public function __construct(){
			
			$this->mySchool();
			$this->myCollege();
			$this->myUniversity();
		}
		
		public function mySchool(){
			echo "I am a school Student.</br>";
		}
		
		public function myCollege(){
			echo "I am a college Student.</br>";
		}
		
		public function myUniversity(){
			echo "I am a university Student.</br>";
		}
	}
	
	$tr = new Teacher();
	$st = new Student();


?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
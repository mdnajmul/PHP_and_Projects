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

    //Abstract class
	
	abstract class Student{
		public $name;
		public $age;
		
		//non-abstract method
		public function Details(){
			
			echo $this->name." is ".$this->age." years old.<br/>";
		}
		
		//abstract method
		abstract public function School();
		
		
	}
	
	class Boy extends Student{
		
		public function Describe(){
			// non-abstract method call by parent::
			return parent::Details();
		}
		
		public function School(){
			
			echo "I love read different types of book.";
		}
	}
	
	$b = new Boy();
	$b->name="Najmul Ovi";
	$b->age="25";
	$b->Describe();
	$b->School();
	

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
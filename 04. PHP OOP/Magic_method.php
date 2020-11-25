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

    //Magic Methods
	/*
	  __construct()
	  __destruct()
	  __get($property)
	  __set($property, $value)
	  __call($method, $arg_array)
	*/
	
	
	class Student{
		
		public $name;
		
		// Normal method
		public function describe(){
			
			echo "I am a good student.<br/>";
		}
		
		// __get method and here $x is $property
		public function __get($x){
			
			echo "$x does not exits.<br/>";
		}
		
		
		// __set method and here $x is undefined $property & $val is $value
		public function __set($x, $val){
			
			echo "We set $x->$val.<br/>";
		}
		
		
		// __call method and here $x is undefined $method & $val is $arg_array
		public function __call($x, $val){
			
			echo "There is no <b>".$x."</b> method and Arguments: ".implode(', ',$val);
		}
		
	}
	
	$st = new Student();
	$st->describe();
	
	// For __get method
	$st->Najmul;
	
	// For __set method
	$st->Age="25";
	
	// For __call method
	$st->notExistedMethod('2', '3', '5');


?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
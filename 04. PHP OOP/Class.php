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
     
	 //class syntax:  class class_name{}
	 //create a class
	 class Person{
		 
		 
		 //property syntax: Access_modifier $property_name;
		 //create/declare property
		 public $name = "Najmul Ovi";
		 public $age;
		 
		 
		 //method_syntax: Access_modifier function method_name(){}
		 //create/declare method
		 public function personName(){
			 
		 }
		 
		 //create/declare method
		 public function personAge(){
			 echo "<br>Your Age is: ". $this->age;
			 
		 }
		 
	 }
	 
	 //create object
	 //Now we create object of Person Class
	 //Syntax: $variable_name = new class_name;
	 $myobj = new Person;
	 
	 //How to access Class property by object
	 //Syntax: $object_name->property_name;
	 echo $myobj->name;
	 
	 //How to access Class method by object
	 //First, we assign value of $age property by using object
	 $myobj->age=23;
	 //Now we access personAge() method by object of person class
	 $myobj->personAge();
	 
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
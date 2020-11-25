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
   
   class Employee{
	   public $name;
	   public $age;
	   public $id;
	   
	   public function __construct($employeeName,$employeeAge){
		   $this->name = $employeeName;
		   $this->age = $employeeAge;
	   }
	   
	   public function setID($employeeID){
		   $this->id = $employeeID;
	   }
	   
	   public function __destruct(){
		   if(! empty($this->id)){
			   echo "Employee Saving.";
		   }
	   }
   }
   
   $employee_one = new Employee("Jewel Rana","25");
   $employee_one->setID(15);
   unset($employee_one);   
   
?>
  
  
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
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
  
/*
  __CLASS__  is a magic method which return base_class or calling method is stay inside which present class
  
  get_class  is also magic method which return class name which object already created.

*/
  
   
include "Php.php";

class phpChildClass extends Php{
	
	public function cms(){
		
		echo "Base Class Constant and class name-> ".__CLASS__."<br/>";
		echo "Base class function and class name-> ".get_class($this)."<br/>";
		
	}
	
	public function ourMethod(){
		
		parent::framework();
		
	}
	
}

$cld = new phpChildClass();


$cld->framework();
echo "<hr/>";
$cld->cms();
echo "<hr/>";
$cld->ourMethod();

   

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
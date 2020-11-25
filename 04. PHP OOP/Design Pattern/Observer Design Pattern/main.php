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
    
	//Observer Design Pattern
	//By This design pattern, we send different notification from different site
	
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	
	//create "Observable" class object
	$obs = new Observable();
	
	//create different message option classes object
	$sk = new Skype();
	$gt = new Gtalk();
	
	//create a new object from "stdClass()" build in method
	$s = new stdClass();
	
	//call "register()" method
	$obs->register($sk);
	$obs->register($gt);
	$obs->register($s);
	
	//call "stateChange()" method
	$obs->stateChange();
	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
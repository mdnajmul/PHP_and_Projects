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
    
	//MySQLi-Select Data OO Way
	
	/*
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	*/
	
	//create a object of "mysqli" class & passes values
	$db = new mysqli("localhost","root","","studentinfo");
	
	//checked connection status
	if(mysqli_connect_errno()){
		
		echo "Connection Fail!";
		exit();
		
	} else{
		
		echo "Connection Successfull.";
	}
	
	//put select query into a variable
	$sql = "select * from student";
	
	//call "query()" method from "mysqli" class by $db object & put this into a variable name $result
	$result = $db->query($sql);
	
	//run while loop for show all data
	//here we use "fetch_object()" for find all data
	while($x = $result->fetch_object()){
		
		echo "<pre>";
		//print all email from "student" table
		echo $x->email;
		echo "</pre>";
	}
	
	
	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
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
    
	//MySQL-Connect OO Way
	
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
	
	//put update query into $sql object
	$sql = "update student SET email='najmulovi@gmail.com , najmulovi999@gmail.com' where studentID='20150104'";
	
	//call "query() method by $db object"
	$result = $db->query($sql);
	
	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
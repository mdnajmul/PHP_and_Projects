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
    
	//MySQLi- BLOB With Prepared Statements
	
	/*
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	*/
	
	//create a object of "mysqli" class & passes values
	$db = new mysqli("localhost","root","","test");
	
	//checked connection status
	if(mysqli_connect_errno()){
		
		echo "Connection Fail!";
		exit();
		
	} else{
		
		echo "Connection Successfull.";
	}
	
	//write a insert query & put this in a variable
	//Here values(?) means that we call "bind_param()" function for insert/initialize values
	$sql = "insert into images(image) values(?)";
	
	//call "prepare()" function by $db object & passes the query by this method
	//Then put this inside a variable
	$stmt = $db->prepare($sql);
	
	//call "bind_param("data_type",$value_1,$value_2,$value_3,....)" function
	//Here, "b" means data type.
	$stmt->bind_param("b",$image);
	
	//initialize the values
	$image = file_get_contents("ovi.jpg");
	$stmt->send_long_data(0, $image);
	
	/*Then call "execute()" function for execute prepared statement */
	$stmt->execute();

	
	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
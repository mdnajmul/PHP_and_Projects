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
    
	//Difference between bindValue() and bindParam()
	// "bindValue()" where we can passes both variable & values
	//But, "bindParam()" ehere we can passes only variable
	
	/*
	spl_autoload_register(function($class_name){
		
		include $class_name.".php";
	});
	*/
	
	//Here, dsn = data source name
    //dsn used for connection with difference databases like: musql,sqllite,etc.
	//create connection
    $dsn = "mysql:dbname=studentinfo;host=localhost;";
	$user = "root";
	$pass = "";
	
	try {
		//create a object of "PDO" class & passes values through it for create connection
		$pdo = new PDO($dsn, $user, $pass);
		
	} catch(PDOException $e){
		
		echo "Connection Fail...".$e->getMessage();
	}
	
    //Initialize values	
	$stuId = "20130110";
	$name = "Shawon Islam";
	$mail = "sislam@gmail.com";
	$Age = 30;
	
	//write a insert query & put this inside a values
	$sql = "insert into student(studentID,studentName,email,age) values(:studentID, :studentName, :email, :age)";
	
	//call a "prepare()" function by "PDO" class object
	$stmt = $pdo->prepare($sql);
	
	//use "bindParam()" function
	//Here, we pass only variable. not passes values 
	$stmt->bindParam(':studentID', $stuId);
	$stmt->bindParam(':studentName', $name);
	$stmt->bindParam(':email', $mail);
	$stmt->bindParam(':age', $Age);
	//execute statement
	$stmt->execute();
	
	
	/*
	//Initialize values	
	$stuId = "20120115";
	$name = "Sumon Ahamed";
	$mail = "ahamed@gmail.com";
	$Age = 28;
	
	//write a insert query & put this inside a values
	$sql = "insert into student(studentID,studentName,email,age) values(:studentID, :studentName, :email, :age)";
	
	//call a "prepare()" function by "PDO" class object
	$stmt = $pdo->prepare($sql);
	
	//use "bindValue()" function
	//Here, we pass only variable. not passes values 
	$stmt->bindValue(':studentID', $stuId);
	$stmt->bindValue(':studentName', "Sumon Ahamed");
	$stmt->bindValue(':email', $mail);
	$stmt->bindValue(':age', 28);
	//execute statement
	$stmt->execute();
	*/
	

	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
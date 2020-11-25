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
    
	/* Update Data With PDO-Prepared Statements */
	
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
	
	// Method 1 (Type: 1) //
     
	$stuId = "20150117";
	$Age = 29;
	//write a update query & put this inside a values
	$sql = "update student set age=? where studentID=?";
	
	//call a "prepare()" function by "PDO" class object
	$stmt = $pdo->prepare($sql);
	
	//execute statement
	$stmt->execute(array($Age, $stuId));
	
	
	/*
	 // Method 2 (Type: 2) //update data by using name place order(:variable)
     
		$stuId = "20200108";
		$Age = 31;
		//write a update query & put this inside a values
		$sql = "update student set age=:Age where studentID=:stuId";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//call "bindParam() function"
		$stmt->bindParam(':Age',$Age);
		$stmt->bindParam(':stuId', $stuId);
		
		//execute statement
		$stmt->execute();
	*/
	
	
    /*
	 // Method 3 (Type: 3) //update data by using name place order(:variable)
     
		$stuId = "20150007";
		$Age = 25;
		//write a update query & put this inside a values
		$sql = "update student set age=:Age where studentID=:stuId";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//call "bindValue() function"
		$stmt->bindValue(':Age',$Age);
		$stmt->bindValue(':stuId', $stuId);
		
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
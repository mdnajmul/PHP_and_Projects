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
    
	//Prepared Statements with PDO
	
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
	
	//method 1
    //Initialize values	
	$stuId = "20152145";
	$name = "Shazzad Hossen";
	$mail = "sazzad@yahoo.com";
	$Age = 22;
	
	//write a insert query & put this inside a values
	$sql = "insert into student(studentID,studentName,email,age) values(:studentID, :studentName, :email, :age)";
	
	//call a "prepare()" function by "PDO" class object
	$stmt = $pdo->prepare($sql);
	
	//use "bindParam" function
	//Here, 'PDO::PARAM_STR' is dataType 
	$stmt->bindParam(':studentID', $stuId,PDO::PARAM_STR);
	$stmt->bindParam(':studentName', $name,PDO::PARAM_STR);
	$stmt->bindParam(':email', $mail,PDO::PARAM_STR);
	$stmt->bindParam(':age', $Age,PDO::PARAM_INT);
	//execute statement
	$stmt->execute();
	
	/*
	  //method 2
	    //Initialize values	
			$stuId = "20140130";
			$name = "Rana Alam";
			$mail = "rana@yahoo.com";
			$Age = 27;
		
		//write a insert query & put this inside a values
	      $sql = "insert into student(studentID,studentName,email,age) values(?,?,?,?)";
		  
		  //call a "prepare()" function by "PDO" class object
	         $stmt = $pdo->prepare($sql);
		    
            //create a array and passes all values through this array
               $arr = array($stuId,$name,$mail,$Age);

                 //Execute the array
                   $stmt->execute($arr);				 
	*/
	

	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
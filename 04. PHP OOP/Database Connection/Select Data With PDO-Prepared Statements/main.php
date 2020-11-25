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
    
	/* Select Data With PDO-Prepared Statements */
	
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
	
	/* Method 1 (Type: 1) */
     
	$stuId = "20140130";
	//write a insert query & put this inside a values
	$sql = "select * from student where studentID=:stuId";
	
	//call a "prepare()" function by "PDO" class object
	$stmt = $pdo->prepare($sql);
	
	//execute statement
	$stmt->execute(array(':stuId'=>$stuId));
	
	//run while loop for show data
	while($data = $stmt->fetch()){
		
		echo "Name: ".$data['studentName']."<br/>";
		echo "Email: ".$data['email']."<br/>";
	}
	
	
	/*
		  // Method 2 (Type: 2)//
		$stuId = "20150104";
		//write a insert query & put this inside a values
		$sql = "select * from student where studentID=?";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//execute statement
		$stmt->execute(array($stuId));
		
		//run while loop for show data
		while($data = $stmt->fetch()){
			
			echo "Name: ".$data['studentName']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}				 
	*/
	
	
	/*
		  // Method 3 (Type: 3)// Use "bindParam()" function
		$stuId = "20150117";
		//write a insert query & put this inside a values
		$sql = "select * from student where studentID=?";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//use bindParam() function
		$stmt->bindParam(1,$stuId);
		
		//execute statement
		$stmt->execute();
		
		//run while loop for show data
		while($data = $stmt->fetch()){
			
			echo "Name: ".$data['studentName']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}				 
	*/
	
	
	/*
		  // Method 4 (Type: 4)// Use "bindParam()" function
		$stuId = "20130110";
		$mail = "sislam@gmail.com";
		//write a insert query & put this inside a values
		$sql = "select * from student where studentID=? and email=?";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//use bindParam() function
		$stmt->bindParam(1, $stuId);
		$stmt->bindParam(2, $mail);
		
		//execute statement
		$stmt->execute();
		
		//run while loop for show data
		while($data = $stmt->fetch()){
			
			echo "Name: ".$data['studentName']."<br/>";
		}				 
	*/
	
	
	/*
		  // Method 5 (Type: 5)// Use "bindValue()" function
		$stuId = "20150007";
		
		//write a insert query & put this inside a values
		$sql = "select * from student where studentID=?";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//use bindValue() function
		$stmt->bindValue(1, $stuId);
		
		//execute statement
		$stmt->execute();
		
		//run while loop for show data
		while($data = $stmt->fetch()){
			
			echo "Name: ".$data['studentName']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}				 
	*/
	
	
	/*
		  // Method 6 (Type: 6)// Use "bindValue()" function
		$stuId = "20150130";
		
		//write a insert query & put this inside a values
		$sql = "select * from student where studentID=:stuId";
		
		//call a "prepare()" function by "PDO" class object
		$stmt = $pdo->prepare($sql);
		
		//use bindValue() function
		$stmt->bindValue(':stuId', $stuId);
		
		//execute statement
		$stmt->execute();
		
		//run while loop for show data
		while($data = $stmt->fetch()){
			
			echo "Name: ".$data['studentName']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}				 
	*/
	

	
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
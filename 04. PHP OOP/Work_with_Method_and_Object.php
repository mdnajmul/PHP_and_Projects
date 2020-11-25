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
 
 
  <form action="" method="post">
	  <table>
		  <tr>
			  <td>Enter The First Number: </td>
			  <td><input type="number" name="num1"/></td>
		  </tr>
		  <tr>
			  <td>Enter The Second Number: </td>
			  <td><input type="number" name="num2"/></td>
		  </tr>
		  <tr>
			  <td></td>
			  <td><input type="submit" name="calculation" value="Calculate"/></td>
		  </tr>
	  </table>
  </form>
  
  <?php
    if(isset($_POST["calculation"])){
			$valOne = $_POST["num1"];
			$valtwo = $_POST["num2"];
			
			if(empty($valOne) or empty($valtwo)){
				echo "<span style='color:red'>Field must not be empty!</span><br/>";
			}
			else{
			//create class object for access class method
			$cal = new Calculation;
			//access Calculation class methods by $cal object
			$cal->add($valOne,$valtwo);
			$cal->sub($valOne,$valtwo);
			$cal->mul($valOne,$valtwo);
			$cal->div($valOne,$valtwo);
			}
			
			
	}
	
	
	
	
	//create a class for summation value
	class Calculation{
		function add($a,$b){
			echo "Summation = ".($a+$b)."<br/>";
		}
		
		function sub($a,$b){
			echo "Subtraction = ".($a-$b)."<br/>";
		}
		
		function mul($a,$b){
			echo "Multiplication = ".($a*$b)."<br/>";
		}
		
		function div($a,$b){
			echo "Division = ".($a/$b)."<br/>";
		}
	}
	
  ?>
  
  
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
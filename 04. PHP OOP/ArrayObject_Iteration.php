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
    //ArrayObject
	
	//create an array
    $arr = Array("Java","PHP","Java Script","JQuery");
	
	//create a array object & pass this array into the object method
	$arrObj = new ArrayObject($arr);
	
	//add new value in array , using "append()" build in method
	$arrObj->append("C++");
	
	//called bulid in method "getIterator()" by array object for iteration & put it another object like $iteration
	$iteration = $arrObj->getIterator();
	
	//Then validation complete by while loop & print values of that array
	while($iteration->valid()){
		//print array value by called build in method "current()"
		echo $iteration->current()."<br/>";
		//go to next value from array , using build in method "next()"
		$iteration->next();
	}

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
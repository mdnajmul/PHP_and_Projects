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
    //namespace is like a directory
	
    include "java.php";
    include "PHP.php";
    include "Ruby.php";
	
	//use for short long directory like that:
	use najmul\live\Ruby as me;
	
	//use namespace when we create class object.
	new najmul\java();
	new najmul\PHP();
	//new najmul\live\Ruby();
	//use short for create class object.
	new me();
	
	//print define function property.
	echo HTML;
	
	//use namespace for print constant function property.
	echo najmul\CS;
	
	//use namespace for calling function().
	najmul\coding();
	 
	 

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
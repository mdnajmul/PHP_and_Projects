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
    
     include "Language.php";
	 
	 $java = new Language();
	 
	 $java->setCat("OOP");
	 $java->setframework("Spring");
	 
	 //using clone
     //by cloning $php object with $java object,All feature of $java object copy into $php object.	 
	 $php = clone $java;
	 $php->setCat("Array");
	 $php->setframework("Laravel");
	 
	 echo $java->getCat()."<br/>";
	 echo $java->getframework()."<br/>";
	 
	 echo $php->getCat()."<br/>";
	 echo $php->getframework();

?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
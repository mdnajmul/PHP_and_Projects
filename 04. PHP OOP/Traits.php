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
   
  //Traits
  
  //How to create trait class
   trait Java{
	   
	   //create a method inside trait Java which print a line.
	   public function javaProgrammar(){
		   
		   echo "I love Java Programming.<br/>";
	   }
	   
   }
   
   //Create another trait name is Php
   trait Php{
	   
	   //create a method inside trait Php which print a line.
	   public function phpProgrammar(){
		   
		   echo "I love Php Programming.";
	   }
	   
   }
   
   /*
   //We also merge many traits class into one trait class
   trait JavaPhp{
	   
	   use Java,Php;
   }
   
   class programmar_2{
	   
	   use JavaPhp;
   }
   $pr2 = new programmar_2;
   $pr2->javaProgrammar();
   $pr2->phpProgrammar();
   
   */
   
   //create a class which use both trait.
   // a class can be used one or more than one traits
   class programmar_1{
	   
	   //how to use trait inside a class
	   //here 2 traits use in one line.
	   use Java,Php;
   }
	
   $pr2 = new programmar_1;
   $pr2->javaProgrammar();
   $pr2->phpProgrammar();
	
  //one or same trait class also can be used many Classes.  
  
?>
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "MD NAJMUL HOQUE OVI"; ?></h2>
 </section>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
   <title> PHP Syntax</title>
   <style>
        body{font-family:vardana}
       .phpcode{width:900px; margin: 0 auto; background: #ddd;}
	   .headeroption, .footeroption {background:#444; color:#fff;text-align:center;padding:20px;}
       .headeroption h2, .footeroption h2 {margin:0}
       .maincontent{min-hieght:400px;padding:20px;}
        p{margin:0}	   
   </style>
</head>

<body>

 <div class="phpcode">
   <section class="headeroption">
       <h2>PHP Fundumental Tutorial</h2>

   </section>
   
		  <section class="maincontent">
		  <hr/>
		  PHP array() Function - Create Multi-Dimentional Array
		  <hr/>
		  
			<?php
            //Create Multi-Dimentional Array
			$age = array(
			             array("Volvo","100","90"),
						 array("BMW","40","30"),
						 array("Toyota","120","100")
						);
						
                     //print/display array value
					 
					 echo $age[0][0]."<br/>";
					 echo $age[1][0]."<br/>";
					 echo $age[2][0];
             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
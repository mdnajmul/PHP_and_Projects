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
		  PHP array() Function - compact()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The compact() function creates an array from variables and their values.
                    
                    Note: Any strings that does not match variable names will be skipped.
                    
                    Syntax: compact(var1, var2...)
             */
              //declare some variables & assign values
              $name  = "Najmul Ovi";
              $dep   = "CSE";
              $skill = "PHP & Java";
              
              //create an associative array by using these variables inside compact() function
              $res = compact("name","dep","skill");
              
              //print $res array values
              print("<pre>");
              print_r($res);
              print("</pre>");
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
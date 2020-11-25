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
		  PHP array() Function - array_count_values()
		  <hr/>
		  
			<?php
                    
              //Use of array_count_values() function is find out that a value is present how many times in an array
              
                    $name = array("Najmul Ovi","Jewel Rana","Aslam Shikder","Najmul Ovi","Jewel Rana","Aslam Shikder","Jewel Rana","Jewel Rana","Najmul Ovi");
					
					//Now we print number of each value inside the array
					//we use array_count_values() function for find the result
					print("<pre>");
					print_r(array_count_values($name));
					print("</pre>");

             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
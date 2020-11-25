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
		  PHP array() Function - array_intersect()
		  <hr/>
		  
			<?php
			
            /*
               Definition and Usage:
                   The array_intersect() function compares the 'values' of two (or more) arrays, and returns the 'matches' values.
                   This function compares the 'values' of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
                   Syntax: array_intersect(array1, array2, array3, ...)
            */  
              
            //create three associative array for check array_intersect
			//array_intersect() find out similar/common value from first array which are matching with other array
                $array_one = array(
				                    "a" => "red",
									"b" => "green",
									"c" => "blue",
									"d" => "yellow"
				                  );
                 
				$array_two = array(
				                    "e" => "red",
									"f" => "green",
									"g" => "black"
				                  );
				
			   $array_three = array(
				                    "a" => "red",
									"b" => "green",
									"h" => "yellow"
				                  );
			    
				//apply array_intersect() function
				$similarValue = array_intersect($array_one,$array_two,$array_three);
					print("<pre>");
					print_r($similarValue);
					print("</pre>");

             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
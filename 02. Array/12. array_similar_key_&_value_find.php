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
		  PHP array() Function - array_intersect_assoc()
		  <hr/>
		  
			<?php
              
            /*
               Definition and Usage:
               The array_intersect_assoc() function compares the 'keys and values' of two (or more) arrays, and returns the matches.
               This function compares the 'keys and values' of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
               Syntax: array_intersect_assoc(array1,array2,array3, ...)
            */  
              
			//create three associative array for check array_intersect_assoc
			//array_intersect_assoc() find out similar/common both key & value from first array which are matching with other array
                $array_one = array(
				                    "a" => "red",
									"b" => "green",
									"c" => "blue",
									"d" => "yellow"
				                  );
                 
				$array_two = array(
				                    "a" => "red",
									"b" => "green",
									"c" => "blue"
				                  );
				
			   $array_three = array(
				                    "a" => "red",
									"b" => "green",
									"c" => "yellow"
				                  );
			    
				//apply array_intersect_assoc() function
				$similarValue = array_intersect_assoc($array_one,$array_two,$array_three);
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
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
		  PHP array() Function - array_diff_key()
		  <hr/>
		  
			<?php
              
            /*
               Definition and Usage:
                  The array_diff_key() function compares the 'keys' of two (or more) arrays, and returns the differences.
                  This function compares the 'keys' of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
                  Syntax: array_diff_key(array1, array2, array3, ...)
            */  
              
			//create two associative array for check array_diff_key
			//array_diff_key() find out unique value from first array which are not matching only key with other array
                $array_one = array(
				                    "a" => "red",
									"b" => "green",
									"c" => "blue",
									"d" => "yellow"
				                  );
                 
				$array_two = array(
				                    "a" => "red",
									"c" => "blue",
									"d" => "purple"
				                  );
								  
			    
				//apply array_diff_key() function
				$difference = array_diff_key($array_one,$array_two);
					print("<pre>");
					print_r($difference);
					print("</pre>");

             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
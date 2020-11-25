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
		  PHP array() Function - array_sum()
		  <hr/>
		  
			<?php
             
              /*
                 Definition and Usage:
                      The array_sum() function returns the sum of all the values in the array.
                      
                      Syntax: array_sum(array)
              */
              
              
             // create an associative array  
			 $num = array(
			           "a" => 10,
					   "b" => 20,
					   "c" => 50,
					   "d" => 100
				      );
				
                //use array_sum() function for sum array element
				$res = array_sum($num);
                //show summation result
                echo "Total: ".$res;				
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
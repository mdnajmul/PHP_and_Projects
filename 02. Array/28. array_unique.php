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
		  PHP array() Function - array_unique()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                   The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.
                   
                   Note: The returned array will keep the first array item's key type.
                   
                   Syntax: array_unique(array, sorttype)
             */ 
              
			 //create associative array
			 $col = array(
			           "a" => "green",
					   "b" => "red",
					   "c" => "blue",
					   "d" => "yellow",
					   "e" => "green",
					   "f" => "blue",
					   "g" => "orange"
				      );
				
                //display every element only once.				
				$res = array_unique($col);
                
                //show unique array element
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
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
		  PHP array() Function - array_shift()
		  <hr/>
		  
			<?php
             
              /*
                 Definition and Usage:
                     The array_shift() function removes the first element from an array, and returns the value of the removed element.
                     
                     Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1
                     
                     Syntax: array_shift(array)
              */ 
              
              //create an associative array
              $color = array(
              
                  "a" => "green",
                  "b" => "blue",
                  "c" => "red",
                  "d" => "black"
              
              );
              
              //use array_shift() function to remove first element from $color array
              array_shift($color);
              
              //print array values
              print("<pre>");
              print_r($color);
              print("</pre>");
              
              
              
            ?>

		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
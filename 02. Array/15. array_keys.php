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
		  PHP array() Function - array_keys()
		  <hr/>
		  
			<?php
              
            /*
               Definition and Usage:
               The array_keys() function returns an array containing the keys.
               
               Syntax: array_keys(array, value, strict)
            */
             
              
              //create an associative array
              $car = array(
              
                  "Volvo"  => "xc90",
                  "BMW"    => "x5",
                  "Toyota" => "Highlander"
              
              );
              
              //put all key from $car array inside $result variable by using array_keys(array) function
              $result = array_keys($car);
              
              //print all key from $result array variable
              print("<pre>");
              print_r($result);
              print("</pre>");
             
			 echo "<br/>---------------------We can specify a value, then only the keys with this value are returned-------------------------------<br/>";
             ////put only key which value is "x5" from $car array inside $result variable by using array_keys(array, value) function
             $result = array_keys($car, "x5");
              
             //print key from $result array variable
              print("<pre>");
              print_r($result);
              print("</pre>");  
              
              
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
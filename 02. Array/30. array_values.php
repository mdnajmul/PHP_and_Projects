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
		  PHP array() Function - array_values()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The array_values() function returns an array containing all the values of an array.
                    
                    Tip: The returned array will have numeric keys, starting at 0 and increase by 1.

                    Syntax: array_values(array) 
             */
              
			 //create associative array
			 $col = array(
			           "0" => "green",
					   "1" => "red",
					   "2" => "blue",
				 );
             
              //use array_values() function return all element from array
              $res = array_values($col);
              
               //print array values
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
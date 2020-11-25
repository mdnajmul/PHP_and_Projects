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
		  PHP array() Function - array_reverse()
		  <hr/>
		  
			<?php
             
            /*
               Definition and Usage:
                  The array_reverse() function returns an array in the reverse order.
                  Syntax: array_reverse(array, preserve)


            */
              
            //create an index array
			$color = array("green","red","blue","yellow");
			
			//Now reverse array element $ put values inside $res 
			$res = array_reverse($color);
			
            //print values  
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
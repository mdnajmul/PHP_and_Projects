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
		  PHP array() Function - shuffle()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The shuffle() function randomizes the order of the elements in the array.
                    
                    This function assigns new keys for the elements in the array. Existing keys will be removed

                    Syntax: shuffle(array)
             */
              
             //create an index array
             $color = array("red","green","blue","black","orange","white");
            
             //use shuffle() function to show array values randomly 
             shuffle($color);  
              
             //show randomizes values from array
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
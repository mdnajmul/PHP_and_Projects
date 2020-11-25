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
		  PHP array() Function - array_unshift()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.
                    
                    Tip: We can add one value, or as many as we like.
                    
                    Note: Numeric keys will start at 0 and increase by 1. String keys will remain the same.
                    
                    Syntax: array_unshift(array, value1, value2, value3, ...)
             */
              
			 //create associative array
			 $col = array(
			           "0" => "green",
					   "1" => "red",
					   "2" => "blue",
				      );
				
                //insert an element into first index				
				array_unshift($col,"yellow");
                

                print("<pre>");
                print_r($col);				
                print("</pre>");				
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
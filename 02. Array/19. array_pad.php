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
		  PHP array() Function - array_pad()
		  <hr/>
		  
			<?php
             
              /*
                 Definition and Usage:
                     The array_pad() function inserts a specified number of elements, with a specified value, to an array.
                     
                     Tip: If you assign a negative size parameter, the function will insert new elements BEFORE the original elements.
                     
                     Note: This function will not delete any elements if the size parameter is less than the size of the original array.
                     
                     Syntax: array_pad(array, size, value)
                     
              */
              
			 //create an array
			 $arr = array("red","green");
			 
			 
			 //Specific array elements insert by putting specific values 
			 $res = array_pad($arr, 3, "blue");
			 
			 //print values from $res array
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
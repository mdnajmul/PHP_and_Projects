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
		  PHP array() Function - compact()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The current() function returns the value of the current element in an array.
                    
                    Every array has an internal pointer to its "current" element, which is initialized to the first element inserted into the array.
                    
                    Tip: This function does not move the arrays internal pointer.
                    
                    Related methods:
                        end() - moves the internal pointer to, and outputs, the last element in the array
                        next() - moves the internal pointer to, and outputs, the next element in the array
                        prev() - moves the internal pointer to, and outputs, the previous element in the array
                        reset() - moves the internal pointer to the first element of the array
                        each() - returns the current element key and value, and moves the internal pointer forward
                    
                    Syntax: current(array)
             */
              
          
             //create an indexing array
             $name = array("Najmul","Ovi","Jewel","Rana","Aslam");
              
             // print all values from $name array
             print("<pre>");
             print_r($name);  
             print("</pre>");  
              
             echo "---------------------------- Use current() function [hold first value from array] --------------------------------<br/>";
             echo "<br/>Current Value: ".current($name)."<br/>";
              
             echo "<br/>---------------------------- Use next() function [hold second/after_first value from array] --------------------------------<br/>";
             echo "<br/>Next/Second Value: ".next($name)."<br/>";
              
             echo "<br/>------------- Use current() function [After using next() function , Now current value is secound value from name array]  -------------<br/>";
             echo "<br/>Current Value: ".current($name)."<br/>";
              
             echo "<br/>------------- Use prev() function [hold previous/before_current value from array]  -------------<br/>";
             echo "<br/>Previous Value: ".prev($name)."<br/>"; 
              
             echo "<br/>---------------------------- Use end() function [hold last value from array] --------------------------------<br/>";
             echo "<br/>Last Value: ".end($name)."<br/>";
              
              
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
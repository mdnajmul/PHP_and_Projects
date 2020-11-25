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
		  PHP array() Function - array_walk()
		  <hr/>
		  
			<?php
             
             /*
                Definition and Usage:
                    The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.
                    
                    Note: You can change an array element's value in the user-defined function by specifying the first parameter as a reference: &$value.
                    
                    Tip: To work with deeper arrays (an array inside an array), use the array_walk_recursive() function.

                    Syntax: array_walk(array, myfunction, parameter...) 
             */
             
             //create a user defined function
             function myFunction($department, $name){
                  echo "$name comes from $department department.<br/>";
              }
              
			 //create associative array
			 $name = array(
			           "Najmul" => "CSE",
					   "Juwel"  => "EEE",
					   "Aslam"  => "BBA",
					   "Shamim" => "ETE",
				 );
             
            //use array_walk($array_name, "function_name") function
            array_walk($name, "myFunction");  
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
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
		  PHP array() Function - array_replace()
		  <hr/>
		  
			<?php
              
             /*
                Definition and Usage:
                    The array_replace() function replaces the values of the first array with the values from following arrays.
                    Tip: We can assign one array to the function, or as many as we like.
                    Syntax: array_replace(array1, array2, array3, ...)
             */
              
             echo "--------------------------------- Indexing Array ---------------------------------------------<br/>";  
              
             //create two indexing array
			 $arr_one = array("green","red","blue");
			 $arr_two = array("white","black","orange");
			 
			 //Here we replace arr_two element to arr_one
			 $res = array_replace($arr_one,$arr_two);
			 
             //print $res array value  
             print("<pre>");
			 print_r($res);
			 print("</pre>");
			 
			 
			 echo "<br/>------------------------------ Associative Array ------------------------------------------<br/>";

             //create two associative array  
             $arr_three = array("a" => "green","b" => "red","c" => "blue");
			 $arr_four  = array("a" => "white","b" => "black","c" => "orange");		 

			 //Here we replace arr_four element to arr_three
             $result = array_replace($arr_three,$arr_four);
			 
			 //print $result array value 
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
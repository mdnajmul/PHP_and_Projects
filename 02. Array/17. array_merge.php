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
		  PHP array() Function - array_merge()
		  <hr/>
		  
			<?php
            
            /*
               Definition and Usage:
                  The array_merge() function merges one or more arrays into one array.
                  Tip: We can assign one array to the function, or as many as we like.
                  Note: If two or more array elements have the same key, the last one overrides the others.
                  Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys               starting at 0 and increases by 1 for each value.
                  Syntax: array_merge(array1, array2, array3, ...)
            */  
             
            echo "--------------------------Merge Two Indexing Array--------------------------------------------------<br/>";  
			 //create two indexing array
            $col_one = array("green","red","blue");
            $col_two = array("black","white","yellow");
			
			//Now merge two arrays & put values into $result array variable
			$result = array_merge($col_one,$col_two);
			//print values
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			
            echo "<br/>--------------------------Merge Two Associative Array--------------------------------------------------<br/>";
			//create two Associative Array
			$arr_one = array(
			      "a" => "red",
				  "b" => "green"
			);
			
			$arr_two = array(
			      "c" => "blue",
				  "b" => "yellow"
			);
			//Now merge two associative array & put values into $result array variable
			$res = array_merge($arr_one,$arr_two);
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
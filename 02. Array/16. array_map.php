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
		  PHP array() Function - array_map()
		  <hr/>
		  
			<?php
            
            /*
               Definition and Usage:
               The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
               
               Syntax: array_map(myfunction, array1, array2, array3, ...)
            */  
            
            echo "--------------------Example of Index Array values ussing array_map() Function-------------------------<br/>";  
            //create a function  
			function myfunction($val){
				return ($val+$val);
			}
            //create an index array  
			$num = array(1,2,3,4,5);
			
            //use array_map() function & pass function_name, array_name through it. Finally, put results into $result variable
			$result = array_map("myfunction",$num);
			
            //print values  
			print("<pre>");
			print_r($result);
			print("</pre>");
              
            echo "<br/>--------------------Example of Associative Array values transfer to uppercase by ussing array_map() Function-------------------------<br/>";
            //create a function for transfer uppercase of array values
            function upperCase($data){
                $res = strtoupper($data);
                return $res;
            }   
              
            //create an associative array
            $stu = array(
            
               "Name"        =>  "Najmul ovi",
               "Department"  =>  "Computer Science Engineering",
               "University"  =>  "Southeast University"
                
            );
              
             
            $resultUpper = array_map("upperCase", $stu);
            
            //print values  
			print("<pre>");
			print_r($resultUpper);
			print("</pre>");  
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
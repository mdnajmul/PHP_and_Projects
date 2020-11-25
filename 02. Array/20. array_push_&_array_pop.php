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
		  PHP array() Function - array_push() & array_pop()
		  <hr/>
		  
			<?php
             
             echo "------------------------------ Array push function -------------------------------------<br/>";
             /*
                Definition and Usage:
                    The array_push() function inserts one or more elements to the end of an array.
                    Tip: We can add one value, or as many as we like.
                    Note: Even if your array has string keys, your added elements will always have numeric keys.
                    Syntax: array_push(array, value1, value2, ...)
             */
              
             //create an index array  
			 $arr = array("green","red","blue");
			 
			 //array_push method for add new element inside end of the array
			 array_push($arr,"yellow","black");
			 
			 //print array values
			 print("<pre>");
			 print_r($arr);
			 print("</pre>");
              
              
            echo "<br/>------------------------------ Array pop function -------------------------------------<br/>"; 
            /*
               Definition and Usage:
                    The array_pop() function deletes the last element of an array.
                    Syntax: array_pop(array)
            */  
              
            //create an index array
            $names = array("Ovi","Jewel","Shamim","Aslam","Rony");
              
            //array_pop() use for delete the last element from $names array 
            array_pop($names);
              
            //print array values
			 print("<pre>");
			 print_r($names);
			 print("</pre>");  
       
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>
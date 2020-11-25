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
		  PHP array() Function - array_combine()
		  <hr/>
		  
			<?php
              //Use of array_combine($key,$value) function we can show value from two array as key(1st array value) & value(2nd array value)
                    
                    //create two(2) array
                    $name = array("Najmul Ovi","Jewel Rana","Aslam Shikder");
					$department = array("CSE","EEE","Textile");
					
					//combine those two array by array_combine($key,$value) function 
					$combine = array_combine($name,$department);
					
                    //print combine array as key(1st array value) & value(2nd array value)					
					print("<pre>");
					print_r($combine);
					print("</pre>");
             
			 
            ?>
			



		  </section>
  
    <section class="footeroption">
	    <h2>www.mdnajmulovi.com</h2>
	</section>
 </div>
</body>
</html>